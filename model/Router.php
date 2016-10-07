<?php
namespace model;
class Router
{
    public function getMethod($url, $object){
        if($url == ''){
            $url = 'run';
        }
        if(method_exists($object, $url)){
            $object->$url();
        }else{
            throw new \Exception('Page not found');
        }


    }
}