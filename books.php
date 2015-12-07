<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Books</title>
<meta name="keywords" content="My profile page of virtual library" />
<meta name="description" content="Insert,Update,Delete books from my account of virtual library." />

<link href="books_css.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">

function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
<div class="a1 cf" id="myimgs">
<form action="#" method="get">
<div class="b">
<ul>
<li>
<input type="button" name="dashboard" onclick="location.href='dashboard.php'" value="dashboard" alt="dashboard" id="logoutbutton" title="Back to Dashboard" />
</li>
<li>
<input type="button" name="LOGOUT" onclick="location.href='logout.php'" value="logout" alt="logout" id="logoutbutton" title="Logout" />
</li>
</ul>
</div>
<p>books<b>Results</b>....</p>
 </form>
<hr>
<div id="search_section">
<form action="search_php.php" method="post">
	
   <input type="text" value="Enter name of the book.." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
 </form>
</div>


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

$query = "SELECT * FROM books "; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML
echo "<th> Book id </th>" ;
echo "<th>Book name</th>" ;
echo "<th>user name</th>" ;
echo "<th>user mail id</th>" ;
echo "<th>user phone no.</th>" ;
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results

$id1 = $row['uid'];
$query1 = "SELECT * FROM user where  uid='$id1'";  //You don't need a ; like you do in SQL
$result1 = mysql_query($query1);
if (!$result1) {
    die('Invalid query: ' . mysql_error());
}

$row1 = mysql_fetch_array($result1);
echo "<tr><td>" . $row['bid'] . "</td><td>" . $row['bname'] ."</td><td>" . $row1['uname'] . "</td><td>" . $row1['uemail'] . "</td><td>" . $row1['uphone'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

?>      
</div>
      
 		
		
	        <!--	<div class="header_03">[29-OCT-2024]</div>
   		      <div class="header_02"><a href="#">BOOK1</a></div>
                
                <p>contents of book1</p>-->

	</div>

</section>
</html>