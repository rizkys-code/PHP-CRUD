<?php
// calling db connection file
include_once("db_connect.php");

// data from crud_insert form
$title = $_POST["name"];

// insert data
$sql = "INSERT INTO kategori (name) VALUES ('".$title."')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>