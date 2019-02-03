<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    
    public function the5s()
    {
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"5s International Collage", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "5s International Collage");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/5s');
        // $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
        
    }

    function areadivision(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"5s International Collage", "url"=>base_url("about/the5s"), "icon"=>"fa fa-angle-right"),
            array("page"=>"การแบ่งพื้นที่และผู้รับผิดชอบกิจกรรม 5ส วิทยาลัยนานาชาติ", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "การแบ่งพื้นที่และผู้รับผิดชอบกิจกรรม 5ส วิทยาลัยนานาชาติ");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/5s/areadivision');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    function goal(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"5s International Collage", "url"=>base_url("about/the5s"), "icon"=>"fa fa-angle-right"),
            array("page"=>"เป้าหมายการดำเนินงาน 5ส", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "เป้าหมายการดำเนินงาน 5ส");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/5s/goal');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    function standard(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"5s International Collage", "url"=>base_url("about/the5s"), "icon"=>"fa fa-angle-right"),
            array("page"=>"มาตรฐานกลาง", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "มาตรฐานกลาง");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/5s/standard');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    function committee(){
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"5s International Collage", "url"=>base_url("about/the5s"), "icon"=>"fa fa-angle-right"),
            array("page"=>"โครงสร้างคณะกรรมการ 5ส", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "โครงสร้างคณะกรรมการ 5ส");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/5s/committee');
        // $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }

    public function collaborations()
    {
        $this->load->helper('url');
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"International Collaborations", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "International Collaborations");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('about/collaborations');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
        
    }
    
}
