<!DOCTYPE HTML>
<html>
<head>
<title>New User</title>
<link rel="shortcut icon" href="final.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<link rel="stylesheet" href="new_style.css">
<script defer="" src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <style>
a:link, a:visited {
    background-color: #ff6600;
    color: white;
    padding: 10px 10px;
    text-align: center;    
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>
</head><center><body> 
<header class="mainheader">
<div class="table-responsive-vertical shadow-z-1">
<table class='mui-table mui-table--bordered'>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "acms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_GET["msg"];

$sql = "SELECT Address FROM USER where USER_ID='$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<tr><th>Your Addresses</th></tr>";
    while($row = $result->fetch_assoc()) {
    echo "<tr style='height:50px'><td>".$row["Address"]."</td></tr>"; 
    }
    echo "</table>";
} else {
    echo "No adresses. Add new address by signing with your username and password.";
    
}
echo "<center><a href = 'signupUserhtml.php?msg=$uname'> Add Address </a></center>";
$conn->close();
?>
<br>

