<?php
session_start();
$host="127.0.0.1";
$username="root";
$password="";
$db_name="schoolmanagementsystemdb";
$link=mysql_connect("$host", "$username", "$password")or die("Cannot Connect");
mysql_select_db("$db_name")or die("Cannot Select DB");
?>
