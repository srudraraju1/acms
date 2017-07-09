<!DOCTYPE html>
<html><head></head>
<body id="body-color">
<header class="mainheader">
<title>Login</title>
<link rel="shortcut icon" href="final.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-orange.min.css">
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
<center>
<div id="Login" class="container">
<h2>Login Here</h2>
<form method="POST" action="loginUser.php">
      <div class="group">   
      <input name="uname" type="text">
      <span class="highlight"></span>
      <span class="bar"></span>
        <label>Username</label>
    </div>
      
    <div class="group">  
      <input name="password" type="password">
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
      </div>
  <!-- Accent-colored raised button with ripple -->
<center><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submit">
  Login
</button></center></form>
</div>



 
<style type="text/css"></style><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style></center><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style>

 
</body><style type="text/css"></style></html>
<center>
<?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo '<span style="color:#ff0000;text-align:center;">Wrong Username / Password';
}
else if (isset($_GET["msg"]) && $_GET["msg"] == 1) {
echo '<span style="color:#008000;text-align:center;">Successfully Registered';
echo "<br>";
}
echo "<center><a href = 'signupUserhtml.php'> Sign Up </a></center>";
?></center>
