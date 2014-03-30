<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/design.css">
</head>
<body>
<?php
    include ('connect.php');
    
    echo "
    <div id='link'>
    <a href='index.php' class='button'>Home</a>&nbsp;
    <a href='allinfo.php' class='button'>Car & Parts</a>&nbsp;
    <a href='add-car-parts.php' class='button'>Add a parts</a>&nbsp;
    <a href='add-parts-to-car.php' class='button'>Add a parts to a Car</a>&nbsp;
    <a href='compare-car.php' class='button'>Compare Two Car</a>&nbsp;
    </div>
    ";
?>
