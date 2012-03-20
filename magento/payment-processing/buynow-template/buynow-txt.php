<?php

	// $companyName = $_REQUEST['companyName'];
	// $shippingFirstName = $_REQUEST['shippingFirstName'];
	// $shippingLastName = $_REQUEST['shippingLastName'];
	// $mobilePhone = $_REQUEST['mobilePhone'];
	// $shippingAddress1 = $_REQUEST['shippingAddress1'];
	// $shippingAddress2 = $_REQUEST['shippingAddress2'];
	// $shippingCity = $_REQUEST['shippingCity'];
	// $shippingZipCode = $_REQUEST['shippingZipCode'];

	// $firstName = $_REQUEST['firstName'];
	// $lastName = $_REQUEST['lastName'];
	// $workPhone = $_REQUEST['workPhone'];
	// $address1 = $_REQUEST['address1'];
	// $address2 = $_REQUEST['address2'];
	// $city = $_REQUEST['city'];
	// $zipCode = $_REQUEST['zipCode'];
	

	// $contractId = $_REQUEST['contractId'];
	// $cardCompany = $_REQUEST['cardCompany'];
	
	$saveName = $_REQUEST['saveName'];
	
	
	$url = $_SERVER['REQUEST_URI'];
	$url = substr_replace($url, '', 0, 27);
	//echo '$url is: '.$url;
	$file ='buynow-test-xml/buynow-'.$saveName.'.txt';
	//echo '$url: '.$url;
	file_put_contents($file, $url);
	
	header('location: buynow-test.php');
	
	//die();
	
	?>