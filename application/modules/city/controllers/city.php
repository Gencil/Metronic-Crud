<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City extends MX_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_city');
        // $this->load->library('datatables');
    }

	public function index()
	{
        $data['pagetitle']	= 'City';
        $data['time'] 		= date('Y/m/d');
        $data['breadcrumb'] = array('City' => 'city/table');
        $js['js']           = array('datatables','datepicker','select','validation');
        $css['core']        = array('datatables','datepicker','select');
        $js['core']         = array('datatable');
        $js['custom']		= array('table-ajax','form-validation');
		
        $this->template->display('city', $data, $js, $css);
	}

    public function select(){
        $aCari = array('code','name');
        
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

        $iTotalRecords  = $this->m_city->count_all_data($where);
        $iDisplayLength = intval($_REQUEST['iDisplayLength']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
        $iDisplayStart  = intval($_REQUEST['iDisplayStart']);
        $sEcho          = intval($_REQUEST['sEcho']);

        $records = array();
        $records["aaData"] = array(); 

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $result = $this->m_city->get_all_data($where, $order, $iDisplayStart, $iDisplayLength);

        $i = 1 + ($iDisplayLength * $iDisplayStart);
        foreach ($result as $rows) {
            $records["aaData"][] = array(
                '<input type="checkbox" name="id[]" value="'.$rows['code'].'">',
                $i,
                $rows['code'],
                $rows['name'],
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
        $data['pagetitle']  = 'City';
        $data['breadcrumb'] = array('City' => 'city/table');
        $this->template->ajax_content('city', $data);
    }

    public function add(){
        $data['pagetitle']  = 'City';
        $data['breadcrumb'] = array('City' => 'city/table', 'Add' => 'city/add', 'Add' => 'city/add');
        $this->template->ajax_content('city_add', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('code', 'Code', 'required|min_length[3]|max_length[3]|callback_code_check');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run($this))
        {
            $data['code'] = $this->input->post('code');
            $data['name'] = $this->input->post('name');

            $result = $this->m_city->insert($data);
            if($result)
            {
                $data['status'] = 1;
                $data['message'] = "Data Gagal Diinputkan!";
                echo json_encode($data);
            }else{
                $data['status'] = 0;
                echo json_encode($data);
            }
        }else{
            $data['status'] = 0;
            $data['message'] = "City Code Exist!";
            echo json_encode($data);
        }
    }

    public function code_check($data){
        $result = $this->m_city->check_code($data);
        return $result;
    }

}

/* End of file welcome.php */