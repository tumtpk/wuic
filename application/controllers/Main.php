<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header');
		$this->load->view('page/content');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function about(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('show/about');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}


	public function history(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/history');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function messageFromDean(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/messageFromDean');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function organizasional(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/organizasional');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function philosophy(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/philosophy');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function vision(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/vision');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function visiting(){
		$this->load->helper('url');
		
		$data['breadcrumb'] = array(
		    array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
		    array("page"=>"About", "url"=>"#", "icon"=>"fa fa-angle-right"),
		    array("page"=>"Visiting Professors", "url"=>base_url()."main/visiting", "icon"=>"fa fa-angle-right")
		);
		
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('page/header_page', $data);
		$this->load->view('about/visiting');
		$this->load->view('page/news');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}


	public function wuicCouncil(){
		$this->load->helper('url');
		$this->load->view('page/head');
		$this->load->view('page/menu');
		$this->load->view('about/wuicCouncil');
		$this->load->view('page/footer');
		$this->load->view('page/foot');
	}

	public function digital(){

	}

	public function logistic(){
		
	}

	public function publicAffairs(){
		
	}

	public function name(){
		
	}



	


	

	
}
