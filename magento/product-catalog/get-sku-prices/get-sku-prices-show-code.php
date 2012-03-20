<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<link rel="stylesheet" type="text/css" href="credentials.css">



</head>
<body>

<h3>Organizing the form and data</h3>
<div class="source_code_block" >

<xmp>
<form action="show-credentials.php" method="get" target="_blank" >

	<input type="text" name="contract_id" size="10" value="Contract Id" class="input_fields" /><br />
	
	<label>Credentials (separate between semi-colon)</label>
	<input type="text" name="credentials_1" size="15" class="input_fields" />:
	<input type="text" name="credentials_2" size="15" class="input_fields" /><br />
	
	<input type="submit" value="submit credentials" /><br />
	
</form>
</xmp>





</div>



</body>
</html>
