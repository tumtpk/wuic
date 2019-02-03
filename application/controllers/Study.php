<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends CI_Controller {
    
    public function tuition(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Study at WUIC", "url"=>"#", "icon"=>"fa fa-angle-right"),
            array("page"=>"Tuition Fees", "url"=>base_url()."study/tuition", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('study/tuitionFees');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
    public function exchange(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Study at WUIC", "url"=>"#", "icon"=>"fa fa-angle-right"),
            array("page"=>"Exchange Programs", "url"=>base_url()."study/exchange", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('study/exchangePrograms');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
    public function scholarships(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Study at WUIC", "url"=>"#", "icon"=>"fa fa-angle-right"),
            array("page"=>"Scholarships", "url"=>base_url()."study/scholarships", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('study/scholarships');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
    public function intership(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"Study at WUIC", "url"=>"#", "icon"=>"fa fa-angle-right"),
            array("page"=>"Intership Courses", "url"=>base_url()."study/intership", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->view('page/head');
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('study/intershipCourses');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
}
