<?php    
    session_start();
    if(!isset($_SESSION["name"])){
        echo "<script>location.href='admin.php'</script>";
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

<form action="logouts.php" method='post'>
    <button type="submit">Logout</button>
</form>
    
</body>
</html>