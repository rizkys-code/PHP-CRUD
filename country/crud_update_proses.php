<?php
// calling db connection file
include_once("../db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$name = $_POST["name"];
$continent = $_POST["continent"];

// update data
$sql = "UPDATE country SET name = '" . $name . "', continent = '".$continent."' WHERE id = " . $id;
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select_country.php");
