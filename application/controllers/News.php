<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    
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
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"News", "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $title = array("title" => "Walailak - News");
        
        $this->load->view('page/head', $title);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view('news/index');
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
        
    }
    public function page($newid)
    {
        $this->load->helper('url');
        $this->load->model('model');
        $news = $this->model->getNews($newid);
        
        $data['breadcrumb'] = array(
            array("page"=>"Home", "url"=>base_url(), "icon"=>"fa fa-home"),
            array("page"=>"News", "url"=>base_url()."news", "icon"=>"fa fa-angle-right"),
            array("page"=>$news['title'], "url"=>"#", "icon"=>"fa fa-angle-right")
        );
        
        $this->load->helper('url');
        $this->load->view('page/head', $news);
        $this->load->view('page/menu');
        $this->load->view('page/header_page', $data);
        $this->load->view($news["page"]);
        $this->load->view('page/news');
        $this->load->view('page/footer');
        $this->load->view('page/foot');
    }
    
}
