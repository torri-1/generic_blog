<?php
$sql_host = "localhost:3306";
$sql_user = "root";
$sql_password = "your_password";
$sql_db = "blog";
$link = mysqli_connect($sql_host, $sql_user, $sql_password, $sql_db);
mysqli_query($link, "SET NAMES 'UTF8'");
?>