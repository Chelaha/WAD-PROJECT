<?php

  $db = mysqli_connect("localhost", "root", "", "db_theaventuras");

  $result = mysqli_query($db, "SELECT * FROM adventure");
 
?>


<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="styles1.css">
        <script src="https://kit.fontawesome.com/278370c5b3.js" crossorigin="anonymous"></script>
        <style type = "text/css" >
           
           @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap');

            #sec{ display: inline-block; margin-top: 110px;}


            #title h2 {
                background-color: #90D69C;
                font-size: 3.5vw;
                color: white;
                margin-top:0px;
                padding: 10px;
                display:  block;
                margin-bottom: 0px;
                margin-left:70px;
                margin-right:20px;
                padding:0,0,0,0;
                width: 90%; 
                opacity: 0.9;}

            #title h4 {
                background-color: magenta;
                color: yellow;
                text-align: center;
                padding: 0px;
                margin-bottom: 0px;
                margin-top: -55px;
                margin-left:995px;
                margin-right:0px;
                padding:0,0,0,0;
                width: 200; 
                opacity: 0.9;}
            
            
            #panel1 {
                border-radius: 0;
                border: 0;
                background-color: yellow;
                margin-top: 20px; 
                margin-bottom:30px;
                margin-left:70px;
                margin-right:20px;
                padding:0,0,0,0;
                width: 90%;
                display: flex;
                opacity: 0.9; }

            #image-container {
                border-radius: 0;
                border: 0;
                margin-left: 70px;
                padding:0,0,0,0;
                width: 300;
                height:170;
                display:flow-root}

            #image-container h2.a{
                font-size:30px;
                margin-left: 10px;
                width: 500;
                color: lightblue;
                margin-top: -175px;
                margin-left: 320px;
                  
            }
            #image-container h2.b{
                font-size:20px;
                margin-left: 10px;
                width: 500;
                color: white;
                margin-top: 0;
                margin-left: 320;                
            }

            #image-container h1.a{
                font-size:70px;
                font-family: 'Nosifer', cursive;
                font-weight: bold;
                margin-left: 10px;
                width: 500;
                color: white;
                margin-top: -20;
                margin-left: 320;                
            }

            #image-container-title h2{
                background-color: yellow;
                font-size: 25px;
                text-align: center;
                color: white;
                padding: 10px;
                display:  block;
                margin-bottom: 30px;
                margin-left:70px;
                margin-right:20px;
                padding:0,0,0,0;
                width: 300;
                height:50; 
                opacity: 0.8;}


            #panel2 h3.a{
                color: white;
                text-align: center;
                font-size: 25px;}

            #desctiption p { color:white;
                font-size:25px;
                margin-left:20px;
                font-family: 'Work Sans', sans-serif; }
                
            #desctiption h3.a { 
                color:red;}

            #desctiption h3.a{
                color: red;
                 margin-left: 20px;}

            #desctiption h3.b{
                color: magenta; 
                font-family: 'Lobster', cursive;
                margin-left: 10px}

            #bgVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%; 
                min-height: 100%;}
            
            .container-btn1{
                text-align: center;
                margin-top: 0px;
                margin-right: 20px;
                text-decoration:none;

                }
            .btn{
                border: 0px solid #3498db;
                background: none;
                padding: 7px 7px;
                font-size: 20px;
                font-family: "montserrat";
                cursor: pointer;
                margin: 0px;
                margin-right: 0px;
                margin-top: 5px;;
                margin-left: 0px;
                transition: 0.8s;
                position:relative;
                overflow: hidden;
                width: 150;
                text-decoration:none;
                }
            
            
            .btn1{
                color: #fff;
                text-decoration:none;
                }

            .btn1:hover{
                color: #3498db;
                }
            .btn::before{
                content: "";
                position: absolute;
                left: 0;
                width: 100%;
                height: 0%;
                background: #3498db;
                z-index: -1;
                transition: 0.8s;
                }

            .btn1::before{
                top: 0;
                border-radius: 0 0 50% 50%;
                }

            .btn1::before{
                height: 180%;
                }

            .btn1:hover::before{
                height: 0%;
                }

                     
            

        </style>
    </head>

    <body>
        <header id="band">
            <img id="logo" src="new_logo.png">
            <!--<p id="logo_name">THE<br>AVENTURAS</p>-->
            <ul> 
            <li><a href="http://localhost/WAD%20Project/home.html">Home</a></li>
                <li><a href="http://localhost/WAD%20Project/adventures/Adventure.php" class="active">Adventures</a></li>
                <li><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy Tickets</a></li>
                <li><a href="http://localhost/WAD%20Project/BuyTickets/view_myticket.php">View My Tickets</a></li>
                <li><a href="http://localhost/WAD%20Project/ContactUs/contactus.html">Contact Us</a></li>
                <li><a href="http://localhost/WAD%20Project/AboutUs/AboutUs.html">About Us</a></li>
                <li><a href="http://localhost/WAD%20Project/BuyTickets/registration.php">Register</a></li>
                <li><a href="http://localhost/WAD%20Project/BuyTickets/login.php">Login</a></li>
            </ul>
        </header>        

        <video autoplay muted loop id="bgVideo">
            <source src="POV.mp4" type="video/mp4">
        </video>
        
       
        
        <div class="section" id="sec">

        <?php
            while ($row = mysqli_fetch_array($result)) {
                    
                    $Image=$row["Image"];
                    
                    $AID=$row["AID"]; 
                    $Aname=$row["Aname"]; 
                    $price=$row["Price"]; 
                    $Description=$row["Description"]; 
                    $Guidelines=$row["Guidelines"];
                    
                   if($AID=="1")
                        {$price1=$price;
                        $Aname1=$Aname;
                        $Description1=$Description;
                        $Guidelines1=$Guidelines;
                        $Image1=$Image;}
                   elseif($AID=="2")
                        {$price2=$price;
                        $Aname2=$Aname;
                        $Description2=$Description;
                        $Guidelines2=$Guidelines;
                        $Image2=$Image;}
                    elseif($AID=="3")
                        {$price3=$price;
                        $Aname3=$Aname;
                        $Description3=$Description;
                        $Guidelines3=$Guidelines;
                        $Image3=$Image;}
                    elseif($AID=="4")
                        {$price4=$price;
                        $Aname4=$Aname;
                        $Description4=$Description;
                        $Guidelines4=$Guidelines;
                        $Image4=$Image;}
                    elseif($AID=="5")
                        {$price5=$price;
                        $Aname5=$Aname;
                        $Description5=$Description;
                        $Guidelines5=$Guidelines;
                        $Image5=$Image;}
                   

                    
                    
                    
                }
	    ?>
            
                 <div id="image-container">
                    <img  src="Balloon_Race1.jpg"   class="slider-image" width="300" height="170">
                    <img  src="Balloon_Race2.jpg"  class="slider-image"width="300" height="170">
                    <img  src="Balloon_Race3.jpg" class="slider-image"width="300" height="170">
                    <img  src="Balloon_Race3.jpg" class="slider-image"width="300" height="170">
                    <img  src="barnstormer_planes1.jpg" class="slider-image"width="300" height="170">
                    <img  src="barnstormer_planes2.jpg" class="slider-image"width="300" height="170">
                    <img  src="barnstormer_planes3.jpg" class="slider-image"width="300" height="170">
                    <img  src="freeway_coaster1.jpg" class="slider-image"width="300" height="170">
                    <img  src="freeway_coaster2.jpg" class="slider-image"width="300" height="170">
                    <img  src="freeway_coaster3.jpg" class="slider-image"width="300" height="170">
                    <img  src="freeway_coaster4.jpg" class="slider-image"width="300" height="170">
                    <img  src="drop_zone1.jpg" class="slider-image"width="300" height="170">
                    <img  src="drop_zone2.jpg" class="slider-image"width="300" height="170">
                    <img  src="petting_farm1.jpg" class="slider-image"width="300" height="170">
                    <img  src="petting_farm2.jpg" class="slider-image"width="300" height="170">
                    <img  src="petting_farm3.jpg" class="slider-image"width="300" height="170">
                    <h2 class="a">AVENTURA!</h2>
                    <h1 class="a">Adventures</h1>
                    <h2 class="b">The Little Theme Park</h2>
                    <h2 class="b">Thats Big on Family Fun</h2>
                    <h2 class="b">See you here!</h2>
                    
                 </div> 

                <div id="image-container-title">
                    <h2>Welcome Back!</h2>      
                </div>

            
 

           <script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("slider-image");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000);
                }
            </script>

         
          

           <div id="title">  
                <h2><?php echo $Aname1; ?><span><h4>$<?php echo $price1; ?></h4> </span></h2>    
            </div>
            <div id="panel1"> 
                <img  src="<?php echo $Image1; ?>"  height="300">
                <div id="desctiption">
                    <h3 class="b">The Aventuras - <?php echo $Aname1; ?> <span class="container-btn1"> <button class="btn btn1"><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy </a></button> </span> </h3><br>
                    <p><?php echo $Description1; ?></p><br>
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p><?php echo $Guidelines1; ?></p>   
                </div>  
            </div>

            <div id="title">   
                <h2><?php echo $Aname2; ?><span><h4>$<?php echo $price2; ?></h4> </span></h2>  
            </div>
            <div id="panel1"> 
                <img  src="<?php echo $Image2; ?>"  height="300">
                <div id="desctiption">
                <h3 class="b">The Aventuras - <?php echo $Aname2; ?> <span class="container-btn1"> <button class="btn btn1"><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy </a></button> </span> </h3><br>
                <p><?php echo $Description2; ?></p><br>
                <h3 class="a">Attraction Guidelines</h3><br>
                <p><?php echo $Guidelines2; ?></p>   
                </div>  
            </div>

            <div id="title">   
                <h2><?php echo $Aname3; ?><span><h4>$<?php echo $price3; ?></h4> </span></h2>  
            </div>
            <div id="panel1"> 
                <img  src="<?php echo $Image3; ?>"  height="300">
                <div id="desctiption">
                <h3 class="b">The Aventuras - <?php echo $Aname3; ?> <span class="container-btn1"> <button class="btn btn1"><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy </a></button> </span> </h3><br>
                <p><?php echo $Description3; ?></p><br>
                <h3 class="a">Attraction Guidelines</h3><br>
                <p><?php echo $Guidelines3; ?></p>   
                </div>  
            </div>


            <div id="title"> 
                <h2><?php echo $Aname4; ?><span><h4>$<?php echo $price4; ?></h4> </span></h2>  
            </div>
                <div id="panel1"> 
                <img  src="<?php echo $Image4; ?>"  height="300">
                <div id="desctiption">
                <h3 class="b">The Aventuras - <?php echo $Aname4; ?> <span class="container-btn1"> <button class="btn btn1"><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy </a></button> </span> </h3><br>
                <p><?php echo $Description4; ?></p><br>
                <h3 class="a">Attraction Guidelines</h3><br>
                <p><?php echo $Guidelines4; ?></p>   
            </div>  

            </div>


            <div id="title">  
                <h2><?php echo $Aname5; ?><span><h4>$<?php echo $price5; ?></h4> </span></h2>  
            </div>
            <div id="panel1"> 
                <img  src="<?php echo $Image5; ?>"  height="300">
                <div id="desctiption">
                <h3 class="b">The Aventuras - <?php echo $Aname5; ?> <span class="container-btn1"> <button class="btn btn1"><a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php">Buy </a></button> </span> </h3><br>
                <p><?php echo $Description5; ?></p><br>
                <h3 class="a">Attraction Guidelines</h3><br>
                <p><?php echo $Guidelines5; ?></p>   
                </div>  
            </div>









           <!--<div id="title">
                <h2>Balloon Race<span><h4>$10.99</h4> </span></h2>      
            </div>
            <div id="panel1"> 

                <img src="Balloon_Race1.jpg" height="300">
                 
                <div id="desctiption">
                    
                    <h3 class="b">The Aventuras - Balloon Race <span class="container-btn1"> <button class="btn btn1">Buy </button> </span></h3><br>
                    <p>Jump into the basket on one of our eight colorful balloons at the Great Balloon Race.</p><br> 
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p>Must be at least 48” unless accompanied by a responsible companion. Minimum age: 2. Additional safety information posted at the attraction.
</p>     
                </div>  
                
            </div>
               
           <div id="title">
                <h2>Barnstormer Planes <span><h4>$24.99</h4> </span></h2>      
            </div>
            <div id="panel1"> 

                <img src="Barnstormer_Planes1.jpg" height="300">

                <div id="desctiption">
                    <h3 class="b">The Aventuras - Barnstormer Planes <span class="container-btn1"> <button class="btn btn1">Buy </button> </span></h3><br>
                    <p>Enjoy the Adventure City skies while boarding your barnstormer plane.</p> <br> 
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p>Must be at least 42” unless accompanied by a responsible companion. Additional safety information posted at the attraction.</p>      
                </div>  
                
            </div>


            <div id="title">
                <h2>Freeway Coaster<span><h4>$30.99</h4> </span></h2>      
            </div>
            <div id="panel1"> 

                <img src="Freeway_Coaster1.jpg" height="300">
                 
                <div id="desctiption">
                    
                    <h3 class="b">The Aventuras - Freeway  Coaster <span class="container-btn1"> <button class="btn btn1">Buy </button> </span></h3><br>
                    <p>The ultimate ride for pint-size thrill seekers that provides big-time fun for the whole family.</p><br> 
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p>Must be at least 36” if accompanied by a responsible companion. Minimum height to ride alone: 42”. Additional safety information posted at the attraction.</p>     
                </div>  
                
            </div>


            <div id="title">
                <h2>Drop Zone<span><h4>$18.99</h4> </span></h2>      
            </div>
            <div id="panel1"> 

                <img src="Drop_Zone1.jpg" height="300">

                <div id="desctiption">
                    <h3 class="b">The Aventuras - Drop Zone <span class="container-btn1"> <button class="btn btn1">Buy </button> </span> </h3><br>
                    <p>The name says it all…A 45 foot tower full of thrill seeking fun! </p><br> 
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p>Must be at least 38” if accompanied by a responsible companion. Minimum height to ride alone: 42”. Additional safety information posted at the attraction.</p>      
                </div>  
                
            </div>

            <div id="title">
                <h2>Petting Farm<span><h4>$12.99</h4> </span></h2>      
            </div>
            <div id="panel1"> 

                <img src="Petting_Farm1.jpg" height="300">

                <div id="desctiption">
                    <h3 class="b">The Aventuras - Petting Farm <span class="container-btn1"> <button class="btn btn1">Buy </button> </span> </h3><br>
                    <p>Welcome to the farm where sheep, goats, chickens and even a friendly pig are part of this hands-on attraction.</p><br> 
                    <h3 class="a">Attraction Guidelines</h3><br>
                    <p>For the animals safety, no food or drinks allowed. Additional safety information posted at the attraction.</p>      
                </div>  
                
            </div>
            -->
  



        </div>

        
            
            



        <!--Foot Contains in here ! -->
        <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
            <h1 class="logo-text"><span>The</span>Aventura</h1>
            <br>
            <p>"we always provide our best to customers and<br>
                 customer happiness is our happiness"</p>
                 <br>
        <div class="contact">
            <span><i class="fas fa-phone"></i> &nbsp; 0770780742</span>
            <span><i class="fas fa-envelope"></i> &nbsp; info@theaventura.com</span>
            <br>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/login.php"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/accounts/login"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
        </div>
        
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="http://localhost/WAD%20Project/adventures/Adventure.php"><li>Events</li></a>
                    <a href="http://localhost/WAD%20Project/BuyTickets/buytickets.php"><li>Buy Tickets</li></a>
                    <a href="#"><li>Mentores</li></a>
                    <a href="#"><li>Gallery</li></a>
                    <a href="http://localhost/WAD%20Project/ContactUs/contactus.html"><li>Terms and Conditions</li></a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact us</h2>
                <br>
                <form action="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRmVPQlFRjxBmqTLQfJtFWztxPpphbsSnJVFcxShMdWFmfwqXnBCGMHxjwBFqPdwljjlskQ" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn-big">
                        <i class="fas fa-envelope"></i>
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy;nibmfitos.com | Designed by FITOS
        </div>
        </div>

    </body>
</html>