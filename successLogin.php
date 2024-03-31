<?php
include 'connDB.php' ;
if(!isset($_SESSION['name']))
   $password=$_POST["password"];
   $email=$_POST["email"];
   $sql1 = "SELECT * FROM registration WHERE email='$email'";
  
   $result1 = mysqli_query($conn, $sql1);
   if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
    
       if($row['password']!=$password)
            echo "<script>location.href='login.php'</script>";
       else
            session_start();
            $_SESSION['name']=$row["name"];
            echo "<script>location.href='dashboard.php'</script>";

    }
}
   ?>