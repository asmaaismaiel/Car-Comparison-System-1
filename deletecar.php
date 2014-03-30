<?php
/**
 * @author MD Mosleh Uddin
 * @Copyright 2014
 */
include ('connect.php');
$carid = $_GET['car_id'];

$delete = mysql_query ("DELETE FROM cars WHERE id='$carid'");

echo "
    <script>
    alert('Car successfully deleted!');
    </script>
    <meta HTTP-EQUIV='REFRESH' content='0; url=allinfo.php'>
    ";
?>
