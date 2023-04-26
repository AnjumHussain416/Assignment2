<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$msg=     $_POST["msg"];
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
$sql = "INSERT INTO databse_table(fname, lname, email, mobile,msg) VALUES ('{$fname}','{$lname}','{$email}','{$mobile}','{$msg}');";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/contactform.php");
mysqli_close($conn);
?>