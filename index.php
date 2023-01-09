<?php
use App\Models\AnnoncesModel;
// header("Access-Control-Allow-Origin: http://localhost:5173");
// header("Content-Type: text/html; charset=utf-8");

use App\Autoloader;
require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel();

var_dump($model->findAll());
// phpinfo();