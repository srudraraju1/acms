<!DOCTYPE HTML>
<html>
<head>
<title>Logout</title>
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
<h2>Succesfully Logged Out!</h2><br><br>
<a href = "loginUserhtml.php"> Click here to go to home page</a></center>
</html> 
<?php
session_destroy();
?>
