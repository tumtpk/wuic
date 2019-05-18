<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    if(!function_exists('active_link')) {
        
        function title($str) {
            $str = substr($str,0,45);
            if(strlen($str) == 45){
                $str .= "...";
            }
            return $str;
        }

        function content($content) {
            return substr($content,0,110)."...";
        }

        function news($content) {
            return substr($content,0,200)."...";
        }

    }
?>