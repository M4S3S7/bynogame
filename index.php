<?php
header("Content-Type:application/json");
header("Access-Controll-Allow-Origin: *");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$uri    = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$exp = explode('/', $uri);
$param = $exp[2];
if($param == 'stocks'){
  switch ($method){
    case 'GET':
    include_once 'application/controllers/GetController.php';
    $get = new GetController();
    $get->get();
    break;
    case 'POST':
    include_once 'application/controllers/PostController.php';
    $post = new PostController();
    $post->post();

    break;
    default:
    echo "Unknown request method.";
    break;
  }
}else {

}
