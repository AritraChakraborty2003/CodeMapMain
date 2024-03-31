<?php
 include "connDb.php";
   $btitle=$_POST["btitle"];
   $bimage=$_POST["bimage"];
   $bdescr=$_POST["bdescr"];
   $sql = "SELECT * FROM blogs";
   $result = mysqli_query($conn, $sql);
   $rows=mysqli_num_rows($result);
   $id=$rows+1;

   $sql1 = "INSERT INTO `blogs` (`S.No`, `title`, `image`,`description`)
   VALUES ('$id','$btitle','$bimage','$bdescr')";

   if (mysqli_query($conn, $sql1)) {
       echo "<script>location.href='cms.php'</script>";
    }
    else   
      echo "<script>location.href='error.php'</script>";
?>
?>