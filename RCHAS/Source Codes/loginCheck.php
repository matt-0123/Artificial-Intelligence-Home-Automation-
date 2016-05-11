<?php

ob_start();
$hostname="localhost";
$username="root";
$password="root";
$database="bimodh_rchas_db";

      mysql_connect($hostname,$username,$password);
      mysql_select_db($database);
      $myusername=$_POST['uname'];
      $mypassword=$_POST['pswrd'];
      
	  
      // To protect MySQL injection (more detail about MySQL injection)
      $myusername = stripslashes($myusername);
      $mypassword = stripslashes($mypassword);
      $myusername = mysql_real_escape_string($myusername);
      $mypassword = mysql_real_escape_string($mypassword);	  
      $mysql = "SELECT * FROM newuserinfo WHERE loginname='$myusername' and password='$mypassword' ";      
      $result = mysql_query($mysql) or die("cannot execute query");      
      $count = mysql_num_rows($result);     	
      if($count==1)
      {
		session_start();
		$_SESSION['unm']=$myusername;		
		header("Location: Display.php");	
 	    echo "login fail";
      }      
      else
      {
		  header("Location: index.html");
		  echo "login fail";
      }
ob_flush();
?>
