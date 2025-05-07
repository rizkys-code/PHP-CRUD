<?php
// calling db connection file
include_once("db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$title = $_POST["name"];

// update data
$sql = "UPDATE kategori SET name = '".$title."' WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>