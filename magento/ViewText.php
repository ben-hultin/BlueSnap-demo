<?php

    $defaultFile = './ViewText.php';


    $targetFile = $_REQUEST['target'];


    if($targetFile == '' ) {
	$targetFile = $defaultFile;
	echo $defaultFile.': THIS DEFAULT FILE IS PROBABLY NOT THE FILE YOU WERE LOOKING FOR . . . 
**********************************************************************************************

     ';
	}


    $topLineText = ' contains the following:  
==============================================================================================

';


    $txtFile = file_get_contents( $targetFile );

    $screenDisplay = $targetFile . $topLineText . $txtFile ; 


    header("Content-Type: text/plain");

    echo $screenDisplay;

?>
