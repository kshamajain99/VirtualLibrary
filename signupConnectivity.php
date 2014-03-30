<?php
 
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbms');
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
 
function NewUser()
{
	$rollno = $_POST['rollno'];
    $fullname = $_POST['name'];
    $userMail = $_POST['usermail'];
    $password =  $_POST['password'];
    //$repassword =  $_POST['repassword'];
	$contact =  $_POST['contactno'];
	$query = "INSERT INTO user (uid,uname,uemail,uphone,upwd) VALUES ('$rollno','$fullname','$userMail','$contact','$password')";
    $data = mysql_query ($query)or die("ROll no. already registered !!" . mysql_error());
    if($data)
    {
    echo "YOUR REGISTRATION IS COMPLETED...";
    }
}
 
function SignUp()
{
if(!empty($_POST['usermail']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
    $query = mysql_query("SELECT * FROM user WHERE uemail = '$_POST[usermail]'") or die(mysql_error());
 
    if(!$row = mysql_fetch_array($query) or die("Mail already registered!!"))
    {
        newuser();
    }
    else
    {
        echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
    }
}
}
if(isset($_POST['signmeup']))
{
    SignUp();
}
?>