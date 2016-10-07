<?php
include 'autoload.php';
include 'controller/Main.php';

$run = new controller\Main(substr($_SERVER['REQUEST_URI'], 1));