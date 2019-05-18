<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class scholarship extends CI_Controller {
    
    
    public function index()
    {
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"WUIC Scholarship", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "WUIC Scholarship");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('scholarship/content');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
        
    }
    
}
