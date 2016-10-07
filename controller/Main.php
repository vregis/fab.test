<?php

class Main {

    public function __construct($url){
        if($url == ''){
            $this->run();
        }elseif(method_exists($this, $url)){
            $this->$url();
        }else{
            $this->error404();
        }
    }

    public function run(){
        $data = new DatafromviewDatabase();
        $dataArray = $data->getData();
        Render::view('index', ['data' => $dataArray]);
    }

    public function updatelog(){
        $tr = new TruncateDatabase();
        $tr->startTruncate();  // Use decorator pattern to truncate tables

        $upd = new UpdateLog();
        $upd->parseFirstLog();
        $upd->parseSecondLog();
    }

    public function error404(){
        echo 'Page not found';
    }

}