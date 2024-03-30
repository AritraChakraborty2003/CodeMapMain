<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mainContainer">
        <div class="box">
            <p >Admin Panel</p>
            <form action="successAdmin.php" method="post" style="margin-top:4vmin">
                <input type="text" name="email" placeHolder="Enter email..."><br>
                <br>
                <input type="text" name="password1" placeHolder="Enter password..."><br>
                <br>
  <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .mainContainer{
        height:100vh;
        width:100vw;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .box{
        height:50vmin;
        width:70vmin;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        box-shadow:1px 2px 2px 1px;
    }
    p{
        font-weight:bold;
        color:black;
        font-size:7vmin;
    }
    input{
         width: 60vmin;
         
         padding:2vmin;
    }
    button{
        background-color:blue;
        color:white;
        padding: 1vmin;
    }
</style>