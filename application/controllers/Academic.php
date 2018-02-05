<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller {



	public function digital(){
        $this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Visiting Professors", "url"=>base_url()."main/visiting", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('academic/digital');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function logistic(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Visiting Professors", "url"=>base_url()."main/visiting", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('academic/logistic');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function publicAffairs(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Visiting Professors", "url"=>base_url()."main/visiting", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('academic/publicAffairs');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}


	

	
}
