<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Life extends CI_Controller {
    
    public function facilities(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Facilities", "url"=>base_url()."study/intership", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('life/facilities');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    public function transportation(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Transpotation on Campus", "url"=>base_url()."study/intership", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('life/transportation');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    public function academicSupport(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Academic Support Centres", "url"=>base_url()."study/intership", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('life/academicSupport');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    public function map(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Map", "url"=>base_url()."study/intership", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('life/map');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

}
