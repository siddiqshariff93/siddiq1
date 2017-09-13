<!DOCTYPE html>
<html lang="en">
   <head>
      <title>My College</title>
    
      <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
      <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/jquery.flipster.css">
      <!-- //Custom Theme files -->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!-- js -->	
      <script src="js/jquery-2.2.3.min.js"></script>  
      <!-- //js -->
      <!-- web-fonts -->  
      <link href="//fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <!-- //web-fonts -->
   </head>
   <body>
      <!-- header -->
      <div class="headerw3l">
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header navbar-left">
                   <h1 style="margin-left:350px;color:cyan;text-decoration:underline;">My College</h1>
               </div><br><br>     
             
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                     <li><a href="login.php" class="link link--yaku">Admin</a></li>
                     <li><a href="faclogin.php" class="link link--yaku">Faculty</a></li>
                     <li><a href="stulogin.php">Student</a>
                     <li><a href="about.php">About Us</a>
                     <li><a href="contact.php">Contact</a>
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
      <!-- //header -->
      <!-- banner -->
      <div class="banner">
         <section class="slider">
            <div class="flexslider">
               <ul class="slides">
                  <li>
                     <div class="banner-img1">
                        <div class="banner-w3text">
                           <h2>You must get an education. You must go to school & you must learn to protect urself with the pen,and not the gun.</h2>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="banner-img2">
                        <div class="banner-w3text">
                           <h3>I wish my school days could have dragged on a little longer, or that I could go back and do it later in life.</h3>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
         <!-- FlexSlider -->
         <script defer src="js/jquery.flexslider.js"></script>
         <script type="text/javascript">
            $(window).load(function(){
              $('.flexslider').flexslider({
            	animation: "slide",
            	start: function(slider){
            	  $('body').removeClass('loading');
            	}
              });
            });
         </script>
         <!-- //FlexSlider -->
      </div>
      
      
      
      
          <div class="copy-right wthree">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer --> 
      


   </body>
</html>