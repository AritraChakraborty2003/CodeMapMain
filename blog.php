<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="headerText" style="text-align:center">
        Blogs-Page
    </div>
    <div class="main-box">
        <div class="main-box-sub" id="main-box-sub">
        
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
    .headerText{
         font-size:10vmin;
    }
    .imageBlog{

         max-width:100%;
         max-height:100%;
         object-fit:contain;
    }
    .main-box {
        /* height: 100vh; */
        width: 100vw;
        margin-top:10vmin;
    
    }
    .imageHolder{
        height:25vmin;
        width:35vmin;
   
    }
    .main-box-sub{
        display: flex; 
        justify-content: center ;
        flex-wrap: wrap ;
    }

    .sub-main-box {
        width: 70vmin;
      

    }
    .blog{
            box-shadow:1px 2px 3px 4px;
            padding:2vmin;
        }
    .box-mian-1 {
        height: 60vmin;
        width: 80vmin;
    }
    .title{
        margin-top:3vmin;
    }
    .description{
        margin-top:1vmin;
    }
</style>

</html>

<script>
    fetch("http://localhost/CodeMapMain/userAPI.php")
    .then((response) => { return response.json(); })
    .then((data)=>{
        for (var i = data['data'].length-1; i>=0; i--) {
           //this is code
           document.getElementById('main-box-sub').innerHTML+=
           `<div class="sub-main-box">
            <div class="box-mian-1" style="display:flex;flex-direction:column;justify-content:center;align-items:center">
                <div class="blog blog1">
                    <div class="imageHolder" style="overflow:hidden;display:flex;justify-content:center">
                        <img src=${data["data"][i]["image"]} class="imageBlog">
                    </div>
                    <div class="title">
                        <div class="title" id="titleblog" style="text-align:center">${data["data"][i]["title"]} </div>
                    </div>
                    <div class="description">    
                        <div class="link" id="linkblog" style="text-align:center">link is: ${data["data"][i]["description"]}</div>
                        
                    </div>
                </div>
            </div>
        </div>
       `
        }
        console.log(data);
    })
</script>