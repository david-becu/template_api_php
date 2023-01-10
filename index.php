<?php
// header("Access-Control-Allow-Origin: http://localhost:5173");
// header("Content-Type: text/html; charset=utf-8");

use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new AnnoncesModel;

$annonce = $model->setTitre('Nouvelle annonce');

var_dump($annonce);
// phpinfo();