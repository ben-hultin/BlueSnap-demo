<?php 

// TODO CREATE TREE NAV ARRAY

 $DOMAIN = 'http://184.106.138.196/bsiDev/'; 
 
 ?>
 


<!--<link rel="stylesheet" type="text/css" href="treeNav.css">-->

<div class="tree_nav_container">

	<div class="tree_group">
	<ul id="accordion">
		<li>
			<a href="<?php echo $DOMAIN; ?>" class="item parent" >Magento Integration Dev Guide</a>
		</li>
		<li>
        <a href="#" class="item parent" id="product_catalog" >Product Catalog Integration</a>
        <ul>
            <li><a href="#" class="child">Plimus Contract ID (SKU)</a></li>
            <li><a href="<?php echo $DOMAIN; ?>xml-api-GetSKUPrices/" class="last child">Get Plimus SKU Pricing</a></li>
        </ul>
		</li>
		<li>
			<a href="<?php echo $DOMAIN; ?>xml-api-ConvertCurrency/" class="item parent" id="shopping_cart" >Shopping Cart Integration</a>
			<ul>
				<li><a href="<?php echo $DOMAIN; ?>xml-api-ConvertCurrency/" class="child">Convert From Default Currency</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo $DOMAIN; ?>xml-api-CreateShoppers/" class="item parent" id="customer_data" >Customer Data Integration</a>
			<ul>
				<li><a href="<?php echo $DOMAIN; ?>xml-api-CreateShoppers/" >Create Plimus Shopper ID</a></li>
				<li><a href="<?php echo $DOMAIN; ?>xml-api-ShoppersAccount/"  class="child">Retrieve Shopper Account</a></li>
				<li><a href="#"  class="child">Customer Contact Data</a></li>
				<li><a href="#" class="child">Customer Order Histry</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="payment_data" >Payment Data Integration</a>
			<ul>
				<li><a href="#" class="child" >Customer Pay Preferences</a></li>
				<li><a href="#"  class="child">Customer Pay History</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo $DOMAIN; ?>BuyNow-Template/" class="item parent" id="payment_processing" >Payment Processing</a>
			<ul>
				<li><a href="<?php echo $DOMAIN; ?>BuyNow-Template/" >BuyNow Checkout Use Case</a></li>
				<li><a href="#" class="child" >Returning Customer Use Cases</a></li>
				<li><a href="#" class="child" >Subscription/Recurring Billing</a></li>
				<li><a href="#"  class="child">Payment Types</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="order_data" >Order Data Integration</a>
			<ul>
				<li><a href="#" class="child" >IPN Messaging</a></li>
				<li><a href="#"  class="child">Order History</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="order_fulfillment" >Order Fulfillment</a>
			<ul>
				<li><a href="#" class="child" >SaaS & Cloud Services</a></li>
				<li><a href="#" class="child" >Entertainment</a></li>
				<li><a href="#" class="child" >Digital Downloads</a></li>
				<li><a href="#"  class="child">License Key Managment</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="exception" >Exception Handling</a>
			<ul>
				<li><a href="#" class="child" >Order Held In Review</a></li>
				<li><a href="#" class="child" >Bank or Processor Decline</a></li>
				<li><a href="#" class="child">Retrys & Resending</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="custom_email" >Custom Email Communications</a>
		</li>
	</ul>
		
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">

	path = window.location.pathname;
	path = path.substr(16);
$(document).ready(function () {
         
    $('#accordion a.item').click(function () {
 
        /* FIRST SECTION */
		
        //slideup or hide all the Submenu
        $('#accordion li').children('ul').slideUp('fast');  
         
        //remove all the "Over" class, so that the arrow reset to default
        $('#accordion a.item').each(function () {
            if ($(this).attr('rel')!='') {
                $(this).removeClass($(this).attr('rel') + 'Over');  
            }
        });
         
        /* SECOND SECTION */       
         
        //show the selected submenu
        $(this).siblings('ul').slideDown('fast');
         
        //add "Over" class, so that the arrow pointing down
        $(this).children('a').addClass($(this).children('li a').attr('rel') + 'Over');          
     
        return false;
 
    });
 
     
});

</script>
