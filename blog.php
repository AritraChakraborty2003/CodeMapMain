<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main-box">
        <div class="main-box-sub">
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
        <div class="sub-main-box">
            <div class="box-mian-1">

            </div>
        </div>
      </div>
    </div>

</body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-x: hidden ;
    }

    .main-box {
        /* height: 100vh; */
        width: 100vw;
        border: 2px solid;
    }
    .main-box-sub{
        display: flex; 
        justify-content: center ;
        flex-wrap: wrap ;
    }

    .sub-main-box {
        width: 70vmin;
        border: 2px solid;

    }

    .box-mian-1 {
        height: 40vmin;
        width: 80vmin;
    }
</style>

</html>