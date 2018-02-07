<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

    public function portfolio(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"portfolio", "url"=>base_url()."admission/portfolio", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('admission/portfolio');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
    }
    
    public function quota(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"quota", "url"=>base_url()."admission/quota", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('admission/quota');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
    }
    
    public function internationalStudents(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"International Students and Non TCAS system’s applicants", "url"=>base_url()."admission/internationalStudents", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('admission/internationalStudents');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

    public function applicantQualification(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Applicant Qualification", "url"=>base_url()."admission/applicantQualification", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('admission/ApplicantQualification');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
    }
    
    public function howToApply(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"How To Apply", "url"=>base_url()."admission/howToApply", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('admission/howToApply');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}
}
