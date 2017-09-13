<!DOCTYPE html>
<html lang="en">
      <head>
      <title>Admin Dashboard</title>
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
              
               <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                      <li><a href="index.php" >Home</a></li>
                     <li><a href="#" >Questions Papers</a></li>
                     <li><a href="adminviewfac.php" >View Faculties</a></li>
                     <li><a href="adminviewstu.php" >View Students</a>
                     <li><a href="adminviewstuassign.php">Student Assignment</a>
                         <li style="margin-left:20px;"><a href="logout.php" >Logout</a>
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
      
      
      <div class="container-fluid">
          <h1  style="margin-left:350px;color:blueviolet;text-decoration:underline;margin-top:20px;"> Welcome To My College</h1>
      <div class="col-md-7">          
          <p style="margin-top:30px;text-align:justify;text-indent:50px;">
            "The MIT Mysore is what college ought to be: personal and supportive, challenging and enriching, a preparatory step for work and life, and a fun place to be. At MIT, students have direct access to everything they need to fulfill their potential, in college and beyond. It's a personal, powerful, practical education - at one of the best Technical colleges in the State."
MIT is situated at a beautiful, enchanting and sparwling landscaoe about 3 kms behind K.R.Mills. The institute is founded by a group of eminent people recognised for their eminence in the field of science and engineering technology. Many of them have served at the highest levels of AICTE and University. MIT is situated at a beautiful, enchanting and sparwling landscaoe about 3 kms behind K.R.Mills. The institute is founded by a group of eminent people recognised for their eminence in the field of science and engineering technology. Many of them have served at the highest levels of AICTE and University.
The college is equipped with all modern learning aids to make teaching-learning process a pleasure. The highly qualified staff is its asset.</p>
      </div>
      
      <div class="col-md-5">
          <img src="images/IMG_20160503_135316.jpg" alt="" width="300px" height="300px" style="margin-top:40px;"/>         
      </div>
      </div>
      
      <div class="container-fluid">
          <div>
            <p style="margin-top:30px;text-align:justify;text-indent:50px;">There are also non-government schools, called private schools. Private schools may be required when the government does not supply adequate, or special education. Other private schools can also be religious, such as Christian schools, hawzas (Muslim schools), yeshivas (Jewish schools), and others; or schools that have a higher standard of education or seek to foster other personal achievements. Schools for adults include institutions of corporate training, military education and training and business schools.
            In homeschooling and online schools, teaching and learning take place outside of a traditional school building. Schools are commonly organized in several different organizational models, including departmental, small learning communities, academies, integrated, and schools-within-a-school.</p>
      </div>
      </div>
      
      
         <script>
             function validateForm() {
		var x = document.forms["myForm"]["Faculty_name"].value;
		if (x == "") {
		alert("Faculty_name must be filled out");
		return false;
		}
		var y = document.forms["myForm"]["password"].value;
		if (y == "") {
		alert("password must be filled out");
		return false;
		}
		}
	 </script>
	 
      
      
   
          <div class="copy-right wthree" style="margin-top:110px;">
         <div class="container">
             <p style="font-size:20px; color:red;"> Design by Siddiq </p>
         </div>
      </div>
     
     
   </body>
</html>