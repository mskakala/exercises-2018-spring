Here is the form

<form name="myForm" action="" method="post">
		
	<?php foreach($items as $i => $text) : ?> 
		<input type='text' name=item[<?php echo $i; ?>] value=<?php echo $text; ?>>
	<?php endforeach; ?>
	
	<input type="text" value='' name=item[<?php echo count($items); ?>]>
	<input type="submit" value="Add" name="submit">
	
</form>