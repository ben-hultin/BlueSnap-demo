	<div class="header_container">

		
		<input type="submit" id="submit" onclick="openWindow('create-shoppers.php', 1025)" value="Create a Plimus Shopper ID" class="header_button" />
	
	</div>
	
	<div class="header_space"></div>
	
	<div class="group">
	
		&lt;?xml version="1.0" encoding="UTF-8" standalone="yes"?&gt;<br />
        &lt;shopper xmlns="http://ws.plimus.com"&gt;<br />
				<div class="child_1">
              &lt;shopper-info&gt;<br />
				</div>
					<div class="child_2">
                    &lt;shopper-contact-info&gt;<br />
					</div>
						<div class="child_3">
                          &lt;first-name&gt;<input type="text" class="xml_input" value="Bob" size="20" id="first_name" />&lt;/first-name&gt;<br />
                          &lt;last-name&gt;<input type="text" class="xml_input" value="Smith" size="20" id="last_name" />&lt;/last-name&gt;<br />
                          &lt;email&gt;<input type="text" class="xml_input" value="bob.smith@plimus.com" size="20" id="email" />&lt;/email&gt;<br />
                          &lt;address1&gt;<input type="text" class="xml_input" value="123 Main Street" size="20" id="address_1" />&lt;/address1&gt;<br />
		&lt;address2&gt;<input type="text" class="xml_input" value="Apt K-9" size="20" id="address_2" />&lt;/address2&gt;<br />
                          &lt;city&gt;<input type="text" class="xml_input"  value="Parkville" size="20" id="city" />&lt;/city&gt;<br />
                          &lt;zip&gt;<input type="text" class="xml_input" value="37027" size="5" id="zipcode" />&lt;/zip&gt;<br />
                          &lt;country&gt;<input type="text" class="xml_input" value="us" size="20" id="country" />&lt;/country&gt;<br />
                          &lt;state&gt;<input type="text" class="xml_input" value="TN" size="2" id="state" />&lt;/state&gt;<br />
                          &lt;phone&gt;<input type="text" class="xml_input" value="411-555-1212" size="11" id="phone" />&lt;/phone&gt;<br />
						</div>
					<div class="child_2">
                    &lt;/shopper-contact-info&gt;<br />
                    &lt;locale&gt;en&lt;/locale&gt;<br />
					</div>
				<div class="child_1">
              &lt;/shopper-info&gt;<br />
              &lt;web-info&gt;<br />
				</div>
					<div class="child_2">
                    &lt;ip&gt;62.219.121.253&lt;/ip&gt;<br />
					&lt;remote-host&gt;bzq-219-121-253.static.bezeqint.net.reinventhosting.com&lt;/remote-host&gt;<br />
					&lt;user-agent&gt;Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; GTB6.3; .NET CLR 2.0.50727&lt;/user-agent&gt;<br />
					&lt;accept-language&gt;en-us&lt;/accept-language&gt;<br />
					</div>
				<div class="child_1">
              &lt;/web-info&gt;<br />
			  </div>
        &lt;/shopper&gt;<br /><br />
		
		
		
		<div class="clear"></div>
	
	</div>
	
	</form>
	
	
	<script type="text/javascript">

	function openWindow(url, width)
	{
		$theUrl=url;
		first_name = document.getElementById('first_name').value;
		last_name = document.getElementById('last_name').value;
		email = document.getElementById('email').value;
		address_1 = document.getElementById('address_1').value;
		address_2 = document.getElementById('address_2').value;
		city = document.getElementById('city').value;
		zipcode = document.getElementById('zipcode').value;
		country = document.getElementById('country').value;
		state = document.getElementById('state').value;
		phone = document.getElementById('phone').value;
		params = '?first_name='+first_name+'&last_name='+last_name+'&email='+email+'&address_1='+address_1+'&address_2='+address_2+'&city='+city+'&zipcode='+zipcode+'&country='+country+'&state='+state+'&phone='+phone;
		window.open($theUrl+params, "_blank", "menubar=0,resizable=1,width="+width+",height=350,directories=0,scrollbars=yes");

	}

</script>
	
	
	
	<!--
	
	
	
	-->