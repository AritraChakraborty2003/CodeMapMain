<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main-box">
        <div class="sub-mainbox">
            <button class="logout" type="button">Logout</button>
        </div>
        <div class="welcome-box">
            <span class="welcome">Welcome</span>
            <span class="user">UserName</span>

        </div>
        <div class="active-project">

        </div>
        <div class="service">

        </div>
    </div>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-x: hidden;
        font-family: "poppins";
    }

    .main-box {
        height: 100vh;
        width: 100vw;
        /* border: 2px solid ; */
    }

    .sub-mainbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: end;
        margin-bottom: 5px;
        margin-top: 5PX;
        margin-right: 5PX;

    }

    .logout {
        background: #949EFF;
        width: 18vmin;
        height: 5vmin;
        overflow-y: hidden;
        border-radius: 10px;
        font-size: 15px;
        color: white;
        font-weight: 30px;
    }

    .welcome-box {
        height: 50vmin;
        background: #949EFF;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;


    }

    .welcome {
        font-size: 15vmin;
        font-weight: 30px;
        color: white;

    }

    .user {
        font-size: 10vmin;
        font-weight: 30px;
        color: white;

    }

    .active-project {
        height: 45vmin;
        width: 225vmin;
        /* border: 2px solid ; */
        margin-top: 10vmin;
        background: whitesmoke;
        border-radius: 4vmin;
    }

    .service {
        height: 45vmin;
        width: 225vmin;
        /* border: 2px solid ; */
        margin-top: 10vmin;
        background: whitesmoke;
        border-radius: 4vmin;
    }

    @media(max-width:700px) {
        .logout {
            background: #949EFF;
            width: 20vmin;
            height: 6vmin;
            overflow-y: hidden;
            border-radius: 10px;
            font-size: 12px;
            color: white;
            font-weight: 30px;
        }

    }

    @media(min-width:700px) {
        .sub-mainbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: end;
        margin-bottom: 6px;
        margin-top: 7PX;
        margin-right: 5PX;

    }
        .logout {
            background: #949EFF;
            width: 15vmin;
            height: 4vmin;
            overflow-y: hidden;
            border-radius: 10px;
            font-size: 18px;
            color: white;
            font-weight: 30px;
        }


    }
</style>

</html>