<?php

$error="<h1>problem connecting to database. please try again by reloading the page</h1>";

$connect = mysql_connect("localhost", "root", "root") or die($error);
mysql_select_db("car_comparison") or die($error);
$dbLink = mysql_connect("localhost", "root", "root");
	mysql_query("SET character_set_client=utf8", $dbLink);
	mysql_query("SET character_set_connection=utf8", $dbLink);
$dbLink = mysql_connect("localhost", "root", "root");
	mysql_query("SET character_set_results=utf8", $dbLink);
	mb_language('uni');
	mb_internal_encoding('UTF-8');
?>