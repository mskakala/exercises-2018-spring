<?Php
$page_title = 'Shopping list'; 
$page = 'home';

if(isset($_GET['page']) && $_GET['page'] != null){
	$page = $_GET['page'];
}

$items = array();

if(isset($_POST['item']) && !empty($_POST['item'])){
	echo "<pre>";
	print_r($_POST);
	$items = $_POST['item'];
}



?>


<!DOCTYPE html>
<html>
<head>
<script src="validation.js"></script>
</head>
<body>

<h1> <?php echo $page_title; ?> </h1>
<?php 
if($page == 'home'){
	include "workout3-home.php";
}

if($page == 'form'){
	include "workout3-form.php";
}


?>

<nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>



</body>
</html>