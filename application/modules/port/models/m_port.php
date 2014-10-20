<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_port extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

    public function count_all_data($where = NULL){
    	$this->db->select("count(*) as jumlah")->from('dosen');
        (!is_null($where) ? $this->db->like($where) : '');
    	$query	= $this->db->get();
    	$result	= $query->row();
    	return $result->jumlah;
    }

    public function get_all_data($where = NULL, $order = NULL, $start = 0, $tampil = 20){
        $this->db->select("*")->from('dosen')->order_by($order[0], $order[1])->limit($tampil, $start);
        (!is_null($where) ? $this->db->like($where) : '');
        $query  = $this->db->get();
    	$result	= $query->result_array();
    	return $result;
    }
}