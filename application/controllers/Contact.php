<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    public function index(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Contact Us", "url"=>"#", "icon"=>"fa fa-angle-right"),
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('contact/index');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
    
}
