<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<link rel="stylesheet" type="text/css" href="credentials.css">
</head>
<body>

<h3>Credentials</h3>
<?php

$credentialsOne = $_REQUEST['credentials_1'];
$credentialsTwo = $_REQUEST['credentials_2'];

$contractId = $_REQUEST['contract_id'];

 //please fill your api credential
	$credentials = $credentialsOne.':'.$credentialsTwo;
    //$credentials = "BenPlimusAPI:BenPlimus789";
	// BenPlimusAPI:BenPlimus789@sandbox.plimus
 
     /**
     * Define POST URL and also payload
     */
    define('XML_PAYLOAD', '<?xml version="1.0"?>');
    //like : https://<server>/services/<version>/skus/<SKU_Number>/price/<currency>
    define('XML_GET_URL', 'https://sandbox.plimus.com/services/2/skus/2131574/price/USD');
   
    /**
     * Initialize handle and set options
     */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, $credentials);
    curl_setopt($ch, CURLOPT_URL, XML_GET_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    
    /**
     * Execute the request and also time the transaction
     */
    $start = array_sum(explode(' ', microtime()));
    $result = curl_exec($ch);
	echo '<div class="source_code_block">';
	
    echo '<xmp>'.stripcslashes($result).'</xmp>';
	
	echo '</div>';
    $stop = array_sum(explode(' ', microtime()));
    $totalTime = $stop - $start;
   
    /**
     * Check for errors
     */
    if ( curl_errno($ch) ) {
        $result = 'HTTP ERROR -> ' . curl_errno($ch) . ': ' . curl_error($ch);
    } else {
        $result = ' ,  HTTP CODE = ' . (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
    /**
     * Close the handle
     */
    curl_close($ch);
   
    /**
     * Output the results and time
     */
    echo 'Total time for request: ' . $totalTime ;
    echo '<xmp>'.$result.'</xmp>';  
   
    /**
     * Exit the script
     */
    exit(0);
?>
</body>
</html>