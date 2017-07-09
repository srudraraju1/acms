<!DOCTYPE html>
<head><style type="text/css">.mui-textfield.mui-textfield--float-label > label {-webkit-transition:all .15s ease-out;-moz-transition:all .15s ease-out;-o-transition:all .15s ease-out;transition:all .15s ease-out;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.muicss.com/mui-0.5.3/css/mui.css">
<link rel="shortcut icon" href="final.ico" />

        <link rel="stylesheet" href="new_style.css">
    <script src="//cdn.muicss.com/mui-0.5.3/js/mui.js"></script>
    <style>
      /* Add font-smoothing */
      html,
      body,
      input,
      textarea,
      buttons {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
      }
    </style>
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


  </head>
<body>
<h2> Package history </h2>
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
$temp = $_GET["pid"]; 
//$temp_date = $_POST["date1"]; 
$sql = "SELECT * FROM PACKAGE_TRACKING WHERE PACKAGE_ID = '$temp'";
$result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
  	        $my_stat =  $row["STATUS"];
        
    }
// echo $my_stat;

 if($my_stat == 'SELLER PROCESSING')
 {
 	$num = 10; 
 	$num1=1;
 }
 else if($my_stat == 'SHIPPED'){
 	$num = 25;  
 	$num1=2;
 }
 else if($my_stat == 'CONSIGNMENT RECEIVED'){
 	$num = 40;  
 	$num1=3;
 }
 else if($my_stat == 'CONSIGNMENT DISPATCHED'){
 	$num = 55;  
 	$num1=4;
 }
 else if($my_stat == 'REACHED DESTINATION'){
 	$num = 70;  	 
 	$num1=5;
 }
 else if($my_stat == 'OUT FOR DELIVERY'){
 	$num = 85;  
 	$num1=6;
 }
 else if($my_stat == 'DELIVERED'){
 	$num = 100; 
 	$num1=7;
 }
 //echo $num1;
?>


<!Doctype html>
<html>
<style>
*, *:after, *:before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans";
}


/* Form Progress */
.progress {
  width: 1000px;
  margin: 20px auto;
  text-align: center;
}
.progress .circle,
.progress .bar {
  display: inline-block;
  background: #fff;
  width: 40px; height: 40px;
  border-radius: 40px;
  border: 1px solid #d5d5da;
}
.progress .bar {
  position: relative;
  width: 70px;
  height: 6px;
  top: -63px;
  margin-left: -5px;
  margin-right: -5px;
  border-left: none;
  border-right: none;
  border-radius: 0;
}
.progress .circle .label {
  display: inline-block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  border-radius: 32px;
  margin-top: 3px;
  color: #b5b5ba;
  font-size: 17px;
}
.progress .circle .title {
  color: #b5b5ba;
  font-size: 14px;
  line-height: 30px;
  margin-left: -15px;
}

/* Done / Active */
.progress .bar.done,
.progress .circle.done {
  background: #eee;
}
.progress .bar.active {
  background: linear-gradient(to right, #EEE 40%, #FFF 60%);
}
.progress .circle.done .label {
  color: #FFF;
  background: #8bc435;
  box-shadow: inset 0 0 2px rgba(0,0,0,.2);
}
.progress .circle.done .title {
  color: #444;
}
.progress .circle.active .label {
  color: #FFF;
  background: #0c95be;
  box-shadow: inset 0 0 2px rgba(0,0,0,.2);
}
.progress .circle.active .title {
  color: #0c95be;
}
</style>


<?php
  $stat_arr= array("  ", "Seller Processing", "Shipped", "Consignment Received", "Consignment Dispatched", "Reached Destination", "Out for Delivery", "Successfully Delivered");
  if($num1==1):
  //echo$num1;  
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle active">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar half"></span>

  <div class="circle ">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar "></span>

  <div class="circle">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>
    <?php
  

elseif($num1==2):
  
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle active">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar half"></span>

  <div class="circle">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>
    
    



<?php
elseif($num1==3): 
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar done"></span>

  <div class="circle active">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar half"></span>

  <div class="circle ">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar "></span>

  <div class="circle">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>




<?php
elseif($num1==4):
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar done"></span>

  <div class="circle active">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar half"></span>

  <div class="circle">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>

<?php
elseif($num1==5):
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar done"></span>

  <div class="circle active">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar half"></span>

  <div class="circle">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>

<?php
elseif($num1==6):
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar done"></span>

  <div class="circle active">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar half"></span>

  <div class="circle">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>

<?php
elseif($num1==7):
 //echo $num1;
    ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="progress">

  <div class="circle done">
    <span class="label">1</span>
    <span class="title">Seller Processing</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">2</span>
    <span class="title">Shipping Done</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">3</span>
    <span class="title">Consignment Received</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">4</span>
    <span class="title">Consignment Dispatched</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">5</span>
    <span class="title">Reached Destination</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">6</span>
    <span class="title">Out for Delivery</span>
  </div>
  <span class="bar done"></span>

  <div class="circle done">
    <span class="label">7</span>
    <span class="title">Successfully Delivered</span>
  </div>
</div>

</html>
<?php endif; ?>



<?php
$sql = "SELECT * FROM PACKAGE_TRACKING WHERE PACKAGE_ID = '$temp'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
echo "<b>Package ID:</b> $temp &emsp; <b>Source:</b> ".$row["SOURCE"]." &emsp; <b>Destination:</b> ".$row["DESTINATION"];

}
?>
<div class="table-responsive-vertical shadow-z-1">
<table class='mui-table mui-table--bordered'>

<?php
if ($result->num_rows > 0) {
//echo "<tr><th>PACKAGE_ID</th><th>CONTAINER_ID</th><th>TRAILER_ID</th><th>SOURCE</th><th>DESTINATION</th><th>TIMESTAMP</th><th>LOCATION</th><th>STATUS</th><th>EXPECTED DATE OF ARRIVAL</th></tr>";
//echo "<tr><td>".$row["PACKAGE_ID"]."</td><td>".$row["CONTAINER_ID"]."</td><td> ".$row["TRAILER_ID"]."</td><td>".$row["SOURCE"]."</td><td>".$row["DESTINATION"]."</td><td> ".$row["TIMESTAMP"]."</td><td>".$row["LOCATION"]."</td><td>".$row["STATUS"]." </td><td>".$row["ETA"]."</td></tr>";
    echo "<br><br><table border='2' style='float:left'><tr><th>TIMESTAMP</th><th>LOCATION</th><th>STATUS</th></tr>";
    echo "<tr><td> ".$row["TIMESTAMP"]."</td><td>".$row["LOCATION"]."</td><td>".$row["STATUS"]." </td></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ".$row["TIMESTAMP"]."</td><td>".$row["LOCATION"]."</td><td>".$row["STATUS"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
<center><a href = "logoutUser.php"> Logout </a></center>
