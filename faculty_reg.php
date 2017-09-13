<html>
    <head>
      <title>Faculty Registration</title>
    
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
   
   
   
    <body style="background-color:#b3ecff">
				
         <!-- header -->
      <div class="headerw3l">
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header navbar-left">
                   <h1 style="margin-left:350px;color:cyan;text-decoration:underline;">My College</h1>
               </div><br> 
               <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav navbar-left">
                      <br><br><li><a href="index.php" class="link link--yaku">Home</a></li>
                      <li><a href="facultylogin.php" class="link link--yaku">login</a></li>
                      <li><a href="index.php" class="link link--yaku">Logout</a>
                  </ul>
               </div>
              </div>
         </nav>
      </div>
      
            <?php
                        include('config.php');
					
                        if (isset($_POST['submit'])) {
                       
                        $faculty_name = $_POST['faculty_name'];
                        $faculty_qualification = $_POST['faculty_qualification'];
                        $faculty_exp = $_POST['faculty_exp'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			$faculty_id = $_POST['faculty_id'];
                        $faculty_contact = $_POST['faculty_contact'];
			$faculty_address = $_POST['faculty_address'];
												
                        $bool = true;
                  
                        if ($bool) {
                        mysqli_query($connection, "insert into faculty(faculty_name,faculty_qualification,faculty_exp,password,confirm_password,faculty_id,faculty_contact,faculty_address) 
						values ('$faculty_name','$faculty_qualification','$faculty_exp','$password','$confirm_password','$faculty_id','$faculty_contact','$faculty_address')");
                        Print '<script>alert("Successfully Added!");</script>';
                        Print '<script>window.location.assign("facultylogin.php");</script>';
                        }
                        }
                        			
                        ?>
			   
			   
        <div class="container-fluid">
            
            <div class="container-fluid" style="margin-top:50px;">
		    <div class="col-md-4"></div>
                    
                    <div class="col-md-5">
                        <h1 style="color:black;margin-left:80px;margin-bottom:30px;">Faculty registration</h1>
                    <form action="faculty_reg.php" method="post" onsubmit="return validateForm()" name="myForm">
                    <div class="panel panel-default" style="background-color:#009edf">
                    <p style="margin-top:15px;margin-left:150px;font-size:16px;margin-bottom:-15px;color:white;"><b>Sign up </b> </p><br>
			 
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Name</b> 
                    <input type="text" name="faculty_name" placeholder="Enter your name"  style="width:300px; padding:4px;  autofocus">
                                
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Qualification</b>            
                    <input type="text" name="faculty_qualification" placeholder="Enter your Qualification"  style="width:300px; padding:4px;  autofocus"><br>				
                    
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Experience</b>               
                    <input type="text" name="faculty_exp" placeholder="Enter your Experience" style="width:300px; padding:4px;  autofocus"><br>	
                
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Password</b>              
                    <input type="password" name="password" placeholder="Enter your Password" style="width:300px; padding:4px;  autofocus"><br>	
                
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Confirm Password</b>            
                    <input type="password" name="confirm_password" placeholder="Confirm Password"  style="width:300px; padding:4px;  autofocus"><br>	
					
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your ID</b> 
                    <input type="text" name="faculty_id" placeholder="Enter your ID"  style="width:300px; padding:4px;  autofocus">
                      
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Contact number</b> 
                    <input type="text" name="faculty_contact" placeholder="Enter your Contact number"  style="width:300px; padding:4px;  autofocus">
                      
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your address</b> 
                    <input type="text" name="faculty_address" placeholder="Enter your address"  style="width:300px; padding:4px;  autofocus">
                        
                    <br><br>
                    <button type="submit" name="submit" class="btn btn-default"  onclick="log()"  style="width:300px;margin-bottom:20px;">Register</button> 
				
                </div>	
		</div>	
                    
	<div class="col-md-3"></div>
        </div>
        
            
<script>
      function validateForm() {
          
	var a = document.forms["myForm"]["faculty_name"].value;
	if (a == "") {
	alert("faculty_name must be filled out");
	return false;
	}
        var b = document.forms["myForm"]["faculty_qualification"].value;
	if (b == "") {
	alert("faculty_qualification must be filled out");
	return false;
	}
        var c = document.forms["myForm"]["faculty_exp"].value;
	if (c == "") {
	alert("faculty_exp must be filled out");
	return false;
	}
        var d = document.forms["myForm"]["password"].value;
	if (d == "") {
	alert("password must be filled out");
	return false;
	}
        var e = document.forms["myForm"]["confirm_password"].value;
	if (e == "") {
	alert("confirm_password must be filled out");
	return false;
	}
        var f = document.forms["myForm"]["faculty_id"].value;
	if (f == "") {
	alert("faculty_id must be filled out");
	return false;
	}
        var x = document.forms["myForm"]["faculty_contact"].value;
	if (x == "") {
	alert("faculty_contact is not matching");
	return false;
	}
         var y = document.forms["myForm"]["faculty_address"].value;
	if (y == "") {
	alert("faculty_address is not matching");
	return false;
	}
       }
</script>


            
            
            
            
      <!-- //modal-about -->     
          <div class="copy-right wthree" style="margin-top:60px;">
         <div class="container">
             <p style="font-size:20px; color:red;">Design by Siddiq</a></p>
         </div>
      </div>
      <!-- //footer --> 
      
                        
    </body>
</html>