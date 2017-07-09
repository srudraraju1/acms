<!DOCTYPE HTML>
<html>
<head>
<title>Logged In</title>
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
<h2>Welcome, <?php
echo $_GET["msg"];
?>!</h2><br><br>
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
echo $_SESSION['uname'];
$temp = $_POST["PACKAGE_ID"]; 
$temp_date = $_POST["date1"]; 
$uname = $_GET["msg"];
//echo $uname;

//$now = new DateTime();
$sql = "SELECT PACKAGE_ID,ETA,image,Name FROM PACKAGE_TRACKING where USER_ID='$uname' group by PACKAGE_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<tr><th>PACKAGE ID</th><th>Name</th><th>Image</th><th>Status</th><th></th><th></th><th>Track package</th></tr>";
    while($row = $result->fetch_assoc()) {
    //echo $row["PACKAGE_ID"];
    		$fdate = $row["ETA"];
    		//echo $fdate;
    		$diff=strtotime($fdate)-time(); 
    		//echo $diff;
    		$temp=$diff/86400; // 60 sec/min*60 min/hr*24 hr/day=86400 sec/day 

// days 
$days=floor($temp);
	//echo $future_date->format("%a days");
        echo "<tr style='height:200px'><td>".$row["PACKAGE_ID"]."</td><td>".$row["Name"]."</td>";
        echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width:128px;height:128px"/></td><td>';
        $timestamp = strtotime($row['ETA']);
        $date = date('l jS F Y', $timestamp);
        if($days<0) echo "Delivered on<br>".$date."</td><td></td>";
        else if($days==0) echo "Arriving today</td><td></td>";
        else echo "Arriving in $days days</td><td></td>";
        echo "<td style='width:30px'></td><td><a href='acms.php?pid=" .$row["PACKAGE_ID"]."'>Track</a></td></tr>";
        
    }
    echo "</table>";
} else {
    echo "You haven't ordered anything yet!";
}
echo "<center><a href = 'newUser.php?msg=$uname'> View Addresses </a></center>";
$conn->close();
?>
<br>
<center><a href = "logoutUser.php"> Logout </a></center>
