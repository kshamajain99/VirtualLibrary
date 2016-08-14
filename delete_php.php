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
$bookid = $_POST['name']; 
$result = mysql_query("DELETE FROM books where bid = '$bookid' ") or die(mysql_error());
if($result){
echo 'Book deleted successfully!!' ;
echo " \nClick here to <a href= \"delete.php\">delete another book</a>..";
echo "\nClick here to <a href= \"dashboard.php\">dashboard</a>..";
}
else{
echo 'Book not deleted';
}
//mysqli_close($dbc) or die(mysql_error());
mysql_close();
?>