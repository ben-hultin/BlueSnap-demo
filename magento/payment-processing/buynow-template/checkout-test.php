<?php

	error_reporting(E_ALL);

	$companyName = $_REQUEST['company_name'];
	$shippingFirstName = $_REQUEST['shippingFirstName'];
	$shippingLastName = $_REQUEST['shippingLastName'];
	$mobilePhone = $_REQUEST['mobilePhone'];
	$shippingAddress1 = $_REQUEST['shippingAddress1'];
	$shippingAddress2 = $_REQUEST['shippingAddress2'];
	$shippingCity = $_REQUEST['shippingCity'];
	$shippingZipCode = $_REQUEST['shippingZipCode'];

	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$workPhone = $_REQUEST['workPhone'];
	$address1 = $_REQUEST['address1'];
	$address2 = $_REQUEST['address2'];
	$city = $_REQUEST['city'];
	$zipCode = $_REQUEST['zipCode'];
	$cardCompany = $_REQUEST['cardCompany'];
	
	$contractId = $_REQUEST['contractId'];
	
	$iframe_url = 'https://sandbox.plimus.com/jsp/buynow.jsp?contractId='.$contractId.'&companyName='.$companyName.'&shippingFirstName='.$shippingFirstName.'&shippingLastName='.$shippingLastName.'&mobilePhone='.$mobilePhone.'&shippingAddress1='.$shippingAddress1.'&shippingAddress2='.$shippingAddress2.'&shippingCity='.$shippingCity.'&shippingZipCode='.$shippingZipCode.'&firstName='.$firstName.'&lastName='.$lastName.'&workPhone='.$workPhone.'&address1='.$address1.'&address2='.$address2.'&city='.$city.'&zipCode='.$zipCode.'&cardCompany='.$cardCompany;
	
	echo $iframe_url;
/*		*/
	//echo 'hello world';
	
	//echo $iframe_url;
	
	
	echo '<iframe src="'.$iframe_url.'" height="1100" width="980" align="left" scrolling="no" border="no"></iframe>';

?>