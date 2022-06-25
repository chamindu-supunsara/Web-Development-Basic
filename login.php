<?php
session_start();
$message="";
if(isset($_POST['submit'])) {
	
 include 'connection.php';
 
 $email=$_POST["email"];
 $password=$_POST["password"];


 $sql="SELECT * FROM regform WHERE email='$email' and password='$password'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result);

   $_SESSION['user']=$row['email'];
   
	if(mysqli_num_rows($result) == 1) {
         
       	header("location: moreplan.php");
      }else 
	  {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="Stylesheet" href="login.css"
</head>

<body>
	<div class="header">
    	<ul>
        	<li><a href="MainPage.html"><b>Home</a></li>
            <li><a href="plan.html">Trip Plans</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="login.php"><b>Login</a></li>
         </ul>
      </div>
      <div class="wrapper">
      	<div class="title">
        	Log In Here
       	</div>
      <form name="Login" action="" method="post">
      <div class="form">
         <div class="input_field">
         <span class="details">Email</span>
        	<input name="email" type="text" required class="input" id="email" placeholder="Email" title="email">
         </div>
         <div class="input_field">
         <span class="details">Password</span>
        	<input name="password" type="password" required class="input" id="password" placeholder="Password">
         </div>
         <input name="submit" type="submit" class="submit" id="submit" value="submit">
        </form>
         <div class="btn2"><a href="register.html" id="btn2"> First Register Here </a></div>
         </div>
</div>
</body>
</html>