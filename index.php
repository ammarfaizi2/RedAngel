<?php
/**
*
* Crayner PHP Framework
* Crayner System
*
*/
error_reporting(E_ALL);
ini_set('display_errors', true);

try{
	new aaaaa;
} catch(\Exception $e){
	print "error nih";
}
require __DIR__ . '/vendor/autoload.php';
use System\Crayner;
use System\Config_Handler;

$app = new Crayner();
$app->run();