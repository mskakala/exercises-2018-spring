<form action="paypal.php?sandbox=1" method="post"> <?php // remove sandbox=1 for live transactions ?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="INR" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
    <input type="hidden" name="product_id" value="<?php echo $model; ?>" /> <input type="hidden" name="product_name" value="<?php echo $product_name; ?>" /> 
	<input type="hidden" name="product_quantity" value="1" />
	<input type="hidden" name="product_amount" value="<?php echo $total; ?>" />
	<input type="hidden" name="payer_fname" value="<?php  echo $checkout['name'];  ?>" />
 	<input type="hidden" name="payer_email" value="<?php  echo $checkout['email'];  ?>" />
		<input type="hidden" name="payer_address" value="<?php  echo $checkout['address'];  ?>" />
 
	<input type="submit" name="submit" value="Pay now using Paypal" /> 
    </form>