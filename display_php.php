<?php
echo "<style> body {background: url('http://subtlepatterns.com/patterns/wood_pattern.png');}</style>";
//echo "<body id="body-color">";
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbms');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
echo 'Connected';
$id = $_SESSION['uid'];

$query = "SELECT * FROM books "; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['bid'] . "</td><td>" . $row['bname'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

?>