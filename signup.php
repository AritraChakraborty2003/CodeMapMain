<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main-box">
        <div class="box">
            <div class="image-box">
                <div class="image-fit">
                    <div class="image-text">
                        <span class="heading-welcome"> Welcome to CodeMap <span>
                    </div>
                    <img class="image-login-1" src="static/login_image-removebg-preview.png" alt="">
                </div>
            </div>
            <div class="singup">
            <form method='post' action='dashboard.php'>
                <div class="singup-element">
                    <h1 class="heading-text">Login Your Account </h1>
                    
                    <span class="first-name ">Email</span>
                    <input class="first-input" name="email" id="email" type="email" style="padding:1vmin">
                    <span class="email">password</span>
                    <input class="email-box" type="text" name="password" style="padding:1vmin">
                    <div class="button-box">
                        <button class="singup-button" style="padding:1vmin">Sign Up</button>
                    </div>
                
                </div>
                </form>
                <div class="box-2">
                    <a class="already-account" href="singup_anish.php">Create a  new account </a>
                </div>
            </div>
        </div>
    </div>

</body>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins";
}

.image-text {
    display: flex;
    justify-content: center;
}

.image-text {
    font-size: 4vmin ;
    color: white;
    font-weight: bold; 
   position: relative;
   bottom : 15vmin ; 
   margin-top: 5vmin ;

}

.main-box {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;

}

.box {
    height: 80vmin;
    width: 170vmin;
    /* border: 2px solid ;  */
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.image-box {
    /* height: 80vmin; */
    width: 74.5vmin;
    /* border: 2px solid ;  */
    background: #949EFF;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-fit {
    height: 40vmin;
    width: 50vmin;
    /* border: 2px solid ; */
  
}

.image-login-1 {
    height: 40vmin;
    width: 58vmin;
    border-radius: 20px;
    position: relative;
    bottom : 3vmin ;
    right : 4vmin ;  

}

.singup {
    /* height: 80vmin; */
    width: 95vmin;
    border: 2px solid;
    background: #fff;
    border-radius: 25px;
    position: relative;
    right: 10px;
    bottom: 3px;

}

.singup-element {
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-top: 5vmin ;

}

.box-2 {
    display: flex;
    justify-content: center;
    position: relative;
    top: 27vmin;
    right: 3px;
}

.heading-text {
    position: relative;
    text-align: center;
    position: relative;
    top: 20px;
}

.first-name {
    position: relative;
    top: 3.5vmin;
    left: 10px;
    font-size: 20px;
    font-weight: 30px;
}

.first-input {
    position: relative;
    top: 5vmin;
    left: 10px;
    width: 83vmin;
    height: 38px;
    border-radius: 10px;
    border: 2px solid;
    color: black;
    background: transparent;
    font-size: 18px;
    font-weight: 30px;
}

.email {
    position: relative;
    top: 8vmin;
    left: 10px;
    font-size: 20px;
    font-weight: 30px;
}

.email-box {
    position: relative;
    top: 10vmin;
    left: 10px;
    width: 83vmin;
    height: 38px;
    border-radius: 10px;
    border: 2px solid;
    color: black;
    background: transparent;
    font-size: 18px;
    font-weight: 30px;
}



.singup-button {
    position: relative;
    top: 25vmin;
    left: 75px;
    background: #5551EE;
    height: 40px;
    width: 73vmin;
    border-radius: 15px;
    color: #fff;
    font-size: 20px;
    font-weight: 30px;
}

/* responsive css  */
@media(max-width:700px) {

    .image-box {
        height: 0vmin;
        width: 0vmin;
        /* border: 2px solid ;  */
        background: orange;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-login-1 {
        height: 0vmin;
        width: 0vmin;

    }

    .singup {
        height: 130vmin;
        width: 95vmin;
        border: 2px solid;
        background: #5551EE;
        border-radius: 25px;
        position: relative;
        right: 0px;
        bottom: 30vmin;
        display: flex;
        flex-wrap: wrap;

    }

    .heading-text {
        position: relative;
        text-align: center;
        position: relative;
        top: 0px;
        bottom: 3px;
        color: #fff;
        font : 5vmin ; 
    }

    .first-name {
        position: relative;
        top: 3.5vmin;
        left: 10px;
        font-size: 20px;
        font-weight: 30px;
        color: #fff;
    }

    .first-input {
        position: relative;
        top: 5vmin;
        left: 10px;
        width: 83vmin;
        height: 38px;
        border-radius: 10px;
        border: 2px solid;
        color: black;
        background: transparent;
        font-size: 18px;
        font-weight: 30px;
        background: #fff;
        box-shadow: 2px 4px;
    }

    .email {
        position: relative;
        top: 8vmin;
        left: 10px;
        font-size: 20px;
        font-weight: 30px;
        color: #fff;
    }

    .email-box {
        position: relative;
        top: 10vmin;
        left: 10px;
        width: 83vmin;
        height: 38px;
        border-radius: 10px;
        border: 2px solid;
        color: black;
        background: transparent;
        font-size: 18px;
        font-weight: 30px;
        background: white;
        box-shadow: 2px 4px;
    }

    .button-box {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .singup-button {
        position: relative;
        top: 26vmin;
        left: 10px;
        background: rgb(255, 255, 255);
        height: 40px;
        width: 55vmin;
        border-radius: 15px;
        color: black;
        font-size: 20px;
        font-weight: 30px;
        box-shadow: 2px 4px;
    }

    .box-2 {
        display: flex;
        justify-content: center;
        position: relative;
        top: 20vmin;
        left: 75px;

    }

    .already-account {
        color: #fff;
        text-decoration: none;

    }
}
@media(max-width:1340px) {
    .image-box {
    height: 0vmin;
    width: 0vmin;
    /* border: 2px solid ;  */
    background: #949EFF;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.image-fit {
    height: 0vmin;
    width: 0vmin;
    /* border: 2px solid ; */
  
}

}
</style>
</html>