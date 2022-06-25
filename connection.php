<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php $dbhost = 'localhost';
  $dbuser = 'root'; 
  $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);//It opens a connection to a MySQLi Server
   
    if(!$conn ) { 
   die('Could not connect: ' . mysqli_error($conn));
    } echo '';
	// selecting data base
	 
	 $db= mysqli_select_db($conn,'website');
	
	if(!$db){
		
	 echo 'Select database first ';
	
	}else
	 echo '';	
?> 
</body>
</html>
