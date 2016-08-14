<?php
 session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyProfile</title>
<meta name="keywords" content="My profile page of virtual library" />
<meta name="description" content="Insert,Update,Delete books from my account of virtual library." />

<link href="dashboard_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">

function clearText(field){
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
<div class="a1" id="myimgs">
<form action="logout.php" method="post">
<input type="submit" name="LOGOUT"  value="logout" alt="logout" id="logoutbutton" title="Logout" />
</form>

<p>my<b>Profile</b></p>
<p id="hellomsg" align="left">
Hello
<?php echo $_SESSION['uname'];?>
!
</p>
<hr>

<div id="search_section">
<form action="search_php.php" method="post">	
   <input type="text" value="Enter name of the book.." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
 </form>
</div> 
</div>
<hr>


<section class="details">

        	<div class="header_01">
            	my<b>Books</b>
<h6>
<font color="black">
				<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbms');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$id = $_SESSION['uid'];

$query = "SELECT * FROM books where uid= '$id'	"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML
echo "<th> Book id </th>" ;
echo "<th>Book name</th>" ;
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['bid'] . "</td><td>" . $row['bname'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

?>
</font>
</h6> 
 </div>
<div class="column_w210">
        
            
			
	        <!--	<div class="header_03">[29-OCT-2024]</div>
   		      <div class="header_02"><a href="#">BOOK1</a></div>
                
                <p>contents of book1</p>-->

	</div>
<div class="a2">
<ul>
<br>
<br>
<br>
<br>
<li>
<form name="options" action="books.php" method="post">
<input type="submit" name="Books" value="Books" alt="Books" id="button1" title="Books" />
</form>
</li>
<li>
<form name="options" action='insert.html' method="post">
<input type="submit" name="Insert" value="Insert" alt="Insert" id="button1" title="Insert" />
</form>
</li>
<li>
<form name="options" action='delete.php' method="post">
<input type="submit" name="Delete" value="Delete" alt="Delete" id="button1" title="Delete" />
 </form>
</li>
</ul>
</div>		

</section>
</html>