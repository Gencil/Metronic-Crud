<?php
class Datatables {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
        $this->_ci->load->model('m_mahasiswa');
    }

    function show(){
        print_r($_REQUEST);
        $iTotalRecords = $this->_ci->m_mahasiswa->count_all_data();
        $iDisplayLength = intval($_REQUEST['iDisplayLength']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
        $iDisplayStart = intval($_REQUEST['iDisplayStart']);
        $sEcho = intval($_REQUEST['sEcho']);

        $records = array();
        $records["aaData"] = array(); 


        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $result = $this->_ci->m_mahasiswa->get_all_data('', $iDisplayStart, $iDisplayLength);

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
            $records["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["sMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["sEcho"] = $sEcho;
        $records["iTotalRecords"] = $iTotalRecords;
        $records["iTotalDisplayRecords"] = $iTotalRecords;


        // return json_encode($records);
    }

}

?>
