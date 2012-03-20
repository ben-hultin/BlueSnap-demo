	
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
	
	
	
	<div class="header_container">

	
		<input type="submit" id="submit" onclick="openWindow('buynow-template.php', 1025)" value="Get BuyNow Checkout Page" class="header_button"  />
	
	</div>
	
	<div class="header_space"></div>
	
		<div class="group" >
		<h3>Plimus Contract Id (SKU):</h3>
			<input type="text" value="<?php echo $contractId; ?>" maxlength="10" size="10" id="contract_id" class="field_input"/><br />
		</div>
		
		
		
		
		<div class="group" >
			<h3>Billing Address</h3>
			<table class="table_form">
			<tr>
			<td align="right">
				<label>First Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $firstName; ?>" maxlength="100" size="40" id="first_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Last Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $lastName; ?>" maxlength="100" size="40" id="last_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Phone: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $workPhone; ?>" maxlength="100" size="40" id="work_phone" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
			<!--	<label>Address: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $address1; ?>" maxlength="100" size="40" id="address_1" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Address2: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $address2; ?>" maxlength="100" size="40" id="address_2" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>City: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $city; ?>" maxlength="100" size="40" id="city" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right"> -->
				<label>Email: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $email; ?>" maxlength="100" size="40" id="email" class="field_input"/><br />
			</td>
			</tr>
			<td align="right"> 
				<label>Zipcode: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $zipCode; ?>" maxlength="100" size="40" id="zip_code" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
			</table>
			<div class="clear"></div>
		</div>
		
		
		<div class="group" >
			<div class="credit_card_title" ><h3>Credit Card Info</h3>
			
			<br /><br />
			Select one of these <br />
			demo credit cards 
			
			
			
			</div>
			<!--
			<label>Card Number: </label>
			<input type="text" maxlength="40" size="40" id="card_number" class="field_input"/><br />
			
			<select onchange="changeCardNumber()" id="card_company">
				<option value="VISA">Visa</option>
				<option value="MASTERCARD">Master Card</option>
				<option value="AMEX">American Express</option>
				<option value="DISCOVER">Discover</option>
				<option value="SOLO">Solo</option>
				<option value="DINERS">Diners Club</option>
				<option value="JCB">JCB</option>
			</select>
			-->
			<div class="card_type_group">
				<input type="radio" checked="checked" name="card_type" value="VISA"> Visa [xxxxxxxxxxx1111]<br />
				<input type="radio" name="card_type" value="MASTERCARD"> Master Card [xxxxxxxxxxx4444]<br />
				<input type="radio" name="card_type" value="AMEX"> American Express [xxxxxxxxxxx0005]<br />
				<input type="radio" name="card_type" value="DISCOVER"> Discover [xxxxxxxxxxx1117]<br />
				<input type="radio" name="card_type" value="SOLO"> Solo [xxxxxxxxxxx0016]<br />
				<input type="radio" name="card_type" value="DINERS"> Diners Club [xxxxxxxxxxx5904]<br />
				<input type="radio" name="card_type" value="JCB"> JCB [xxxxxxxxxxx0000]<br />
			</div>
<!--
			<label>Security Code: </label>
			<input type="text" maxlength="4" size="4" id="verify_card_code" class="field_input"/><br />
-->
			
			<div class="clear"></div>
			
			
		</div>
		
		
		
		<div class="group">
			<h3>Save and Load Options</h3>
			<br /><br />
		<div class="save_input"><!-- onclick="this.value='';" -->
		<input type="text" id="save_name"  value="Custom values" size="20" maxlength="20" class="action_text" id="save_name" />
		<input type="button" id="save" value="save" class="action_button" /><br />
		<label>Save My Custom Values</label>
		</div>

		<div class="load_input">
		<select class="action_text" id="load_options" onchange="changeXmlFields()">
			
			
				
			
			
		</select><br />
		<label>Retrieve Custom Values</label>
		</div>
		
		<div class="reset_input">	
		<input type="button" id="reset" value="reset fields" class="action_button" /><br />
		<label>Default Values</label>
		</div>
	<br />
	<br />

		
		
		<?php
			if(!empty($saveName))
			{
				echo '<label>Current file loaded: <i>'.$saveName.'</i></label>';
			}
			elseif(!empty($savedFile))
			{
				echo '<label>file saved: <i>'.$savedFile.'</i></label>';
			}
		
		?>
			
			<!--<input type="button" id="load" value="load" class="action_button" />-->
		
		<!---->
		<div class="clear"></div>
		
		</div>
		
		
		
		
		
		
		<script type="text/javascript">
		
	function openWindow(url, width)
	{
		//$theUrl=url;
		iframeUrl = getIframeUrl();
		url = url+iframeUrl;
		window.open(url,"invoiceDetailWindow","menubar=0,resizable=1,width="+width+",height=1000,directories=0,scrollbars=yes");
		//window.open(targetURL, 'PlimusDEMO', 'menubar=no, toolbar=no, width=950, height=680, left=400');
	}
		
		
$(document).ready(function()
{


	var saveNames = loopThroughCookies();
	//var load = document.getElementById('load_options')[0];
	//alert('length: '+saveNames.length);
	if(saveNames[0] != '')
	{
		$('#load_options').empty();
		for(i=0;i<saveNames.length;i++)
		{
			
			name = saveNames[i];
			name = name.trim();
			//alert(i+' : '+saveNames[i]);
			//load.options.add(new Option(name.text, i));
			$('#load_options').append('<option value="'+name+'">'+name+'</option>');
		}
	}
	else
	{
		$('#load_options').append('<option selected="selected" >No Custom Fields Saved</option>');
	}

	

	
	
	var uri = window.location.search;
	//alert('uri is'+uri);
	if(uri == '')
	{
		$('#company_name').val('Plimus Demo');
		$('#shipping_first_name').val('John');
		$('#shipping_last_name').val('Doe');
		$('#mobile_phone').val('222-333-4444');
		$('#shipping_address_1').val('2222 Tester Lane');
		$('#shipping_address_2').val('apt 33');
		$('#shipping_city').val('Tester City');
		$('#shipping_zip_code').val('12345');
		$('#email').val('Joe.Demo@plimus.com');
		$('#first_name').val('Joe');
		$('#last_name').val('Demo');
		$('#work_phone').val('111-222-3333');
		$('#address_1').val('1111 Demo Ave');
		$('#address_2').val('apt 22');
		$('#city').val('Demo City');
		$('#zip_code').val('54321');
		
		// $('#card_number').val('4111111111111111');
		// $('#verify_card_code').val('111');

		$('#contract_id').val('2131574');
		//2131956
	}
	


	//iframe_url = 'https://sandbox.plimus.com/jsp/buynow.jsp?contractId='+contractId+'&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode;
	
	
	

	$('#reset').click(function()
	{
		$('#company_name').val('Plimus Demo');
		$('#shipping_first_name').val('John');
		$('#shipping_last_name').val('Doe');
		$('#mobile_phone').val('222-333-4444');
		$('#shipping_address_1').val('2222 Tester Lane');
		$('#shipping_address_2').val('apt 33');
		$('#shipping_city').val('Tester City');
		$('#shipping_zip_code').val('12345');
		$('#email').val('Joe.Demo@plimus.com');
		$('#first_name').val('Joe');
		$('#last_name').val('Demo');
		$('#work_phone').val('111-222-3333');
		$('#address_1').val('1111 Demo Ave');
		$('#address_2').val('apt 22');
		$('#city').val('Demo City');
		$('#zip_code').val('54321');
		
		$('#card_number').val('4111111111111111');
		$('#verify_card_code').val('111');
		$('#contract_id').val('2131574');
		$('input[name=cardCompany], option').val('VISA');
		
		
	});

	
	$('#save').click(function()
	{
		
		
		var saveName = $('#save_name').val();
		if(saveName == '')
		{
			alert('Please enter name to save your custom values as');
		}
		else
		{
		

			getFieldValues();
		
			fieldArr = new Array();
			fieldArr[0] = firstName;
			fieldArr[1] = lastName;
			fieldArr[2] = workPhone;
			fieldArr[3] = email;
			fieldArr[4] = zipCode;
			fieldArr[5] = cardCompany;
			fieldArr[6] = contractId;
		
			//fieldArray = getFieldArry();
			stringArray = fieldArr.toString();
			//stringArray = fieldArray.toString();
			setCookie(saveName, stringArray);
			saveNames = loopThroughCookies();
			
			//var load = document.getElementById('load_options')[0];
			//alert('length: '+saveNames.length);
			$('#load_options').empty();
			$('#load_options').append('<option selected="selected" value="choose One">Choose One</option>');
			for(i=0;i<saveNames.length;i++)
			{
				
				name = saveNames[i];
				name= name.trim();
				//alert(i+' : '+saveNames[i]);
				//load.options.add(new Option(name.text, i));
				$('#load_options').append('<option value="'+name+'">'+name+'</option>');
			}
			  //alert(x);
			  
			
			
			
			//alert('cookie saved: '+cookieValue);
			//window.location.href = iframe_url;
		}
	});
	
}); // .ready()		
	function setCookie(name, value)
	{
		var cookie = document.cookie= name + "=" + value;
		//alert(value);
		//return value;
	  //	alert("baby cookie is: "+cookie);
	}
	
	
	function lookForCookie(selectedName)
	{
	
		//alert('"'+selectedName+'"');
		var i,value,name;
		ARRcookies=document.cookie.split(";");
		//alert(ARRcookies[0].split("="));
		//alert(ARRcookies[0].split(","));
		for (i=0;i<ARRcookies.length;i++)
		{
			value=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			name=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		  
		  //value=value.replace(/^\s+|\s+$/g,"");
		  //alert(x);
		  //alert('"'+name+'" : '+value);
		  name = name.trim();
		  //alert('"'+name+'" : '+value);
		  
		  if (name == selectedName)
			{
				//  clearInterval(setInt);
				//alert(value);
				value = value.split(",");
				// if (value instanceof Array) {
				// alert('value is Array!');
				// } else {
				// alert('Not an array');
				// }
				

				//alert(value);
				return value;
				
			}
		  }
		
	}
	
	
	function loopThroughCookies()
	{
		var i,value,name;
		ARRcookies=document.cookie.split(";");
		saveNames = new Array();
		for (i=0;i<ARRcookies.length;i++)
		{
		  value=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			name=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		  //name=name.replace(/^\s+|\s+$/g,"");
		  
		  saveNames[i] = name;
		  //alert(saveNames[i]);
		  //alert(x);
		  }
		  
		  return saveNames;
		
	}

	
function changeXmlFields()
{
	//var xml_name = $('#load_options, option').val();
	var txt_name = $('#load_options, option').val();
	//alert('txt_name: "'+txt_name+'"');
	fieldArr = lookForCookie(txt_name);
	
	$("#load_options").val("choose");

	
	//alert('full array: '+fieldArr);
	//alert('fieldArr[0]: '+fieldArr[0]);
	$('#first_name').val(fieldArr[0]);
	$('#last_name').val(fieldArr[1]);
	$('#work_phone').val(fieldArr[2]);
	$('#email').val(fieldArr[3]);
	$('#zip_code').val(fieldArr[4]);
	$('input[name=card_type]').val(fieldArr[5]);
	$('#contract_id').val(fieldArr[6]);
	
	//alert('All done!');

	// fieldArr[0] = firstName;
	// fieldArr[1] = lastName;
	// fieldArr[2] = workPhone;
	// fieldArr[3] = email;
	// fieldArr[4] = zipCode;
	// fieldArr[5] = cardCompany;
	// fieldArr[6] = contractId;
	
}
	
	
function getFieldValues()
{
	companyName = $('#company_name').val();
	shippingFirstName = $('#shipping_first_name').val();
	shippingLastName = $('#shipping_last_name').val();
	mobilePhone = $('#mobile_phone').val();
	shippingAddress1 = $('#shipping_address_1').val();
	shippingAddress2 = $('#shipping_address_2').val();
	shippingCity = $('#shipping_city').val();
	shippingZipCode = $('#shipping_zip_code').val();
	email = $('#email').val();
	firstName = $('#first_name').val();
	lastName = $('#last_name').val();
	workPhone = $('#work_phone').val();
	address1 = $('#address_1').val();
	address2 = $('#address_2').val();
	city = $('#city').val();
	zipCode = $('#zip_code').val();
	saveName = $('#save_name').val();
	contractId = $('#contract_id').val();
	cardCompany = $('input[name=card_type]').val();
}
	
	
function getFieldArray()
{
	getFieldValues();
	
	fieldArr = new Array();
	fieldArr[0] = firstName;
	fieldArr[1] = lastName;
	fieldArr[2] = workPhone;
	fieldArr[3] = email;
	fieldArr[4] = zipCode;
	fieldArr[5] = cardCompany;
	fieldArr[6] = contractId;
	
	return fieldArr;
	
}
	


function getIframeUrl()
{

	getFieldValues();
	
	
	return iframe_url = '?contractId='+contractId+'&companyName='+companyName+'&shippingFirstName='+shippingFirstName+'&shippingLastName='+shippingLastName+'&mobilePhone='+mobilePhone+'&shippingAddress1='+shippingAddress1+'&shippingAddress2='+shippingAddress2+'&shippingCity='+shippingCity+'&shippingZipCode='+shippingZipCode+'&firstName='+firstName+'&lastName='+lastName+'&workPhone='+workPhone+'&address1='+address1+'&address2='+address2+'&city='+city+'&zipCode='+zipCode+'&saveName='+saveName+'&cardCompany='+cardCompany+'&email='+email;

}





	
	




	
	
</script>
