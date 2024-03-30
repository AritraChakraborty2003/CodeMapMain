<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!---navBar Section-->
    <div class="navBar">
        <div class="logoSection">
            <div class="logoHolder" style="margin-top:1vmin">

                <img src="static/codemap-removebg-preview.png" alt="logo" srcset="" class="imgBanner">
            </div>
        </div>
        <div class="navIconsSection">

            <div class="nav-icons">
                <ul>
                    <li><a  href="#about" style="color: black;text-decoration: none;">About-us</a></li>
                    <li><a  href="#services" style="color: black;text-decoration: none;">Services</a></li>
                    <li><a  href="login" style="color: black;text-decoration: none;">Login/Signup</a></li>
                    <li><a  href="doctor_1" style="color: black;text-decoration: none;">Blogs</a></li>
                    <li><a  href="hospitals" style="color: black;text-decoration: none;">Projects</a></li>
                    <li><a  href="admin.php" style="color: black;text-decoration: none;">admin</a></li>
                </ul>
            </div>

            <div class="hamSection" id="HamBar">
               <img src="static/hamburger.png" alt="Hamburger Icon" srcset="" height="25" width="25">
            </div>

        </div>
    </div>

    <!---HamBurger NavBar Area-->
    <div class="navHam" id="navHam">
       <ul>
        <li>About-us</li>
        <li>Service</li>
        <li>Login/Signup</li>
        <li>Blogs</li>
        <li>Projects</li>
       </ul>
    </div>
    <!------->

    <!---Banner Part-->
    <div class="banner">
        <div class="bannerImage">
            <div class="imageBox ">
                <img src="static/coder.png" alt="bannerImage" class="imgBanner">
            </div>
        </div>
        <div class="bannerText">
            <div class="bannerTextDiv">
                <p class="bannerTitle">Code<span style="color:orange">Map</span></p>
                <p class="bannerSlogan">( Where ideas <span style="color:orange">tranform</span> into <span style="color:orange">innovations</span> ) </p>
            </div>
        </div>
    </div>
    <!----->

    <!---About Section----->
    <div class="about">
        <div class="aboutHeader">
            <p class="aboutHeaderText">ABOUT US</p>
        </div>


        <div class="aboutContent">
            <div class="aboutImage">
            <div class="aboutImageHolder">
                <img src="static/codemap-removebg-preview.png" alt="logo" srcset="" class="imgBanner">
            </div>
            </div>
           <div class="aboutTextHolder">
                <p class="aboutText">
                    Elderly is a company which focus on creating an ecosystem for the elderly with connection for their children and elderly patients.
                    We come up with a slogan connecting elderly with youth.From IOT based healthcare monitoring system,to mental health support,
                    connecting with ambulances and hospitals  as well as using AI to predict the health situation of elderly.The prescription management system
                    ,health reports and prescription alert.
                </p>
           </div>
        </div>
    </div>

    <!---->


    <!--Services Section-->
    <div class="services">
        <div class="servicesHeader">
            <p class="servicesHeaderText">Services</p>
        </div>
        <div class="servicesHolder">
            <div class="serviceBox1">
                <div class="imageHolder3">
                    <img src="static/webD.png" alt="" srcset="">
                   
                </div>
                <p class="textTitle" style="text-align:center">Software Consulting</p>
            </div>
            <div class="serviceBox1">
            <div class="imageHolder3">
                    <img src="static/webDevJob.png" alt="" srcset="">
                </div>
                <p class="textTitle" style="text-align:center">Website and mobile app development</p>
            </div>
            <div class="serviceBox1">
            <div class="imageHolder3">
                    <img src="static/coder1.avif" alt="" srcset="">
                </div>
                <p class="textTitle" style="text-align:center">Coding Community</p>
            </div>
            <div class="serviceBox1">
            <div class="imageHolder3">
                    <img src="static/blogs.png" alt="" srcset="">
                </div>
                <p class="textTitle" style="text-align:center">Blogs</p>
            
            </div>
          
        </div>
</div>

    <!------->


    <!--Footer Section-->


    <div class="footer">
        <div class="logoIcon">

            <div class="logoHolder1">

                <img src="static/logo.jpg" alt="logo" srcset="" class="Logo">
            </div>
        </div>
        <div class="location">

            <p class="dataAddress">Address: Plot 19/20,IIMT College Of Engineering,<br>R&D Office and Incubation Cell, Greater Noida,<br>20310</p>
            <p class="dataAddress">Email: aritra.chakraborty203@gmail.com</p>
            <p class="dataAddress">Contact No: 7585824862 , 9382993983</p>
            <p class="dataAddress">Propreiter: Anish Gupta</p>
            <p class="dataAddress">Social links:
                <ul class="socialLinks" style="margin-top: 3vmin;">
                    <li>
                        <img src="static/insta-removebg-preview.png" alt="instagram" srcset="" height="40" width="46">
                    </li>
                    <li>
                        <img src="static/facebook.png" alt="instagram" srcset="" height="35" width="35">
                    </li>
                    <li>
                        <img src="static/linkedin-removebg-preview.png" alt="instagram" srcset="" height="35" width="35">
                    </li>
                    <li> <img src="static/twitter.png" alt="instagram" srcset="" height="35" width="35"></li>
                </ul>

            </p>
        </div>
    </div>

    <!----->
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .servicesHolder{
        row-gap:5.5vmin;
    }
    .serviceBox1{
        width:70vmin;
      
    }
    .Servicecontainer{
        display:flex;
        justify-content:center;
        align-items:center;
        width:100vw;

    }
    .servicesHolder{
        width:100vw;
        
       
    }
    .imageHolder3{
        height:50vmin;
        width:70vmin;
    }
    .banner{
        width:100vw;
        display: flex;
        justify-content: center;
    
        background-color:#606AC7;
        flex-wrap: wrap;

    }
    .border{
         border: 1px solid black;
    }
    .imageHolder3{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .bannerImage{
        width:100vmin;
        display: flex; justify-content: center;
        align-items: center;
    }
/*New Code*/
/*Small Device*/
@media(max-width:700px){
    *{
        overflow-x: hidden;
    }
    .imageBox {
      display:flex;
      justify-content:center;
      align-items:center;
    }
    .hamSection{
       width:56vmin;
       display: flex;
       justify-content: flex-end;
       padding-right: 3vmin;
    }
    .banner{
        width:100vw;
        display: flex;
        justify-content: center;
    
        flex-wrap: wrap;
        padding: 10vmin;
        

    }
    .bannerText{
        width:90vmin; 
        display: flex; justify-content: center; 
        margin-top: 10vmin;
        
    }
    .bannerTitle{
        font-weight: bold;
        font-size: 19vmin;
        color: white;
    }
    .bannerSlogan{
        font-size: 4.75vmin;
        color: white;
    }
    .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 2.75vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .aboutHeader{
     
        height: 13vmin;
        display: flex;
        justify-content: center;
        align-items: center;
     
        margin-top: 3.5vmin;
    }
    .aboutHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeader{
        display: flex;
        width: 100vw;
        justify-content: center;
        align-items: center;
    }
    .aboutContent{
 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .aboutImage,.aboutText{
        

        width: 100vmin;
    }
    .nav-icons{
    display: none;
    }

    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     
       
       width: 100vw;
       padding-left: 1vmin;
       padding-right: 1vmin;
       
   }
   .about{
    margin-top: 5vmin;
   }
   .aboutImage{
    margin-top: 4vmin;
   }
   
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
   .aboutTextHolder{

       font-size: 4vmin;
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
    display: flex; justify-content: center; align-items: center;
       height: 60vmin;
       width: 75vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:100vw;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
   
      background-color:#8CC3EB;
      width: 100vw;
      flex-wrap: wrap;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
    margin-left:-5vmin;
       width: 100vmin;height:100%;display: flex;align-items: center;
   }
   .logoHolder1{
    margin-top: 3vmin;
       height:24vmin;width: 60vmin;
       
   }
   .location p{
       margin-top: 2vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 300;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
      
   .socialLinks li{
      display: block;
      list-style: none;
      margin-left: 3vmin;
   }
   .navHam{margin-top: -1.75vmin;}
   .navHam  ul li{
       margin-top: 2.5vmin;
       margin-left: 2vmin;
       padding-bottom: 3vmin;
       border-bottom: 1px solid grey;
   }
   .imgBanner{
     height:65vmin;
     width:80vmin;
   }
   .logoHolder{
    margin-left:-9vmin;
   }
   .services{
       width:100vw;
       margin-top: 3vmin;
   }
}
/*Tab Screens*/
@media(min-width:701px) and (max-width:900px){
   
  .aboutImageHolder{
    display: flex; justify-content: center; align-items: center;
       height: 90vmin;
       width: 90vmin;
   }
  .hamSection{
       width:56vmin;
       display: flex;
       justify-content: flex-end;
       padding-right: 3vmin;
    }
    .navHam{margin-top: -1.75vmin;}
   .navHam  ul li{
       margin-top: 1.75vmin;
       margin-left: 2vmin;
       list-style: none;
       font-size: 3vmin;
       padding-bottom: 3vmin;
       border-bottom: 1px solid skyblue;
   }
    .bannerImage{
        width:90vmin;
        display: flex; justify-content: center;
        align-items: center;
    }

    .banner{
        width:100vw;
        display: flex;
        justify-content: center;
    
        flex-wrap: wrap;
        padding-bottom: 5vmin;

    }
  .bannerText{
        width:90vmin; 
        display: flex; justify-content: center; 
        margin-top: 5vmin;
        
    }
    .bannerTitle{
        font-weight: bold;
        font-size: 15vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 3.5vmin;
    }
    .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 2.75vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .aboutHeader{
 
        height: 13vmin;
        display: flex;
        justify-content: center;
        align-items: center;
     
        margin-top: 3.5vmin;
    }
    .aboutHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeader{
        display: flex;
        width: 100vw;
        justify-content: center;
        align-items: center;
    }
    .aboutContent{
 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .aboutImage,.aboutText{
      
        width: 120vmin;
    }
    .nav-icons{
        display: none;
    }
    .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 2.75vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .aboutHeader{
     
        height: 13vmin;
        display: flex;
        justify-content: center;
        align-items: center;
     
        margin-top: 3.5vmin;
    }
    .aboutHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 7vmin;
        font-style: normal;
    }
    .servicesHeader{
        display: flex;
        width: 100vw;
        justify-content: center;
        align-items: center;
    }
    .aboutContent{
 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .aboutImage,.aboutText{
        

        width: 100vmin;
    }
    .nav-icons{
    display: none;
    }

    .aboutHeader{
       

       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     
       
       width: 100vw;
       padding-left: 1vmin;
       padding-right: 1vmin;
       
   }
   .about{
    margin-top: 5vmin;
   }
   .aboutImage{
    margin-top: 4vmin;
   }
   
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
   .aboutTextHolder{

       font-size: 4vmin;
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       height: 45vmin;
       width: 85vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
   
      background-color:#8CC3EB;
      width: 100vw;
      flex-wrap: wrap;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder{
    margin-left:-9vmin;
   }
   .logoHolder1{
    margin-top: 3vmin;
       height:24vmin;width: 60vmin;
       
   }
 
   .location p{
       margin-top: 2vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 300;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
      
   .socialLinks li{
      display: block;

      list-style: none;
      margin-left: 3vmin;
   }
   .navHam  ul li{
       margin-top: 2.35vmin;
       margin-left: 2vmin;
       padding-bottom: 2vmin;
       border-bottom: 1px solid grey;
   }
   .imgBanner{
     height:55vmin;
     width:70vmin;
   }
   .banner{
     padding:5vmin;
   }
   .services{
       width:100vw;
       margin-top: 3vmin;
   }

}
/*---- End for mobile and tab screens ---*/

/*--- For Mini and medium Laptops(13.5eg: macbook-air) */
@media(min-width:901px) and (max-width:1280px) {
   
    @media(max-height:770px) {
              /*For Lenovo Thinkpad(small X390)*/
    body{
      overflow-x:hidden;
    }
    .bannerSlogan{
        font-size:5vmin;
    }
    
              .bannerImage{
        width: 59vmin;
     
     }
    .bannerText{
        width: 60vmin;
    }
    .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:60vmin;
       width:60vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size:18vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 3.5vmin;
    }
    .bannerTextDiv{
        height:25vmin;
        width:80vmin;
        margin-top: 17vmin;
        color: white;
    }
    .bannerImage{
        width: 70vmin;
     
     }
    .bannerText{
        width: 75vmin;
    }
    .banner{
      padding: 7vmin;
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
    @media (min-height: 771px) {
      /*For macbook(13.5 inch screen)*/
      .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:60vmin;
       width:60vmin;
    }
      
    .bannerImage{
        width: 70vmin;
     
     }
    .bannerText{
        width: 70vmin;
    }
      .bannerTitle {
        font-weight: bold;
        font-size: 4vmin;
        color: white;
      }
      .bannerSlogan {
        color: white;
     
      }
      
      .bannerTextDiv {
        height: 25vmin;
        width: 40vmin;
        margin-top: 10vmin;
        color: white;
      }
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     

       width: 100vmin;
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
    .hamSection{
      display: none;
    }
    .aboutImage{      margin-top: 2vmin;}
   .aboutTextHolder{

       font-size: 4vmin;
 
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       height: 30vmin;
       width: 75vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .hamSection{display: none;}
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
    
       height:24vmin;width: 65vmin;
       
   }
   .location p{
       margin-top: 2.45vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .aboutImageHolder{
       display:flex;justify-content:center;
       align-items:center;
       height: 70vmin;
       width: 90vmin;
   }
   .imgBanner{
     height:55vmin;
     width:70vmin;
  
   }
   .services{
       width:100vw;
       margin-top: 3vmin;
   }
      
    }
    @media(min-height:771px) {
          /*For macbook(13.5 inch screen)*/
          .imgBanner{
     height:55vmin;
     width:70vmin;
   }
      
          .hamSection{
      display: none;
    }
          .bannerImage{
        width: 55vmin;
     }
    .bannerText{
        width: 55vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size:15vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 3.5vmin;
    }
    .bannerTextDiv{
        height:25vmin;
        width:40vmin;
        margin-top: 23vmin;
        color: white;
    }
    .navBar{
        display: flex;
        justify-content: center;
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     

       width: 100vmin;
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
    .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:35vmin;
       width:35vmin;
    }
    .aboutImage{      margin-top: 2vmin;}
   .aboutTextHolder{

       font-size: 4vmin;
 
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       height: 30vmin;
       width: 75vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:100vw;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
    
       height:24vmin;width: 65vmin;
       
   }
   .location p{
       margin-top: 2.45vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
      
    }
   
    }

/*For macbook(13.5inch eg:macbook-air)*/
/*--- For Mini and medium Laptops(14inch eg: macbook-air) */
@media(min-width:1281px) and (max-width:1440px){
   
    .bannerImage{
        width: 80vmin;
    }
    .bannerText{
        width: 80vmin;
    }
    .imageBox{
        width:90vmin;
        height: 55vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size: 17vmin;
    }
    .bannerSlogan{
        font-size: 3.5vmin;
    }
    .imgBanner{
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    .bannerTextDiv{
        height:25vmin;
        width:70vmin;
        margin-top: 19vmin;
        color: white;
    }
    .navBar{
        display: flex;
        justify-content: center;
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     

       width: 100vmin;
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
    .aboutImage{      margin-top: 2vmin;}
   .aboutTextHolder{

       font-size: 4vmin;
 
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       height: 30vmin;
       width: 75vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .hamSection{
    display: none;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
    
       height:24vmin;width: 65vmin;
       
   }
   .aboutImageHolder{
       display:flex;justify-content:center;
       align-items:center;
       height: 45vmin;
       width: 75vmin;
   }
   .location p{
       margin-top: 2.45vmin;
   }

   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }

    .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:65vmin;
       width:65vmin;
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
 
    
}

/*-----End for macbook-air sized laptops(14 inch) ----*/

/*--- For Large laptop screens(15.6inch)(Ex:- HP-Omen)---*/
@media(min-width:1441px) and (max-width:1727px){
  .hamSection{
    display: none;
  }
  .about{
    margin-top: 4vmin;
  }
    body{
        overflow-x: hidden;
    }
    .banner{
        height: 75vmin;
    }
    .bannerImage{
        width: 87vmin;
     }
    .bannerText{
        width: 87vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size:17vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 4vmin;
    }
    .bannerTextDiv{
        height:25vmin;
        width:70vmin;
        margin-top: 23vmin;
        color: white;
    }
    .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .aboutHeader{
       
        height: 13vmin;
        display: flex;
        justify-content: center;
        align-items: center;
     
        margin-top: 3.5vmin;
    }
    .aboutHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 10vmin;
        font-style: normal;
    }
    .servicesHeaderText{
        font-family: "Mukta";
        font-weight: 800;
        font-size: 10vmin;
        font-style: normal;
    }
    .servicesHeader{
        display: flex;
        width: 100vw;
        justify-content: center;
        align-items: center;
    }
    .aboutContent{
 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .aboutImage,.aboutTextHolder{
      
        height: 71vmin;
        width: 100vmin;
    }
     .aboutText{
        
        font-family: "Mukta";
        font-weight: 300;
        font-size: 4.35vmin;
        font-style: normal;
     
     }
    .aboutTextHolder{

        font-size: 4vmin;
    }
    .aboutImage{display: flex; justify-content: center; align-items: center;}
    .aboutImageHolder{
       display:flex; justify-content:center;
       align-items:center;
        height: 45vmin;
        width: 75vmin;
    }
    .servicesHolder{
       
        width: 100vw;
        display: flex;
        
        flex-wrap:  wrap;
        justify-content: center;
    }
    .services{
        width:70vmin;
        margin-top: 3vmin;
    }
    .imgBoxService{
        width: 65vmin;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vmin;
    }
    .imgBoxService1{
        width: 65vmin;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 1.75vmin;
        height: 36vmin;
    }
    .serviceText{
        font-family: "Mukta";
        font-weight: 300;
        text-align: center;
        margin-top: 2.5vmin;
        font-size: 3.15vmin;
        font-style: normal;
    }
    .footer{
    
       height: 60vmin;
       background-color:#8CC3EB;
       width: 100vw;
       display: flex;
       margin-top: 8vmin;
    }
    .logoIcon{
        width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
    }
    .logoHolder1{
        height:24vmin;width: 60vmin;
        
    }
    .location p{
        margin-top: 2.75vmin;
    }
    .location{
       
        height: 60vmin;
        width: 100vmin;
        font-family: "Mukta";
        font-weight: 400;
        display: flex;
        color: whitesmoke;
        font-weight: bold;
        flex-direction: column;
        justify-content: center;
        font-size: 3vmin;
        align-items: center;
    }
    .socialLinks{display:flex ;}
      
   .socialLinks li{
      display: block;
      list-style: none;
      margin-left: 3vmin;
   }
   .aboutImageHolder{
       display:flex;justify-content:center;
       align-items:center;
       height: 45vmin;
       width: 75vmin;
   }
   .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:60vmin;
       width:60vmin;
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
}
/*--- End of Large Screen code ---*/
/*--- For Very Large laptop screens (Ex:- Large Dell Latitude Screens,Macbook Pro)---*/
@media(min-width:1728px) and (max-width:2047px){
  .hamSection{
    display: none;
  }
    .bannerImage{
        width: 70vmin;
     }
    .bannerText{
        width: 70vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size:15vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 3vmin;
    }
    .bannerTextDiv{
        height:25vmin;
        width:60vmin;
        margin-top: 13vmin;
        color: white;
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     
       
       width: 100vmin;
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
   .aboutTextHolder{

       font-size: 4vmin;
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
       height:24vmin;width: 60vmin;
       
   }
   .location p{
       margin-top: 2.45vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        display: flex;
        justify-content: center;
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     

 
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
    .aboutImage{      
        
        margin-top: 3.5vmin;
       
    }
   .aboutTextHolder{
        margin-top: 1vmin;
       font-size: 4vmin;
 
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       display:flex;justify-content:center;
       align-items:center;
       height: 45vmin;
       width: 75vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
    
       height:24vmin;width: 60vmin;
       
   }
   .location p{
       margin-top: 2.45vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:50vmin;
       width:50vmin;
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
    }

/*--- For XX Large screens (Ex:- TVs,IMacs...)---*/
@media(min-width:2048px){
    .bannerImage{
        width:100vmin;
        display: flex; justify-content: center;
        align-items: center;
    }

    .imageBox{
      
        width:100vmin;
        margin-top: 5vmin;
    }
  
    .bannerImage{
        width: 70vmin;
     }
    .bannerText{
        width: 70vmin;
    }
    .bannerTitle{
        font-weight: bold;
        font-size:17vmin;
        color: white;
    }
    .bannerSlogan{
        color: white;
        font-size: 3.15vmin;
    }
    .bannerTextDiv{
        height:25vmin;
        width:60vmin;
        margin-top: 17vmin;
        color: white;
    }
    .navBar{
        display: flex;
        justify-content: center;
    }
    .aboutHeader{
       
       height: 13vmin;
       display: flex;
       justify-content: center;
       align-items: center;
    
       margin-top: 3.5vmin;
   }
   .aboutHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeaderText{
       font-family: "Mukta";
       font-weight: 800;
       font-size: 10vmin;
       font-style: normal;
   }
   .servicesHeader{
       display: flex;
       width: 100vw;
       justify-content: center;
       align-items: center;
   }
   .aboutContent{

       display: flex;
       flex-wrap: wrap;
       justify-content: center;
   }
   .aboutImage,.aboutTextHolder{
     

       width: 100vmin;
   }
    .aboutText{
       
       font-family: "Mukta";
       font-weight: 300;
       font-size: 4.35vmin;
       font-style: normal;
    
    }
    .aboutImage{      margin-top: 2vmin;}
   .aboutTextHolder{

       font-size: 4vmin;
 
   }
   .aboutImage{display: flex; justify-content: center; align-items: center;}
   .aboutImageHolder{
       height: 45vmin;
       width: 50vmin;
   }
   .servicesHolder{
      
       width: 100vw;
       display: flex;
       
       flex-wrap:  wrap;
       justify-content: center;
   }
   .services{
       width:70vmin;
       margin-top: 3vmin;
   }
   .imgBoxService{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 40vmin;
   }
   .imgBoxService1{
       width: 65vmin;
       display: flex;
       justify-content: center;
       align-items: center;
       margin-top: 1.75vmin;
       height: 36vmin;
   }
   .serviceText{
       font-family: "Mukta";
       font-weight: 300;
       text-align: center;
       margin-top: 2.5vmin;
       font-size: 3.15vmin;
       font-style: normal;
   }
   .footer{
   
      height: 60vmin;
      background-color:#8CC3EB;
      width: 100vw;
      display: flex;
      margin-top: 8vmin;
   }
   .logoIcon{
       width: 100vmin;height:100%;display: flex;justify-content: center;align-items: center;
   }
   .logoHolder1{
    
       height:24vmin;width: 65vmin;
       
   }
   .location p{
       margin-top: 2.45vmin;
   }
   .location{
      
       height: 60vmin;
       width: 100vmin;
       font-family: "Mukta";
       font-weight: 400;
       display: flex;
       color: whitesmoke;
       font-weight: bold;
       flex-direction: column;
       justify-content: center;
       font-size: 3vmin;
       align-items: center;
   }
   .socialLinks{display:flex ;}
     
  .socialLinks li{
     display: block;
     list-style: none;
     margin-left: 3vmin;
  }
  .navBar{
        height: 10vmin;
        border: 1px solid skyblue;
    }
    .navBar{
        width: 100vw;
        display: flex;
        justify-content:space-between
    }
    .logoSection{
        
        width:40%;        height: 10vmin;
    }
    .navIconsSection{

        width: 60%;   
        height: 8vmin;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .nav-icons{

        width: 100%;
        font-size: 3.25vmin;
        height: 5vmin;
        font-family: "Mukta";
        font-weight: 600;
        font-style: normal;
      
    }
    .nav-icons ul{
        margin-top: 0.45vmin;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav-icons ul li{

        list-style: none;
      
    }
    .logoHolder{
        height: 8vmin;
        width: 40vmin;
    
    }
    .hamSection{
      display: none;
    }
   
    .banner{
       padding:5vmin;
    }
    .imgBanner{
       height:50vmin;
       width:50vmin;
    }
    .services{
       width:100vw;
       margin-top: 3vmin;
   }
}
   
    img{
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
</style>
<script>
   let state=false;
   let hamBtn=document.getElementById("HamBar");
   let navHam=document.getElementById("navHam");
   navHam.style.display="none";
   hamBtn.addEventListener('click',()=>{
       if(state)
        {
          navHam.style.display="none";
          state=false;
        }
        else{
          navHam.style.display="block";
          state=true;
        }
   })
</script>