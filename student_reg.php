<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Student Resgiration</title>
    
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
   <body style="background-color:blanchedalmond;">
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
                      <li><a href="index.php" class="link link--yaku">Home</a></li>
                      <li><a href="studentlogin.php" class="link link--yaku">Login</a></li>
                      <li><a href="logout.php">Logout</a>
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>

      
            <?php
                        include('config.php');
					
                        if (isset($_POST['submit'])) {
                       
                        $student_name = $_POST['student_name'];
                        $department = $_POST['department'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			$student_id = $_POST['student_id'];
                        $student_contact = $_POST['student_contact'];
                        $email = $_POST['email'];
			$student_address = $_POST['student_address'];
												
                        $bool = true;
                  
                        if ($bool) {
                        mysqli_query($connection, "insert into student_reg(student_name,department,password,confirm_password,student_id,student_contact,email,student_address) 
						values ('$student_name','$department','$password','$confirm_password','$student_id','$student_contact','$email','$student_address')");
                        
                      
                        Print '<script>alert("Successfully Added!");</script>';
                        Print '<script>window.location.assign("studentlogin.php");</script>';
                        }
                        }
                        			
                        ?>
			   
			   
         <div class="container-fluid">
            
            <div class="container-fluid" style="margin-top:50px;">
		    <div class="col-md-4"></div>
                    
                    <div class="col-md-5">
                        <h1 style="color:black;margin-left:80px;margin-bottom:30px;">Student Registration</h1>
                        <form action="student_reg.php" method="post" onsubmit="return validateForm()" name="myForm">
                    <div class="panel panel-default" style="background-color:#009edf">
                    <p style="margin-top:15px;margin-left:150px;font-size:16px;margin-bottom:-15px;color:white;"><b>Sign up </b> </p><br>
			 
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Name</b> 
                    <input type="text" name="student_name" placeholder="Enter your name"  style="width:300px; padding:4px;  autofocus">
                                
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Department</b>            
                    <input type="text" name="department" placeholder="Enter your Department"  style="width:300px; padding:4px;  autofocus"><br>				
                    
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Password</b>              
                    <input type="password" name="password" placeholder="Enter your Password" style="width:300px; padding:4px;  autofocus"><br>	
                
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Confirm Password</b>            
                    <input type="password" name="confirm_password" placeholder="Confirm Password"  style="width:300px; padding:4px;  autofocus"><br>	
					
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your ID</b> 
                    <input type="text" name="student_id" placeholder="Enter your ID"  style="width:300px; padding:4px;  autofocus">
                      
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Contact number</b> 
                    <input type="text" name="student_contact" placeholder="Enter your Contact number"  style="width:300px; padding:4px;  autofocus">
                     
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your Email</b> 
                    <input type="text" name="email" placeholder="Enter your Contact number"  style="width:300px; padding:4px;  autofocus">
                     
                    <p style="margin-top:15px; margin-left:20px;color:black;"><b>Your address</b> 
                    <input type="text" name="student_address" placeholder="Enter your address"  style="width:300px; padding:4px;  autofocus">
                        
                    <br><br>
                    <button type="submit" name="submit" class="btn btn-default"  onclick="log()"  style="width:300px;margin-bottom:20px;">Register</button> 
				
                </div>	
		</div>	
                    
	<div class="col-md-3"></div>
        </div>
        
            
<script>
      function validate() {
          
	var a = document.forms["myForm"]["student_name"].value;
	if (a == "") {
	alert("student_name must be filled out");
	return false;
	}
        var b = document.forms["myForm"]["department"].value;
	if (b == "") {
	alert("department must be filled out");
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
        var f = document.forms["myForm"]["student_id"].value;
	if (f == "") {
	alert("student_id must be filled out");
	return false;
	}
        var x = document.forms["myForm"]["student_contact"].value;
	if (x == "") {
	alert("student_contact is not matching");
	return false;
	}
         var y = document.forms["myForm"]["student_address"].value;
	if (y == "") {
	alert("student_address is not matching");
	return false;
	}
       }
</script>


<script type="text/javascript">
    function validate1() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        if (password != confirm_password) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>    
            
            
   <?php include 'footer.php'; ?>
                        
    </body>
</html>