<?php
session_start();
$host="localhost";
$username="root";
$password="root";
$db_name="school";
$link=mysqli_connect("$host", "$username", "$password","$db_name")or die("Cannot Connect");
//mysqli_select_db("$db_name")or die("Cannot Select DB");
?>
