<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<link rel="stylesheet" type="text/css" href="credentials.css">

<script type="text/javascript">
	function openWindow(url, width)
	{
		$theUrl=url;
		window.open($theUrl,"invoiceDetailWindow","menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");
	}
	
	//2131574
</script>


</head>
<body>
<div class="main_container">
<div class="form_container">

	<form action="GetSKUPrices.php" method="get" target="_blank" >

		<label>Contract Id</label><br />
		<input type="text" name="contract_id" size="10" value="Contract Id" class="input_fields" /><br /><br />
		
		<label>Credentials (separate between semi-colon)</label><br />
		<input type="text" name="credentials_1" size="15" class="input_fields" />:<input type="text" name="credentials_2" size="15" class="input_fields" /><br /><br />
		
		<input type="submit" value="submit credentials" class="button" /><br />
		

	</form>

</div>
	
	<input type="button" value="Show Source Code" onclick="openWindow('GetSKUPrices-show-code.php', 1100)" class="button" />
	
</div>


</body>
</html>