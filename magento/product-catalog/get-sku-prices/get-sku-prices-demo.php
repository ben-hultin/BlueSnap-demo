<!--menubar="no" toolbar='no' width='950' height='680' left='400'-->

	<div class="header_container">


		<input type="submit" id="submit" onclick="openWindow('get-sku-prices.php', 1025)" value="Get Plimus SKU Pricing" class="header_button"  />

		
	</div>
	
	<div class="header_space"></div>

		<div class="group">
		
			<label>Contract Id</label><br />
			<input type="text" name="contract_id" id="contract_id" size="10" value="2131956" class="input_fields" /><br /><br />
			
			<label>Credentials</label><br />
			<input type="text" name="credentials" id="credentials" size="40" value="BenPlimusAPI:BenPlimus789" class="input_fields" /><br />
			<label>(separate with semi-colon, eg. MyAPI<b>:</b>My123)</label><br /><br />
			
			 
			<div class="clear"></div>
		</div>	
		
		
<script type="text/javascript">

	function openWindow(url, width)
	{
		$theUrl=url;
		contract = document.getElementById('contract_id').value;
		credentials = document.getElementById('credentials').value;
		window.open($theUrl+'?contract_id='+contract+'&credentials='+credentials, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	}

</script>




	
	

