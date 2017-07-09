<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'acms');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$userName = $_POST['uname'];
	$password =  $_POST['password'];
	$add = $_POST['add'];
	$query = "INSERT INTO USER (USER_ID,PASSWORD,Address) VALUES ('$userName','$password','$add')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['uname']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM USER WHERE USER_ID = '$_POST[uname]' AND password = '$_POST[password]' AND Address='$_POST[add]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
		$userName = $_POST['uname'];
		header("Location: /loginUserhtml.php?msg=1");
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER";
	}
}
}
if(isset($_POST['submit']))
{
		SignUp();
}
?>
