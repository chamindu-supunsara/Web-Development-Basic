<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

if(isset($_POST['send'])) {  

include ("connection.php");
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $days=$_POST['days'];
   $members=$_POST['members'];
   $vehicle=$_POST['vehicle'];
   $others=$_POST['others'];   
   
   if(!empty($errorMessage))
	  {
	    echo("<p>There was an error with your form:</p>\n");

	    echo("<ul>" . $errorMessage . "</ul>\n");

	  }
   else{//if(!empty($errorMessage))
    
	$sql = "INSERT INTO message". "(name,email,days,members,vehicle,others) ". "VALUES ('$name','$email','$days','$members','$vehicle','$others')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Message Send Successfully !!!\n";
			}	
     } 
   
}else {//if(isset($_POST['submit'])) {  

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>