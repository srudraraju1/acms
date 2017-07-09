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
$uname = $_POST["uname"]; 
$pwd = $_POST["password"]; 
$sql = "SELECT * FROM USER WHERE USER_ID = '$uname'AND PASSWORD = '$pwd' ";
$result = $conn->query($sql);

if ($result->num_rows >0) {
	session_start();
   $_SESSION['uname'] = $uname;
   echo $_SESSION['uname'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
		header("Location: /loggedInUser.php?msg=$uname");
   echo '<a href="http://localhost/logoutUser.php">Logout</a>';}
     else {
    echo "SORRY... YOU ENTERED WRONG ID OR PASSWORD... PLEASE RETRY...";
		header("Location: /loginUserhtml.php?msg=failed");
exit(0); 
}
$conn->close();
?>
