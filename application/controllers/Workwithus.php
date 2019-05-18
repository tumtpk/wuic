<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workwithus extends CI_Controller {
    
    public function index(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Work with Us", "url"=>"workwithus", "icon"=>"fa fa-angle-right"),
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('workwithus/content2');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
    
}
