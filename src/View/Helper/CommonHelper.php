<?php

namespace App\View\Helper;

use Cake\View\Helper;

class CommonHelper extends Helper {

    function get_url($url){
        return BASE_URL.$url;
    }

    function get_src($url){
        echo BASE_URL.$url;
    } 
}
?>