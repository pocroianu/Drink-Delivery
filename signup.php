<?php
      session_start();
      include 'database.php';

      if(isset($_POST['username'])){
           $user = $_POST['username'];
      }
      if(isset($_POST['password'])){
           $pass = $_POST['password'];
	  }
	
   
      $sql="INSERT INTO users(username,password) 
            VALUES('$user','$pass')";

      if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
?>