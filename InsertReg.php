<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

if(isset($_POST['submit'])) {  

include ("connection.php");
  
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $country=$_POST['country'];
   $phonenumber=$_POST['phonenumber'];
   $email=$_POST['email'];
   $password=$_POST['password'];   
   
   if(!empty($errorMessage))
	  {
	    echo("<p>There was an error with your form:</p>\n");

	    echo("<ul>" . $errorMessage . "</ul>\n");

	  }
   else{//if(!empty($errorMessage))
    
	$sql = "INSERT INTO regform". "(firstname,lastname,country,phonenumber,email,password) ". "VALUES ('$firstname','$lastname','$country','$phonenumber','$email','$password')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Registration Successfully !!!\n";
			}	
     } 
   
}else {//if(isset($_POST['submit'])) {  

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>