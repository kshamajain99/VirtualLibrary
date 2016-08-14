<!DOCTYPE html>
<html>
<head>
	<title>Delete-book</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="delete_style.css">
</head>
<body>
	
<div class="book" id="myimg">
			<input type="button" name="dashboard" onclick="location.href='dashboard.php'" value="dashboard" alt="dashboard" id="dashboardbutton" title="Dashboard" />
			<br><br><br><br><hr>
	<p><kbd>delete<b>Book</b></kbd></p>
</div>
	<section class="insertform cf">
		<form method="POST" action="delete_php.php">
			<ul>
				<li>
					Book id<input id="bookid" type="text" name="name" size="40"><br>
				</li>	
					<li>
					<br>
					<input id="button" type="submit" name="submit" value="Delete"><br><br>
					</li>
			</ul>
		</form>
				
	</section>
				
				<section class="details">
<div class="column_w210">
        

<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbms');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$id = $_SESSION['uid'];

$query = "SELECT * FROM books where uid= '$id' "; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML
echo "<th> Book id </th>" ;
echo "<th>Book name</th>" ;
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['bid'] . "</td><td>" . $row['bname'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

?>      
</div>
      
 		
		
	        <!--	<div class="header_03">[29-OCT-2024]</div>
   		      <div class="header_02"><a href="#">BOOK1</a></div>
                
                <p>contents of book1</p>-->

	</div>

</section>
</body>
</html>