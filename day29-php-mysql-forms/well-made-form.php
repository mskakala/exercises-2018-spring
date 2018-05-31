<?php

// NOTE: this is just a template. It is not supposed to work in this state.


// CREATE - www.example.com/edit
// EDIT - www.example.com/edit?id=3

if (!isset($_GET['id'])) {
    // insert

    $product = new Product();
} else {
    // edit
    $product = Product::find( 3 );
}

// here I can be sure that I have an object $product of class Product
// that can be saved into the database

// was the form submitted
if ($_POST) {

    // update data with submitted data
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];

    // validate the data
    $there_were_errors = false;
    if ($product->name == '') {
        // "name cannot be empty"
        $there_were_errors = true;
    }

    // if validation did not encounter any errors
    if(!$there_were_errors) {

        // save
        $product->save();

        // redirect
        header('Location: /edit?id=3');

    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Well-made form</title>
</head>
<body>

    <form action="" method="POST">

        <!-- form fields -->

        <!-- prefill the form fields with the current values inside $product -->
    
    </form>
    
</body>
</html>