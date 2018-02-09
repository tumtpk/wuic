<?php

    class model extends CI_Model {


        public function getNews($newid){
            $news = [
                "001" => [ "title" => "Why You Should Study at Walailak University International College (WUIC)", "page" => "news/001", "date" => "January 8, 2018" ],
                "002" => [ "title" => "Bachelor of Business Administration in Logistics Analytics and Supply Chain Management", "page" => "news/002", "date" => "January 5, 2018" ],
                "003" => [ "title" => "Bachelor of Arts Program in Public Affairs", "page" => "news/003", "date" => "January 5, 2018" ],
                "004" => [ "title" => "Bachelor of Engineering (Digital Innovation Engineering)", "page" => "news/004", "date" => "January 5, 2018" ],
                "005" => [ "title" => "รายละเอียดเกียวกับการรับสมัครนักศึกษาปีการศึกษา 2561", "page" => "news/005", "date" => "November 14, 2017" ]
            ];
            
            if (array_key_exists($newid,$news)){
                return $news[$newid];
            }else{
                $this->load->helper('url');
                redirect(base_url(), 'refresh');
            }
            
        }

    }

?>
