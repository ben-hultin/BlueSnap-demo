<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>



	<?php
	

	// $url = $_SERVER['REQUEST_URI'];
	// $url = substr_replace($url, '', 0, 26);
	
	// if($uri != '')
	// {
	

	
		$companyName = $_REQUEST['companyName'];
		
		// if($companyName == '')
		// {
			// $companyName = 'Plimus Demo';
		// }
		
		$shippingFirstName = $_REQUEST['shippingFirstName'];
		
		// if($shippingFirstName == '')
		// {
			// $shippingFirstName = 'John';
		// }
		
		$shippingLastName = $_REQUEST['shippingLastName'];
		
		// if($shippingLastName == '')
		// {
			// $shippingLastName = 'Doe';
		// }
		
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
		
		$contractId = $_REQUEST['contractId'];
		$saveName = $_REQUEST['saveName'];
		$savedFile = $_REQUEST['savedFile'];

	//}
	
	
	
	
	$dir = 'buynow-test-xml/';
	$xml_array = array();
	if (is_dir($dir)) {
			if ($dh = opendir($dir)) 
			{
			while (($file = readdir($dh)) !== false) {
				//echo $file.'<br />';
				$testFile = substr($file, 0, 7);
				//echo $testFile.'<br />';
				if($testFile == 'buynow-')
				{
					$xml_array[] = $file;
				}

			}
			closedir($dh);
		}

	}
	
	if(empty($xml_array))
	{
		$saved_file = 'no data saved';
	}
	else
	{
		$saved_file = 'select saved data';
	}
	
	?>




<script>
	function openWindow(url, width)
	{
		//$theUrl=url;
		iframeUrl = getIframeUrl();
		url = url+iframeUrl;
		window.open(url,"invoiceDetailWindow","menubar=0,resizable=1,width="+width+",height=1000,directories=0,scrollbars=yes");
		//window.open(targetURL, 'PlimusDEMO', 'menubar=no, toolbar=no, width=950, height=680, left=400');
	}
	
	function openCode(url, width)
	{
		$theUrl=url;

		window.open($theUrl, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	}
	
	//window.open(targetURL, 'PlimusDEMO', 'menubar=no, toolbar=no, width=950, height=680, left=400');
	
	function submitForm()
	{
		window.open($theUrl,"formresult","menubar=0,resizable=1,width="+width+",height=1000,directories=0,scrollbars=yes");
	}
</script>

<link rel="stylesheet" type="text/css" href="BuyNow-Template.css">
<link rel="stylesheet" type="text/css" href="../treeNav.css">
<link rel="stylesheet" type="text/css" href="../bsiDev.css">
	
</head>
<body>

<div class="body_container" >

<?php 

//include_once('breadCrumbs.php'); 

include_once('../treeNav.php');

?>

	

	<!--<form action="checkout-test.php" method="get" target="formresult" onsubmit="submitForm('', 700)">-->
	<div class="middle_right_container">
	<form action="#" method="get"  >
	
	<div class="header_container">

		
		<input type="submit" id="submit" onclick="openWindow('BuyNow-Template.php', 1025)" value="View the BuyNow Checkout Page" class="header_button" style="width: 240px" />
	
	</div>
	
	<div class="middle_container">	
	
	
	<?php include_once('BuyNow-Template-DEMO.php'); ?>

	</div>
	
	<div class="right_container">
	
	
	<?php include_once('BuyNow-Template-Explain.php'); ?>
	
	</div>
		
		<!--
		cardNumber
		verifyCardCode
		-->
	</div>
	
	
	
	</form>
	
	</div>

	
	
<script type="text/javascript">
$(document).ready(function()
{

	
	
	var uri = window.location.search;
	//alert(uri);
	if(uri == '')
	{
		$('input[name=company_name]').val('Plimus Demo');
		$('input[name=shipping_first_name]').val('John');
		$('input[name=shipping_last_name]').val('Doe');
		$('input[name=mobile_phone]').val('222-333-4444');
		$('input[name=shipping_address_1]').val('2222 Tester Lane');
		$('input[name=shipping_address_2]').val('apt 33');
		$('input[name=shipping_city]').val('Tester City');
		$('input[name=shipping_zip_code]').val('12345');
		
		$('input[name=first_name]').val('Joe');
		$('input[name=last_name]').val('Plummer');
		$('input[name=work_phone]').val('111-222-3333');
		$('input[name=address_1]').val('1111 Demo Ave');
		$('input[name=address_2]').val('apt 22');
		$('input[name=city]').val('Demo City');
		$('input[name=zip_code]').val('54321');
		
		// $('input[name=card_number]').val('4111111111111111');
		// $('input[name=verify_card_code]').val('111');

		$('input[name=contract_id]').val('2131574');
		//2131956
	}
	


	//iframe_url = 'https://sandbox.plimus.com/jsp/buynow.jsp?contractId='+contractId+'&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode;
	
	
	

	$('#reset').click(function()
	{
		$('input[name=company_name]').val('Plimus Demo');
		$('input[name=shipping_first_name]').val('John');
		$('input[name=shipping_last_name]').val('Doe');
		$('input[name=mobile_phone]').val('222-333-4444');
		$('input[name=shipping_address_1]').val('2222 Tester Lane');
		$('input[name=shipping_address_2]').val('apt 33');
		$('input[name=shipping_city]').val('Tester City');
		$('input[name=shipping_zip_code]').val('12345');
		
		$('input[name=first_name]').val('Joe');
		$('input[name=last_name]').val('Plummer');
		$('input[name=work_phone]').val('111-222-3333');
		$('input[name=address_1]').val('1111 Demo Ave');
		$('input[name=address_2]').val('apt 22');
		$('input[name=city]').val('Demo City');
		$('input[name=zip_code]').val('54321');
		
		$('input[name=card_number]').val('4111111111111111');
		$('input[name=verify_card_code]').val('111');
		$('input[name=contract_id]').val('2131574');
		$('select[name=cardCompany], option').val('VISA');
		
		
	});

	
	$('#save').click(function()
	{
		var companyName = $('input[name=company_name]').val();
		var shippingFirstName = $('input[name=shipping_first_name]').val();
		var shippingLastName = $('input[name=shipping_last_name]').val();
		var mobilePhone = $('input[name=mobile_phone]').val();
		var shippingAddress1 = $('input[name=shipping_address_1]').val();
		var shippingAddress2 = $('input[name=shipping_address_2]').val();
		var shippingCity = $('input[name=shipping_city]').val();
		var shippingZipCode = $('input[name=shipping_zip_code]').val();
		
		var firstName = $('input[name=first_name]').val();
		var lastName = $('input[name=last_name]').val();
		var workPhone = $('input[name=work_phone]').val();
		var address1 = $('input[name=address_1]').val();
		var address2 = $('input[name=address_2]').val();
		var city = $('input[name=city]').val();
		var zipCode = $('input[name=zip_code]').val();
		

		var contractId = $('input[name=contract_id]').val();
		var cardCompany = $('input[name=card_type]').val();
		
		var saveName = $('input[name=save_name]').val();
		
		var iframe_url = '?contractId='+contractId+'&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode+'&saveName='+saveName+'&cardCompany='+cardCompany;
		//alert('cookie saved: '+iframe_url);
		//setCookie(saveName, iframe_url);
		// saveNames = loopThroughCookies();
		
		// var load = document.getElementById('load_options')[0];
		// for(i=0;i<saveNames.length;i++)
		// {
			// var name = saveNames[i];
			// load.options.add(new Option(name.text, i));
		// }
		
		
		
		
		  //alert(x);
		
		
		//alert('cookie saved: '+cookieValue);
		//window.location.href = iframe_url;
	});
	
	
	// function setCookie(name, value)
	// {
		// var cookie = document.cookie= name + "=" + value;
		// alert(value);
		// //return value;
	  // //	alert("baby cookie is: "+cookie);
	// }
	
	
	
/*
	$('#submit').click(function()
	{
		var companyName = $('input[name=company_name]').val();
		var shippingFirstName = $('input[name=shipping_first_name]').val();
		var shippingLastName = $('input[name=shipping_last_name]').val();
		var mobilePhone = $('input[name=mobile_phone]').val();
		var shippingAddress1 = $('input[name=shipping_address_1]').val();
		var shippingAddress2 = $('input[name=shipping_address_2]').val();
		var shippingCity = $('input[name=shipping_city]').val();
		var shippingZipCode = $('input[name=shipping_zip_code]').val();
		
		var firstName = $('input[name=first_name]').val();
		var lastName = $('input[name=last_name]').val();
		var workPhone = $('input[name=work_phone]').val();
		var address1 = $('input[name=address_1]').val();
		var address2 = $('input[name=address_2]').val();
		var city = $('input[name=city]').val();
		var zipCode = $('input[name=zip_code]').val();
		
		var iframe_url = 'https://sandbox.plimus.com/jsp/buynow.jsp?contractId=2131956&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode;
		
		//$('#iframe_container').replaceWith('<div id="iframe_container"><iframe src="'+iframe_url+'" height="1000" width="700" ></iframe></div>');
		
		$('#iframe_container').append('<div id="iframe_replacement"><iframe src="https://sandbox.plimus.com/jsp/buynow.jsp?contractId=2131956" height="1000" width="700" ></iframe></div>');

	
	/*
		$.get("buynow-test-process.php", 
		{ 
			companyName: 'companyName', 
			shippingFirstName: 'shippingFirstName',
			shippingLastName: 'shippingLastName',
			mobilePhone: 'mobilePhone',
			shippingAddress1: 'shippingAddress1',
			shippingAddress2: 'shippingAddress2',
			shippingCity: 'shippingCity',
			shippingZipCode: 'shippingZipCode',
			
			firstName: 'firstName',
			lastName: 'lastName',
			mobilePhone: 'mobilePhone',
			address1: 'address1',
			address2: 'address2',
			city: 'city',
			zipCode: 'zipCode',
			
		},	
		function(data)
		{
			//alert("Data Loaded: " + data);
			$('input[name=company_name]').val() = data.company_name;
			
			
		}); //end .get()
	
	}); // end submit click
*/
	
}); // .ready()

function getIframeUrl()
{
var companyName = $('input[name=company_name]').val();
		var shippingFirstName = $('input[name=shipping_first_name]').val();
		var shippingLastName = $('input[name=shipping_last_name]').val();
		var mobilePhone = $('input[name=mobile_phone]').val();
		var shippingAddress1 = $('input[name=shipping_address_1]').val();
		var shippingAddress2 = $('input[name=shipping_address_2]').val();
		var shippingCity = $('input[name=shipping_city]').val();
		var shippingZipCode = $('input[name=shipping_zip_code]').val();
		
		var firstName = $('input[name=first_name]').val();
		var lastName = $('input[name=last_name]').val();
		var workPhone = $('input[name=work_phone]').val();
		var address1 = $('input[name=address_1]').val();
		var address2 = $('input[name=address_2]').val();
		var city = $('input[name=city]').val();
		var zipCode = $('input[name=zip_code]').val();
		

		var contractId = $('input[name=contract_id]').val();
		var cardCompany = $('input[name=card_type]').val();
		
		
		return iframe_url = '?contractId='+contractId+'&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode+'&cardCompany='+cardCompany;

}


	function changeXmlFields()
	{
		//var xml_name = $('#load_options, option').val();
		var txt_name = $('select[name=load_options], option').val();
		//lookForCookie(txt_name);
		//alert(txt_name);
	}
	
	
	// function lookForCookie(selectedName)
	// {
		// var i,value,name;
		// ARRcookies=document.cookie.split(";");

		// for (i=0;i<ARRcookies.length;i++)
		// {
		  // value=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		  // name=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		  // value=value.replace(/^\s+|\s+$/g,"");
		  // //alert(x);
		  // if (name == selectedName)
			// {
				// //  clearInterval(setInt);
				// alert(value);
				// return value;
				
			// }
		  // }
		
	// }
	
	
	// function loopThroughCookies()
	// {
		// var i,value,name;
		// ARRcookies=document.cookie.split(";");
		// saveNames = new Array();
		// for (i=0;i<ARRcookies.length;i++)
		// {
		  // value=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		  // name=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		  // value=value.replace(/^\s+|\s+$/g,"");
		  
		  // saveNames[i] = name;
		  
		  // //alert(x);
		  // }
		  
		  // return saveNames;
		
	// }



	// function changeCardNumber()
	// {
		// var cardType = $('select[name=card_company], option').val();
		
		// switch(cardType)
		// {
			// case 'VISA':
			// $('input[name=card_number]').val('4111111111111111');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'MASTERCARD':
			// $('input[name=card_number]').val('5555555555554444');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'AMEX':
			// $('input[name=card_number]').val('378282246310005');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'DISCOVER':
			// $('input[name=card_number]').val('6011111111111117');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'SOLO':
			// $('input[name=card_number]').val('6331101999990016');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'DINERS':
			// $('input[name=card_number]').val('30569309025904');
			// $('input[name=verify_card_code]').val('111');
			// break;
			// case 'JCB':
			// $('input[name=card_number]').val('3530111333300000');
			// $('input[name=verify_card_code]').val('111');
			// break;
			
		// }
	// }
	
</script>

</body>
</html>