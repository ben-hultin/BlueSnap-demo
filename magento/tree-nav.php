<?php 



 $DOMAIN = 'http://184.106.138.196/bsnp-dev/magento/'; 
 
 ?>
 


<!--<link rel="stylesheet" type="text/css" href="treeNav.css">-->

<div class="tree_nav_container">

	<div class="tree_group">
	<ul id="accordion">
		<li>
			<a href="<?php echo $DOMAIN; ?>" id="magento-integration" class="item parent" >Magento Integration Dev Guide</a>
		<ul>	
			<li><a href="<?php echo $DOMAIN; ?>magento-integration/introduction" class="inactive child">Introduction</a></li>
		</ul>
		</li>
		<li>
        <a href="#" class="item parent" id="product-catalog" >Product Catalog Integration</a>
        <ul>
			<li><a href="#" class="inactive child">Introduction</a></li>
            <li><a href="#" class="inactive child">Plimus Contract ID (SKU)</a></li>
            <li  name="child"><a href="<?php echo $DOMAIN; ?>product-catalog/get-sku-prices/" id="get-sku-prices" class="inactive child">Get Plimus SKU Pricing</a></li>
        </ul>
		</li>
		<li>
			<a href="<?php echo $DOMAIN; ?>convert-currency/" class="item parent" id="shopping-cart" >Shopping Cart Integration</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="<?php echo $DOMAIN; ?>shopping-cart/convert-currency/" id="convert-currency" class="inactive child">Convert From Default Currency</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo $DOMAIN; ?>create-shoppers/" class="item parent" id="customer-data" >Customer Data Integration</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="<?php echo $DOMAIN; ?>customer-data/create-shoppers/" id="create-shoppers" >Create Plimus Shopper ID</a></li>
				<li><a href="<?php echo $DOMAIN; ?>customer-data/shoppers-account/"  id="shoppers-account" class="inactive child">Retrieve Shopper Account</a></li>
				<li><a href="#"  class="inactive child">Customer Contact Data</a></li>
				<li><a href="#" class="inactive child">Customer Order History</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="payment-data" >Payment Data Integration</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="#" class="inactive child" >Customer Pay Preferences</a></li>
				<li><a href="#"  class="inactive child">Customer Pay History</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="payment-processing" >Checkout & Payment Processing</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="<?php echo $DOMAIN; ?>payment-processing/buynow-template/" id="buynow-template/" >BuyNow Checkout Use Case</a></li>
				<li><a href="#" class="inactive child" >Returning Customer Use Cases</a></li>
				<li><a href="#" class="inactive child" >Subscription/Recurring Billing</a></li>
				<li><a href="#"  class="inactive child">Payment Types</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="order-data" >Order Data Integration</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="#" class="inactive child" >IPN Messaging</a></li>
				<li><a href="<?php echo $DOMAIN; ?>order-data/order-history/"  class="inactive child">Order History</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="order-fulfillment" >Order Fulfillment</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="#" class="inactive child" >SaaS & Cloud Services</a></li>
				<li><a href="#" class="inactive child" >Entertainment</a></li>
				<li><a href="#" class="inactive child" >Digital Downloads</a></li>
				<li><a href="#"  class="inactive child">License Key Managment</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="exception" >Exception Handling</a>
			<ul>
				<li><a href="#" class="inactive child">Introduction</a></li>
				<li><a href="#" class="inactive child" >Order Held In Review</a></li>
				<li><a href="#" class="inactive child" >Bank or Processor Decline</a></li>
				<li><a href="#" class="inactive child">Retrys & Resending</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="item parent" id="custom-email" >Custom Email Communications</a>
		<ul>	
			<li><a href="#" class="inactive child">Introduction</a></li>
		</ul>
		</li>
	</ul>
		
	</div>
</div>
<script type="text/javascript" src="http://ajax.Microsoft.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->



<script type="text/javascript">

	path = window.location.pathname;
	//alert(path);
	path = path.substr(18);
	pathArr = path.split("/");
	parent = pathArr[0];
	child = pathArr[1];
	//alert(parent+' / '+child);
$(document).ready(function () {
	
	$('#'+parent).siblings('ul').show();
	
		 
		 
    $('#accordion a.item').click(function () {
		//id = $(this).attr('id');
		//alert(id);
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
