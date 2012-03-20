

<?php
	$ROOT = 'http://184.106.138.196/bsnp-dev/magento/';
	//error_reporting(E_ALL);

	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, 18);
	if(empty($url))
	{
		
		header('location: '.$ROOT.'magento-integration/introduction/');
		echo '$url is empty';
	}
	else
	{
		$url = trim($url, '/');
		$urlArr = explode('/', $url);
	}
	//$urlArr[0] = parent
	//$urlArr[1] = child
	$DEMO_PATH = $urlArr[0].'/'.$urlArr[1].'/'.$urlArr[1];
	
	//echo '"'.$url.'"<br />';
	
	// print_r($urlArr);
	// echo $urlArr[0].'<br />';
	// echo $urlArr[1].'<br />';
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<!--<link rel="stylesheet" type="text/css" href="credentials.css">-->

<script type="text/javascript">

	// function openWindow(url, width)
	// {
		// $theUrl=url;

		// window.open($theUrl, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	// }
	ROOT = 'http://184.106.138.196/bsnp-dev/magento/';
	function openCode(url, width)
	{
		$theUrl=url;

		window.open($theUrl, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	}

</script>
<link rel="stylesheet" type="text/css" href="<?php echo $urlArr[1]; ?>.css">
<link rel="stylesheet" type="text/css" href="<?php echo $ROOT; ?>tree-nav.css">
<link rel="stylesheet" type="text/css" href="<?php echo $ROOT; ?>bsi-dev.css">

</head>
<body>
<div class="body_container" >


		<?php include_once('tree-nav.php'); ?>
	
	<div class="middle_right_container">

	
	
		<div class="middle_container">	

			<?php include_once($urlArr[1].'-demo.php'); ?>

		</div>


		<div class="right_container">
			
			<?php include_once($urlArr[1].'-explain.php'); ?>
			
		</div>

	</div>

</div>

</body>
</html>