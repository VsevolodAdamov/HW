<?php
spl_autoload_register('autoloader');
function autoloader($className){
	include($_SERVER["DOCUMENT_ROOT"] . $className.".php");
}
$text = include('Text.txt');
$messenger = new Pigeon();
$comm = new Communication();
echo $comm->message($messenger, $text);