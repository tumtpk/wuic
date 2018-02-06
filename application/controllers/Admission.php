<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

    public function applicantQualification(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Applicant Qualification", "url"=>base_url()."main/applicantQualification", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('Admission/ApplicantQualification');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}
}
