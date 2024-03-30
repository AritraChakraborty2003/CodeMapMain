
<?php
 include "connDb.php";
 $sql1 = "SELECT * FROM registration";
 $response= array();
 $result1 = mysqli_query($conn, $sql1);
 if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $i=0;
  while($row = mysqli_fetch_assoc($result)) {
     $response[$i]['S.No']=$row['S.No'];
     $response[$i]['Name']=$row['S.No'];
     $response[$i]['mobile']=$row['mobile'];
     $i+=1;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<script>
    fetch('http://localhost/codemap/read.php')
    .then((response)=>{
        return response.json();
    })
    .then((data)=>{
        console.log(data['data'][0]);
    })
    </script>