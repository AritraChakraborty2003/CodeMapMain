<?php
   include "connDb.php";
   error_reporting(0);
  
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $sql = "SELECT * FROM registration";
    $result = mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($result);
    $id=$rows+1;

    $sql1 = "INSERT INTO `registration` (`S.No`, `Name`, `email`,`password`)
    VALUES ('$id','$name','$email','$password')";

    if (mysqli_query($conn, $sql1)) {
        echo "<script>location.href='login.php'</script>";
     }
     else   
       echo "<script>location.href='signup.php'</script>";
?>