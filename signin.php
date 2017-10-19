<?php
   
   session_start();

	
   include 'database.php';

      if(isset($_POST['username'])){
           $user = $_POST['username'];
      }
      if(isset($_POST['password'])){
           $pass = $_POST['password'];
	  }

   $sql="SELECT * FROM users WHERE username='$user' AND password='$pass' ";
   $result=$connection->query($sql);
   
   $line=$result->fetch_assoc();
   
   if(!$line){
	   echo "Incorrect user and pass";
	   header("Location:main.php");
   }
   else {$_SESSION['id']=$line['id'];
   
   header("Location:logat.php");}
   
?>