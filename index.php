<?php
include 'autoload.php';

$run = new \controller\Main(substr($_SERVER['REQUEST_URI'], 1)==''?'run':substr($_SERVER['REQUEST_URI'], 1));