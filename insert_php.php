<?php
session_start();
//$dbc= mysqli_connect('localhost','root','','dbms') or die('Error connecting to database');
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbms');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
echo 'Connected';
echo $_POST['name'];
$name= $_POST['name'];
$id = $_SESSION['uid'];
//$query = "INSERT INTO books(bname,uid,availability) VALUES ($name,$uid,1)" ;
//$result = mysqli_query($dbc, $query) or die('Error querying database') ;
$result = mysql_query("INSERT INTO books(bname,uid,availability) VALUES ('$name','$id',1)") or die(mysql_error());
if($result){
echo 'Book inserted successfully!!' ;
echo " \nClick here to <a href= \"insert.html\">insert another book</a>..";
echo "\nClick here to <a href= \"dashboard.php\">dashboard</a>..";
}
else{
echo 'Book not inserted';
}
//mysqli_close($dbc) or die(mysql_error());
mysql_close();
?>