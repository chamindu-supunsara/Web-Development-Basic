<?php
		session_start();
   
   if(session_destroy()) {
	   
	   echo '<h1>You have been successfully logout</h1>';
      
   }
		
		
?>