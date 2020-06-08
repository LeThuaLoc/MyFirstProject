<?php
    //get the data from the request
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
?>

<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Name Test</title>
        <link  rel="stylesheet" type="text/css" href="./css/main.css"
    </head>
    <body>
        <h2>Welcome</h2>
        <p>First Name: <?php echo $first_name; ?></p>
        <p>Last Name: <?php echo $last_name; ?></p>
    </body>
</html>