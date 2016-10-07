<?php
namespace model;
class Render {



    public static function view($view, $dataArray=null){
        $data = $dataArray;
        echo require_once('./view/'.$view.'.php');
    }

}