<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Port extends MX_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_port');
        $this->load->library('datatables');
    }

	public function index()
	{
        $data['pagetitle']	= 'Mahasiswa';
        $data['time'] 		= date('Y/m/d');
        $data['breadcrumb'] = array('Mahasiswa' => 'port/table');
        $js['js']           = array('datatables','datepicker','select','validation');
        $css['core']        = array('datatables','datepicker','select');
        $js['core']         = array('datatable');
        $js['custom']		= array('table-ajax','form-validation');
		
        $this->template->display('port', $data, $js, $css);
	}

    public function select(){
        $aCari = array('nip','nama','jabatan_strk');
        
        // Filter        
        $where = NULL;
        if(@$_REQUEST['sAction'] == 'filter')
        {
            $where = array();
            foreach ($aCari as $key => $value) {
                if(!empty($_REQUEST[$value]))
                {
                    $where[$value] = $_REQUEST[$value]; 
                }
            }
        }

        // Order
        $order = array($aCari[($_REQUEST['iSortCol_0']-2)], $_REQUEST['sSortDir_0']);

        $iTotalRecords  = $this->m_port->count_all_data($where);
        $iDisplayLength = intval($_REQUEST['iDisplayLength']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
        $iDisplayStart  = intval($_REQUEST['iDisplayStart']);
        $sEcho          = intval($_REQUEST['sEcho']);

        $records = array();
        $records["aaData"] = array(); 

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $result = $this->m_port->get_all_data($where, $order, $iDisplayStart, $iDisplayLength);

        $i = 1 + ($iDisplayLength * $iDisplayStart);
        foreach ($result as $rows) {
            $records["aaData"][] = array(
                '<input type="checkbox" name="id[]" value="'.$rows['nip'].'">',
                $i,
                $rows['nip'],
                $rows['nama'],
                $rows['jabatan_strk'],
                '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
            );
            $i++;
        }

        if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action") {
            $records["sStatus"] = "OK";
            $records["sMessage"] = "Group action successfully has been completed. Well done!";}

        $records["sEcho"] = $sEcho;
        $records["iTotalRecords"] = $iTotalRecords;
        $records["iTotalDisplayRecords"] = $iTotalRecords;


        echo json_encode($records);
    }

    public function table(){
        $data['pagetitle']  = 'Mahasiswa';
        $data['breadcrumb'] = array('Mahasiswa' => 'port/table');
        $this->template->ajax_content('port', $data);
    }

    public function add(){
        $data['pagetitle']  = 'Mahasiswa';
        $data['breadcrumb'] = array('Mahasiswa' => 'port/table', 'Add' => 'port/add', 'Add' => 'port/add');
        $this->template->ajax_content('port_add', $data);
    }
}

/* End of file welcome.php */