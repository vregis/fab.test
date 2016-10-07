<?php
/**
 * Class Router
 */
namespace model;
use controller\Main;

class Router
{
    /**
     * @param string $url
     * @param Main $object
     * @throws \Exception
     */
    public function getMethod($url, $object){
        if(method_exists($object, $url)){
            $object->$url();
        }else{
            throw new \Exception('Page not found');
        }


    }
}