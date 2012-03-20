<?php
error_reporting(E_ALL);

$txt_file = $_REQUEST['xml_name'];

$url_params = file_get_contents('buynow-test-xml/'.$txt_file);
if(empty($url_params))
{
	//echo 'get file contents failed';
	die();
}
//echo '$params are: '.$url_params;
header('location: buynow-test.php'.$url_params);
