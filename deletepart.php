<?php
/**
 * @author MD Mosleh Uddin
 * @Copyright 2014
 */
include ('connect.php');
$partid = $_GET['part_id'];

$delete = mysql_query ("DELETE FROM parts WHERE id='$partid'");

echo "
    <script>
    alert('Part successfully deleted!');
    </script>
    <meta HTTP-EQUIV='REFRESH' content='0; url=allinfo.php'>
    ";
?>
