

	<div class="header_container">

		
		<input type="submit" id="submit" onclick="openWindow('convert-currency.php', 1025)" value="Convert From Default Currency to Shopper Selected Currency" class="header_button" />
	
	</div>
	
	
	<div class="header_space"></div>

	
	<div class="group">

		<label>Choose Original Currency</label><br />
		<select id="from" class="currency_select">
				<option value="USD" >United States Dollars</option>
				<option value="EUR" >Euro</option>
				<option value="CAD" >Canada Dollars</option>
				<option value="GBP" >United Kingdom Pounds</option>
				<option value="DEM" >Germany Deustche Marks</option>
				<option value="FRF" >France Francs</option>
				<option value="JPY" >Japan Yen</option>
				<option value="ITL" >Italy Lira</option>
				<option value="CHF" >Switzerland Francs</option>
				<option value="AUD" >Australia Dollars</option>
				<option value="FIM" >Finland Markka</option>
				<option value="INR" >India Rupees</option>
				<option value="LUF" >Luxembourg Francs</option>
				<option value="EUR" >Slovenia</option>
				<option value="NLG" >Netherlands Guilders</option>
				<option value="GRD" >Greece Drachmas</option>
				<option value="ESP" >Spain Pesetas</option>
				<option value="ZAR" >South Africa</option>
				<option value="SGD" >Singapore Dollars</option>
				<option value="RUR" >Russia Rubles</option>
				<option value="PTE" >Portugal Escudo</option>
				<option value="NOK" >Norway</option>
				<option value="NZD" >New Zealand Dollars</option>
				<option value="MXP" >Mexico Pesos</option>
				<option value="SEK" >Sweden Krona</option>
				<option value="GRD" >Greece Drachmas</option>
				<option value="IEP" >Ireland Punt</option>
				<option value="HKD" >Hong Kong Dollars</option>
				<option value="ILS" >Isreal New Shekels</option>
				<option value="BRR" >Brazil Real</option>
				<option value="ATS" >Austria Schillings</option>
				<option value="DKK" >Denmark Kroner</option>
		</select>
		
		
		    
		
		<br />
		<label>Price</label><br />
		<input type="text" id="amount" size="10" value="100.00" class="input_fields" /><br />
		
		<label>Choose New Currency</label><br />
		<select id="to" class="currency_select">
				<option value="EUR" >Euro</option>
				<option value="USD" >United States Dollars</option>
				<option value="CAD" >Canada Dollars</option>
				<option value="GBP" >United Kingdom Pounds</option>
				<option value="DEM" >Germany Deustche Marks</option>
				<option value="FRF" >France Francs</option>
				<option value="JPY" >Japan Yen</option>
				<option value="ITL" >Italy Lira</option>
				<option value="CHF" >Switzerland Francs</option>
				<option value="AUD" >Australia Dollars</option>
				<option value="FIM" >Finland Markka</option>
				<option value="INR" >India Rupees</option>
				<option value="LUF" >Luxembourg Francs</option>
				<option value="EUR" >Slovenia</option>
				<option value="NLG" >Netherlands Guilders</option>
				<option value="GRD" >Greece Drachmas</option>
				<option value="ESP" >Spain Pesetas</option>
				<option value="ZAR" >South Africa</option>
				<option value="SGD" >Singapore Dollars</option>
				<option value="RUR" >Russia Rubles</option>
				<option value="PTE" >Portugal Escudo</option>
				<option value="NOK" >Norway</option>
				<option value="NZD" >New Zealand Dollars</option>
				<option value="MXP" >Mexico Pesos</option>
				<option value="SEK" >Sweden Krona</option>
				<option value="GRD" >Greece Drachmas</option>
				<option value="IEP" >Ireland Punt</option>
				<option value="HKD" >Hong Kong Dollars</option>
				<option value="ILS" >Isreal New Shekels</option>
				<option value="BRR" >Brazil Real</option>
				<option value="ATS" >Austria Schillings</option>
				<option value="DKK" >Denmark Kroner</option>
		</select>
		<br />
		


		<!-- -->
		
		<div class="clear"></div>
		
	</div>	
	
	
	
	<script type="text/javascript">
	// function openWindow(url, width)
	// {
		// $theUrl=url;

		// window.open($theUrl, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	// }
	
	function openWindow(url, width)
	{
		var from = document.getElementById('from').value;
		var to = document.getElementById('to').value;
		var amount = document.getElementById('amount').value;
		
		window.open(url+'?from='+from+'&to='+to+'&amount='+amount, '_blank', "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");
	}
	
	//2131574
</script>
		
		
		





