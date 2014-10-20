<?php
class Template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function display($template, $data = NULL, $js = NULL, $css = NULL) {
        $data['_content']       = $this->_ci->load->view($template, $data, TRUE);
        $data['_header']        = $this->_ci->load->view('templates/header', $data, TRUE);
        $data['_page_header']   = $this->_ci->load->view('templates/page_header', $data, TRUE);
        $data['_menu']          = $this->_ci->load->view('templates/menu', $data, TRUE);
        $data['_sidebar']       = $this->_ci->load->view('templates/sidebar', $data, TRUE);
        $data['_footer']        = $this->_ci->load->view('templates/footer', $data, TRUE);
        $data['_js']            = $this->_ci->load->view('templates/js', $js, TRUE);
        $data['_css']           = $this->_ci->load->view('templates/css', $css, TRUE);
        $data['_base']          = $this->_ci->load->view('templates/template.php', $data);
    }

    function ajax_content($template, $data = NULL){
        $this->_ci->load->view('templates/page_header', $data);
        $this->_ci->load->view($template, $data);
    }

}

?>
