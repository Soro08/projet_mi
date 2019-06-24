<?php
include_once '../app/_config/config.php';

include_once '../'.APP.'_functions/functions.php';
include_once '../'.APP.'_classes/Autoloader.php';


Autoloader::register();



$filename = $_FILES['file']['name'];

$myObj = new stdClass();;

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";
$myObj->file = $filename;

$myJSON = json_encode($myObj);

echo $myJSON;