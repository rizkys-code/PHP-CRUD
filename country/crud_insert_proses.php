<?php
// calling db connection file
include_once("../db_connect.php");

// data from crud_insert form
$name = $_POST["name"];
$continent = $_POST["continent"];

// insert data
$sql = "INSERT INTO country (name, continent) VALUES ('" . $name . "', '" . $continent . "')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select_country.php");
