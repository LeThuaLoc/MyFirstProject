<?php
	//get the data from the form
	$product_description =$_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];

    //calculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = "$discount_percent"."%";
    $discount_formatted ="$".number_format($discount,  2);
    $discount_price_formatted = "$".number_format($discount_price, 2);

    /*****************************************************
     * Author: Joel Murach
     * Purpose: This program calculates the discount for a
     price that's entered by the user
     ****************************************************/
    // get the data from the form
    $list_price = $_GET['list_price'];

    // calculate the discount
    $discount_percent = .20;       // 20% discount
    $discount_amount = $list_price * $discount_percent;
    $discount_price = $list_price - $discount_amount;
?>

<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>
<div id="content">
    <h1>Product Discount Calculator</h1>

    <label>Product Description:</label>
    <span><?php echo $product_description; ?></span><br>

    <label>List Price:</label>
    <span><?php echo $list_price_formatted; ?></span><br>

    <label>Discount Percent:</label>
    <span><?php echo $discount_percent_formatted; ?></span><br>

    <label>Discount Amount:</label>
    <span><?php echo $discount_price_formatted; ?></span><br>
</div>
</body>