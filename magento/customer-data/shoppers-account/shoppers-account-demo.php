
<div class="header_container">

		
		<input type="submit" id="submit" onclick="openWindow('shoppers-account.php', 1025)" value="Retrieve the Plimus Shopper Account Information" class="header_button" />
	
	</div>
	
	<div class="header_space"></div>
	
		<div class="group">
		
			<label>Shopper Id</label><br />
			<input type="text" id="shopper_id" size="10" value="19341670" class="input_fields" /><br /><br />
			
			<label>Credentials</label><br />
			<input type="text" id="credentials" size="40" value="BenPlimusAPI:BenPlimus789" class="input_fields" /><br />
			<label>(separate with semi-colon, eg. MyAPI<b>:</b>My123)</label><br /><br />
			
			
			<div class="clear"></div>
		</div>	

	<script type="text/javascript">

	function openWindow(url, width)
	{
		url;
		shopper = document.getElementById('shopper_id').value;
		credentials = document.getElementById('credentials').value;
		window.open(url+'?shopper_id='+shopper+'&credentials='+credentials, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	}

</script>
