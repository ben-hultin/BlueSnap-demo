<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2011 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
 //include_once 'app/Mage.php';
//Mage::app();

$shopper = $_REQUEST['shopperId'];
$credentials = $_REQUEST['credentials'];
$httpDOMAIN = 'http://184.106.138.196'; 
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>invoices</title>
<script type="text/javascript" src="<?php echo $httpDOMAIN; ?>/js/prototype/prototype.js"></script>
<script type="text/javascript" src="scriptaculous.js?load=builder,effects"></script>
<script type="text/javascript" src="modalbox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $httpDOMAIN; ?>/skin/frontend/default/efi/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $httpDOMAIN; ?>/skin/frontend/default/efi/css/boxes.css" media="all" />
<link rel="StyleSheet" href="modalbox.css" type="text/css" />
<link rel="StyleSheet" href="invoice_style.css" type="text/css" />

<script type="text/javascript">

	function changeDisplay()
	{
		document.getElementById('MB_content').style.property= 'display: block'
	}
	
	function openWindow(url, width)
	{
		$theUrl=url;
		window.open($theUrl,"invoiceDetailWindow","menubar=0,resizable=1,width="+width+",height=850,directories=0,scrollbars=yes");
	}

	
</script>

</head>
<body >
<div class="box" style="width: 380px; height: 343px; background-color: #F0F0F0">
    <div class="box-title">
        <h3 style="float: left;">10 Most Recent Orders </h3>
        <a style="float: right;" href="<?php echo $httpDOMAIN; ?>/customer/account/edit/"></a>
        <div style="clear: both"></div>
    </div>
    <div class="box-content"> 
        
        
		<?php 

$request =  'https://'.$credentials.'@sandbox.plimus.com/services/2/tools/order-history-retriever?fullDescription=true&shopperid=' .$shopper;
//echo $shopper;




//Go get the history
$response = file_get_contents($request);
if ($response === false) {
	die('The request failed');
}
$response=str_replace("IOException: java.io.IOException: Server returned HTTP response code: 400 for URL: https://ebis-qa.efi.com/sap/xi/adapter_plain?service=EBISExternal&namespace=urn%3aefi%3api%3acommon_integration_layer&interface=Plimus","Not Available",$response);
//load it into our DOM object for traversing
$dom = new DOMDocument('1.0', 'UTF-8');
if ($dom->loadXML($response) === false) {
    die('Parsing failed');
}

//Setup Table
//echo ("<table width=\"100%\"><tr class=\"box-title\"><td width=\"25%\">Order ID</td><td width=\"25%\">Order Date</td><td width=\"25%\">Total Cost</td><td width=\"25%\">See Invoice</td></tr>");
?>
<table width="100%" >
	<tr class="box-title">
		<td width="25%" style="background-color: lightGray">Order ID</td>
		<td width="25%" style="background-color: lightGray">Order Date</td>
		<td width="25%" style="background-color: lightGray">Total Cost</td>
		<td width="25%" style="background-color: lightGray">See Invoice</td>
	</tr>
<?php
//Get base of XML document

$order = $dom->getElementsByTagName('past-orders')->item(0);
$nextorder=$order->getElementsByTagName('order')->item(0);
$x=0;

while ($x <= 10){
//$orderUrl=$httpDOMAIN."/invoices/orderDetail.php?orderId=".$orderid->nodeValue."&email=" .$orderemail->nodeValue;
//<a href='#' onClick='javascript:openWindow(\"" .$orderUrl ."\", 1020)'>
//&orderId=".$orderid->nodeValue
	$orderid=$nextorder->GetElementsByTagName('invoice-id')->item(0);
	$orderemail=$nextorder->GetElementsByTagName('email')->item(0);
	
	echo ("<tr class='box-orders'><td style='background-color: #F0F0F0; border: 0 none'>" .$orderid->nodeValue ."</td>");
	$orderdate=$nextorder->GetElementsByTagName('date-created')->item(0);
	echo ("<td style='background-color: #F0F0F0; border: 0 none'>" .$orderdate->nodeValue ."</td>");
	$ordercost=$nextorder->GetElementsByTagName('total-cart-cost')->item(0);
	echo ("<td style='background-color: #F0F0F0; border: 0 none'>" .$ordercost->nodeValue ."</td>");
	//Now create link using format:
	//https://secure.plimus.com/jsp/show_invoice.jsp?accountId=34367396&orderId=59804884&email=orly_test%40wix.com
	//$orderemail=$nextorder->GetElementsByTagName('email')->item(0);

	
	$theUrl="https://sandbox.plimus.com/jsp/show_invoice.jsp?accountId=" .$shopper ."&orderId=" .$orderid->nodeValue ."&email=" .$orderemail->nodeValue;
	echo ("<td style='background-color: #F0F0F0; border: 0 none'><a href='#' onClick='javascript:openWindow(\"" .$theUrl ."\", 750)'>Click Here</a></td></tr>");
	//echo ("<td><a href='".$theUrl ."' target='_blank'>Click Here</a></td></tr>");
	$x++;
	//$i--;
	$nextorder=$order->getElementsByTagName('order')->item($x);
	//print_r($nextorder->nodeValue);
	if(empty($nextorder->nodeValue)) {break;}

}


//End Table
?>
</table>
    </div>



<?php

//}




					$theUrl = 'customerhistory.php?shopperId='.$shopper; 
					?>
					
					
					
				<br />
				
				<?php if($x == 11): ?>
				<a href="#" title="Invoice History" onclick="setCookie()" class="f-right" >
				<img 
				src="ViewMyOrderHistoryArielBold8.jpg" 
				alt="Full Invoice History" /></a>
				<?php endif; ?>
				<br />
</div>
</body>
</html>