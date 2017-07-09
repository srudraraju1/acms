<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">  
  <form action="acms1.php" method="post">
    <h3>Track your Package</h3>
    <h4>Please enter your package Id</h4>
    <fieldset>
      <input placeholder="Your package id" type="text" name="PACKAGE_ID" tabindex="1" required autofocus>
    </fieldset>
 <input type="submit">
  </form>
</div>
</body>
</html>
<?php
   header("localhost/acms1.php");
   exit;
?>
