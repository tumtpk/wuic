<?php

    class Model extends CI_Model {


        public function getNews($newid){
            $news = [
                "001" => [ "title" => "MOU Signing between WU, WUIC and IIAI", "page" => "news/001", "date" => "March 13, 2018" ],
                "002" => [ "title" => "ผงาด 3 วิทยาลัยนานาชาติมหาวิทยาลัยวลัยลักษณ์ พร้อม (29 ม.ค.61) บ่ายนี้มีคำตอบ", "page" => "news/002", "date" => "January 29, 2018" ],
                "003" => [ "title" => "WUIC attends Edulife Expo for the first time", "page" => "news/003", "date" => "March 11, 2018" ],
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
