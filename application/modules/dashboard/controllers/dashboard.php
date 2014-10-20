<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $data['pagetitle']	= 'Dashboard';
        $data['time'] 		= date('Y/m/d');
        $data['breadcrumb'] = array('Dashboard' => 'dashboard');
        $js['js']			= array('vmap','flot','pulsate','datarange','gritter','fullcalendar','piechart','sparkline');
        $js['custom']		= array('jvmap','calendar','charts','chat','daterange','intro','tasks');
		
        $this->template->display('dashboard', $data, $js);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */