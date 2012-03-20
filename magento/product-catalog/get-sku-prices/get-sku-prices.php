<?php
// header("Content-Type: application/xml");

$credentials = $_REQUEST['credentials'];


$contractId = $_REQUEST['contract_id'];

 //please fill your api credential
	$credentials;
    //$credentials = "BenPlimusAPI:BenPlimus789";
	// BenPlimusAPI:BenPlimus789@sandbox.plimus
 
     /**
     * Define POST URL and also payload

	<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
	<item-price xmlns="http://ws.plimus.com">
     */

    define('XML_PAYLOAD', '<?xml version="1.0 encoding="UTF-8" standalone="yes"?>');

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


 header("Content-Type: application/xml");

    echo $result;


//

//  Most of the rest of this code  is just for future DOMDocument experimentation to be done outside of the bsiDev Code Tree...

//


        $resultTXT = "Here is the reply XML string resulting from the curl_exec: ";

	$resultTXT .= $result;
       

	$file = './GetSkuPriceResult.txt';

	$status = file_put_contents($file, $resultTXT );

//	echo '<br><hr><br>'.$file. ' status: '.$status.'<br>';

//	echo '<div class="source_code_block">';

//	    echo '<br> RAW ... resultTXT  string  ... <hr> <br> <br> <xmp>'.$resultTXT.'</xmp>';


	    $resultPreSTRIP = $result;

	    $resultSTRIP = stripcslashes($resultPreSTRIP);

//	    echo '<br> RAW ... resultSTRIP ... <hr> <br> <br> <pre>'.$resultSTRIP.'</pre>';


	    $resultXML = new DOMDocument( '1.0', 'UTF-8' );
//  echo 'debug...0...';	
	   
	    if( $resultXML->loadXML($result) === false)
		{ die('loadXML request failed');
		}
//  echo 'debug...1...';

	    $resultXML->formatOutput = true;
	
	//    echo  '<pre>'.stripcslashes($resultXML).'</pre>'; 

//	     echo '<br> RAW ... resultXML ... <hr> <br> <br>';

//  echo 'debug...2.a...';

//	        echo '<pre>'.$resultXML.'</pre>';

//  echo 'debug...2.b...';

	    $xmlScreenRAW = $resultXML->saveXML();




//    print_r($xmlScreenRAW);



                $file = './GetSkuPriceXmlScreenRAW.txt';

                $status = file_put_contents($file, $xmlScreenRAW);

//	        echo '<br><hr><br> '.$file. ' status: '.$status.'<br>';


	    $xmlScreenDisplay =   $xmlScreenRAW;      //  stripcslashes($xmlScreenRAW);
//  echo 'debug...3...';
	
//	    echo '<br> <hr> <br> <br> xmp ... xmlScreenDisplay ... result ... xmp <br> <br>';

//		echo  $xmlScreenDisplay;



//	    echo  '<br> <hr> <br> <br> xmp ... stripcslashes ... result ... xmp <br> <br>';
//  echo 'debug...5...';

//            echo '<pre>'.stripcslashes($result).'</pre>';
//  echo 'debug...6...';
	
   



//
//    KEEP the code below to properly close out this execution thread.....
//



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
//    echo 'Total time for request: ' . $totalTime ;
   
    /**
     * Exit the script
     */
    exit(0);
?>
