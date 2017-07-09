

<!DOCTYPE html>
<html><head>
<title>Sign-Up</title>
<link rel="shortcut icon" href="final.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-orange.min.css">
<link rel="stylesheet" href="new_style.css">
<script defer="" src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>
<body id="body-color">
<script defer="" src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <style>
a:link, a:visited {
    background-color: #66b3ff;
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
<div id="Sign-Up" class="container">
<fieldset style="width:30%"><h2>Sign-up Form</h2>

<form method="POST" action="signupUser.php">
<div class="group">   
      <input name="uname" type="text" value="<?php echo $_GET['msg']; ?>">
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
<div class="group">   
      <input name="cpass" type="password">
      <span class="highlight"></span>
      <span class="bar"></span>
        <label>Confirm Password</label>
    </div>
    <div class="group">   
      <input name="add" type="text">
      <span class="highlight"></span>
      <span class="bar"></span>
        <label>Address</label>
    </div>
<center><button data-upgraded=",MaterialButton,MaterialRipple" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submit">
  Sign-up
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button></center></form>
</fieldset>
</div>


</body></html>
