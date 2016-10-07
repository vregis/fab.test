<?php
namespace controller;

use model\DatafromviewDatabase;
use model\Migration;
use model\Render;
use model\Router;
use model\TruncateDatabase;
use model\UpdateLog;

class Main
{

    public function __construct($url)
    {
        $router = new Router();
        try{
            $router->getMethod($url, $this);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    public function run()
    {
        $data = new DatafromviewDatabase();
        $dataArray = $data->getData();
        Render::view('index', ['data' => $dataArray]);
    }

    public function updateLog()
    {
        $tr = new TruncateDatabase();
        $tr->startTruncate();  // Use adapter pattern to truncate tables

        $upd = new UpdateLog();
        $upd->parseFirstLog();
        $upd->parseSecondLog();
    }

    public function migrate()
    {
        $migrate = new Migration();
        $migrate->run();
    }

    public function error404()
    {
        echo 'Page not found';
    }

}