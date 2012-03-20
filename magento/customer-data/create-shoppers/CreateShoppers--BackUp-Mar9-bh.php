<?php


    function my_strip2($start,$end,$total)
    {

        $total = stristr($total,$start);

        $f2 = stristr($total,$end);

        return substr($total,strlen($start),-strlen($f2));
    }


    // Set values for the POST HEADERS:

        $credentials = "BenPlimusAPI:BenPlimus789";     ////  for the sandbox testing account

        $contentType = array( "Content-type: application/xml" );


   //Please read the Plimus API documents to understand the basic structure of the request and reply.

   //please replace values in the following elements with details from your own Registration Processes:

   // ULTIMATELY FOR OUR FRAUD SCREENING PURPOSES, YOU WANT TO USE REALISTIC DATA ...
   // (E.G. WEB-INFO DATA COLLECTED FROM YOUR CUSTOMERS (see <web-info> element below ) )


   $firstName = 'Bob';   		 // typically already established during registration on the Vendor's Web Site
   $lastName = 'Smith';     		 // typically already established during registration on the Vendor's Web Site
   $email = "bob.smith@plimus.com";      // typically already established during registration on the Vendor's Web Site
   
   $address1 = "123 Main Street";
   $address2 = "Apt K-9";
   $city = "Parkville";
   $state = "TN";
   $country = "us";
   $zipCode = "37027";

   $phone = "411-555-1212";
   

//    echo 'DEBUG...STEP...1......... ';


        $xmlToSend = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
        <shopper xmlns="http://ws.plimus.com">
              <shopper-info>
                    <shopper-contact-info>
                          <first-name>'. $firstName .'</first-name>
                          <last-name>'. $lastName .'</last-name>
                          <email>'. $email .'</email>
                          <address1>'. $address1 .'</address1>
                          <city>'. $city .'</city>
                          <zip>'. $zipCode .'</zip>
                          <country>'. $country .'</country>
                          <state>'. $state .'</state>
                          <phone>'. $phone .'</phone>
                    </shopper-contact-info>
                    <locale>en</locale>
              </shopper-info>
              <web-info>
                    <ip>62.219.121.253</ip>
                    <remote-host>bzq-219-121-253.static.bezeqint.net.reinventhosting.com</remote-host>
                    <user-agent>Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; GTB6.3; .NET CLR 2.0.50727</user-agent>
                    <accept-language>en-us</accept-language>
              </web-info>

        </shopper>';


////////        Define XML_POST_URL and also payload:           ===========================================


    define('XML_POST_URL', 'https://sandbox.plimus.com/services/2/shoppers');


//
// Initialize handle and set options
//
// NOTE: When CURLOPT_FOLLOWLOCATION and CURLOPT_HEADER are both true
//
//       and redirect/s have happened::::>>> then the header returned by curl_exec()
//
//       will contain all the headers in the redirect chain in the order they were encountered.
//

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, $credentials);
    curl_setopt($ch, CURLOPT_URL, XML_POST_URL);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlToSend);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $contentType);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);

//
////    Execute the request and example code to time the transaction
//

    $result_exec = curl_exec($ch);

//
////    Check for errors

    if ( curl_errno($ch) ) {
        $result = 'HTTP ERROR -> ' . curl_errno($ch) . ': ' . curl_error($ch);
    } else {
        $result = ' ,  HTTP CODE = ' . (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }



    $shopper_Id =  my_strip2( '/shoppers/', 'Content-Length: 0', $result_exec ) ;


    if ( $shopper_Id > '100000' ) {

	  echo 'We have created a NEW shopper-id ! ! ! <br /> <br />THE  NEW  shopper-id  is  ' . $shopper_Id . '<br /> <br />  ';

 	  echo 'The Plimus Shopper ID   is: ' . $shopper_Id .  '<br /> <br />  ';
    	 }

    else {
          echo    'SOME THING  IS  NOT  WORKING  RIGHT...    ASK    FRANKK  WHAT   THE  PROB  IS...';
    	 }

?>

