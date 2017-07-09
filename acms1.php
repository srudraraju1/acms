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
    background-color: #ff0066;
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
echo $_SESSION['uname'];
$temp = $_POST["PACKAGE_ID"]; 
$temp_date = $_POST["date1"]; 
$uname = $_GET["msg"];
$sql = "SELECT PACKAGE_ID FROM PACKAGE_TRACKING WHERE USER_ID=$uname' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<tr><th>PACKAGE_ID</th><th>CONTAINER_ID</th><th>TRAILER_ID</th><th>SOURCE</th><th>DESTINATION</th><th>TIMESTAMP</th><th>LOCATION</th><th>STATUS</th><th>EXPECTED DATE OF ARRIVAL</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["PACKAGE_ID"]."</td><td>".$row["CONTAINER_ID"]."</td><td> ".$row["TRAILER_ID"]."</td><td>".$row["SOURCE"]."</td><td>".$row["DESTINATION"]."</td><td> ".$row["TIMESTAMP"]."</td><td>".$row["LOCATION"]."</td><td>".$row["STATUS"]." </td><td>".$row["ETA"]."</td></tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
