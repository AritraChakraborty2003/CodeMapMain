<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main-box">
        <div class="sub-box">
            <div class="heading-box">
                <h1 class="main-head">CMS</h1>
            </div>
            <div class="sub-text-box">
                <span class="sub-span">(content management system)</span>
            </div>
        </div>
        <div class="main-content-box">
            <div class="content-box">
                <div class="blog-head">
                <h1 class="content-heading-1">BLOG Upload</h1>
                </div>
            <form method="post" action="blogsSuccess.php">
                <div class="content-box-element">
                 <div class="sub-content-element">
                    <span class="content-text">Blog Title</span>
                    <input class="content-title-holder" type="text" name="btitle">
                    <span class="blog-image">Image Url </span>
                    <input class="image-url" type="text" name="bimage">
                    <span class="decsription">Description</span>
                    <input class="decription-box" type="text" name="bdescr">
                    <div class="button-box-1">
                        <button class="sumbit-button" type="submit">Upload </button>
                    </div>
                 </div>
                </div>

</form>
            </div>
        </div>
        <div class="main-content-box-2">
            <div class="content-box">
                <div class="blog-head">
                <h1 class="content-heading-1">Project Upload</h1>
            </div>
                <div class="content-box-element">
                    <div class="content-box-element">
                        <div class="sub-content-element">
                           <span class="content-text">Project Title</span>
                           <input class="content-title-holder" type="text">
                           <span class="blog-image">Project Image</span>
                           <input class="image-url" type="text">

                           <span class="blog-image1">Project Url</span>
                           <input class="image-url" type="text">
                           <span class="decsription">Description</span>
                           <input class="decription-box" type="text">
                           <div class="button-box-1">
                               <button class="sumbit-button">Upload </button>
                           </div>
                        </div>
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
        overflow-x: hidden;
    }

    .main-box {
        width: 100vw;
        border: 2px solid;
    }

    .sub-box {
        width: 100vw;
        /* border: 2px solid ;  */
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
        background: #949EFF;
        border-radius: 3px;
    }

    .heading-box {
        font-size: 10vmin;
        color: white;

    }

    .sub-span {
        color: white;
        font-size: 4vmin;
        font-weight: bold;
    }

    .main-content-box {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .content-box {
        /* height: 70vmin; */
        width: 180vmin;
        /* border: 2px solid  ; */
        margin-top: 5vmin;
        margin-bottom: 10vmin;
        background: whitesmoke;
        border-radius: 10px;
        overflow-y: hidden ;
    }

    .main-content-box-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .content-box-element {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;

    }

    .sumbit-button {
        margin-top: 35vmin;
        width: 100vmin;
        height: 5vmin;
        border-radius: 10px;
        background: #949EFF;
        color: white;
        font-size: 20px;
        font-weight: 30px;
        position: relative;
        bottom : 10vmin ; 

    }

    .decription-box {
        position: relative;
        top: 13vmin; 
        height: 20vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
    }
    .sub-content-element{
        display: flex;
        flex-direction: column;
    }
    .decsription{
        position: relative;
        top : 11vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .image-url {
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 8vmin  ; 
        
    }
    .blog-image1{
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 10vmin  ;
    }
    .blog-image{
        position: relative;
        top : 6vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .content-title-holder{
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 4vmin  ; 
        

    }
    .content-text{
        position: relative;
        top : 3vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .blog-head{
        display: flex;
        justify-content: center;
        flex-wrap: wrap ;
    }
    .content-heading-1{
        position: relative;
        /* left : 75vmin ;  */
        color:  black ; 
    }
  /* responsive code */
  @media(max-width:700px) {

    .sumbit-button {
        margin-top: 35vmin;
        width: 70vmin;
        height: 10vmin;
        border-radius: 10px;
        background: #949EFF;
        color: white;
        font-size: 20px;
        font-weight: 30px;
        position: relative;
        bottom : 15vmin ; 

    }

    .decription-box {
        position: relative;
        top: 13vmin; 
        height: 20vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
    }
    .sub-content-element{
        display: flex;
        flex-direction: column;
    }
    .decsription{
        position: relative;
        top : 11vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .image-url {
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 8vmin  ; 
        
    }
    .blog-image{
        position: relative;
        top : 6vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .content-title-holder{
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 4vmin  ; 
        

    }
    .content-text{
        position: relative;
        top : 3vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .blog-head{
        display: flex;
        justify-content: center;
        flex-wrap: wrap ;
    }
    .content-heading-1{
        position: relative;
        /* left : 75vmin ;  */
        color:  black ; 
    }
  }
  @media(min-width:700px){

 .sumbit-button {
        margin-top: 35vmin;
        width: 60vmin;
        height: 5vmin;
        border-radius: 10px;
        background: #949EFF;
        color: white;
        font-size: 20px;
        font-weight: 30px;
        position: relative;
        bottom : 15vmin ; 

    }

    .decription-box {
        position: relative;
        top: 13vmin; 
        height: 20vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
    }
    .sub-content-element{
        display: flex;
        flex-direction: column;
    }
    .decsription{
        position: relative;
        top : 11vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .image-url {
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 8vmin  ; 
        
    }
    .blog-image{
        position: relative;
        top : 6vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .content-title-holder{
        height: 7vmin ;
        border-radius: 10px ;
        color: black ;
        font-weight: 30px ;
        font-size: 15px ;
        position:  relative;
        top : 4vmin  ; 
        

    }
    .content-text{
        position: relative;
        top : 3vmin; 
        font-size: 18px ;
        color: black;
        font-weight: 35px ;
    }
    .blog-head{
        display: flex;
        justify-content: center;
        flex-wrap: wrap ;
    }
    .content-heading-1{
        position: relative;
        /* left : 75vmin ;  */
        color:  black ; 
    }

  }
</style>

</html>