<?php

$connection = mysqli_connect('localhost:3308', 'root', '', 'ecommerce');
if(!$connection) {
    die("Database connection failed");
}
$q = "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'";
$connection -> query($q);

?>
