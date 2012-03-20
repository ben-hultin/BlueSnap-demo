
	
		<div id="contract_id_group">
		<label>Plimus Contract Id (SKU):</label>
			<input type="text" value="<?php echo $contractId; ?>" maxlength="10" size="10" name="contract_id" class="field_input"/><br />
		</div>
		
		
		
		
		<div id="billing_field_group" >
			<h3>Billing Address</h3>
			<table>
			<tr>
			<td align="right">
				<label>First Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $firstName; ?>" maxlength="100" size="40" name="first_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Last Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $lastName; ?>" maxlength="100" size="40" name="last_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Phone: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $workPhone; ?>" maxlength="100" size="40" name="work_phone" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
			<!--	<label>Address: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $address1; ?>" maxlength="100" size="40" name="address_1" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Address2: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $address2; ?>" maxlength="100" size="40" name="address_2" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>City: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $city; ?>" maxlength="100" size="40" name="city" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right"> -->
				<label>Email: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $email; ?>" maxlength="100" size="40" name="email" class="field_input"/><br />
			</td>
			</tr>
			<td align="right"> 
				<label>Zipcode: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $zipCode; ?>" maxlength="100" size="40" name="zip_code" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
			</table>
		</div>
		
		
		<div id="credit_field_group" >
			<div class="credit_card_title" ><h3>Credit Card Info</h3>
			
			
			Select one of these <br /> 
			demo credit cards 
			
			
			
			</div>
			<!--
			<label>Card Number: </label>
			<input type="text" maxlength="40" size="40" name="card_number" class="field_input"/><br />
			
			<select onchange="changeCardNumber()" name="card_company">
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
				<input type="radio" checked="checked" name="card_type" value="VISA"> Visa<br />
				<input type="radio" name="card_type" value="MASTERCARD"> Master Card<br />
				<input type="radio" name="card_type" value="AMEX"> American Express<br />
				<input type="radio" name="card_type" value="DISCOVER"> Discover<br />
				<input type="radio" name="card_type" value="SOLO"> Solo<br />
				<input type="radio" name="card_type" value="DINERS"> Diners Club<br />
				<input type="radio" name="card_type" value="JCB"> JCB<br />
			</div>
<!--
			<label>Security Code: </label>
			<input type="text" maxlength="4" size="4" name="verify_card_code" class="field_input"/><br />
-->
			
			<div class="clear"></div>
			
			
		</div>
		
		
		<div id="buynow_submit_group">
			<label>Submit to Buy Now Template</label>
				<!--<input type="submit" id="submit" value="buynow" class="action_button" />-->
			<input type="submit" id="submit" onclick="openWindow('checkout-test.php', 1025)" value="buynow" class="action_button" />
		</div>
		
		
		<div id="save_group">
			<h3>Save and Load Options</h3>
		<input type="text" id="save_name" onclick="this.value='';" value="Enter a name to save this form as" size="30" class="action_text" name="save_name" /><br />
		<input type="button" id="save" value="save" class="action_button" /><br />
		
		

		<select class="action_text" id="load_options" name="load_options" onchange="changeXmlFields()">
			<option selected="selected" ><?php echo $saved_file; ?></option>
			<?php foreach($xml_array as $name):
				$txt_name = $name;
				$name = substr_replace($name, '', 0, 7);
				$name = substr_replace($name, '', -4);
				//$xml_array[] = $xml_name;
			?>
				<option value="<?php echo $txt_name; ?>" ><?php echo $name; ?></option>
			
			<?php endforeach; ?>
		</select><br />
		
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
			
		<input type="button" id="reset" value="reset fields" class="action_button" />
		<!---->
		<div class="clear"></div>
		
		</div>
		
		
		<!--
		<div id="company_field_group" >
			<h3>Shipping Address</h3>
			<table>
			<tr>
			<td align="right">
				<label>Company Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $companyName; ?>" maxlength="100" size="40" name="company_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>First Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingFirstName; ?>" maxlength="100" size="40" name="shipping_first_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Last Name: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingLastName; ?>" maxlength="100" size="40" name="shipping_last_name" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Company Phone: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $mobilePhone; ?>" maxlength="100" size="40" name="mobile_phone" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Address: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingAddress1; ?>" maxlength="100" size="40" name="shipping_address_1" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Address2: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingAddress2; ?>" maxlength="100" size="40" name="shipping_address_2" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>City: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingCity; ?>" maxlength="100" size="40" name="shipping_city" class="field_input"/><br />
			</td>
			</tr>
			<tr>
			<td align="right">
				<label>Zipcode: </label>
			</td>
			<td align="right">
				<input type="text" value="<?php echo $shippingZipCode; ?>" maxlength="100" size="40" name="shipping_zip_code" class="field_input"/><br />
			</td>
			</tr>
			</table>
		</div>
		-->
