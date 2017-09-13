<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Admin Login</title>
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
   
   
   <body style="background-color:cadetblue;">
      <!-- header -->
      <div class="headerw3l">
         <nav class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header navbar-left">
                   <h1 style="margin-left:350px;color:cyan;text-decoration:underline;">My College</h1>
               </div><br><br>  
              
               <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                      <li><a href="login.php">Admin</a></li>
                      <li><a href="faclogin.php">Faculty</a></li>
                      <li><a href="studentlogin.php">Student</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
     
      
        <div class="container-fluid">
            <div class="col-md-4"></div>
            <form action="checkadmin.php" method="POST"  onsubmit="return validateForm()" name="myForm">
            <div class="col-md-4" style="margin-top:50px;">
				<div style="margin-bottom:35px;">	
                                    <h3 style="margin-left:50px"><b>Please Log In</a></b></h3>
				</div>
                <a href="https://www.facebook.com/"  style="color:white; text-decoration:none;"><button type="button" class="btn" style="padding:10px; width:120px; background-color:#428bca;border-radius:8px;">Facebook</button></a>
                <a href="http://www.google.com" style="color:white; text-decoration:none;"><span style="padding-left:50px;"><button type="button" class="btn" style="padding:10px;width:120px; background-color: #5bc0de;border-radius:8px;">Google</button></span></a>
                <br>	
                <br>			
                <p style="color:white;"><b>Username or email</b></p>
                <input type="text" name="username" style="width:300px; padding:4px; autofocus">
                <p style="margin-top:15px;color:white;"><b>Password</b>
                <a href="#" style="margin-left:120px;font-size:12px;color:white;">Forgot Password?</a></p>
                <input type="password" name="password" style="width:300px; padding:4px; autofocus"><br>				
		<button type="submit"   name="submit" onclick="log()" class="btn btn-info" style="margin-top:10px;">Log In</button>
                <input type="checkbox" name="Remember Me" style="margin-left:110px; margin-top:30px;"><span style="margin-left:10px;">Remember Me</span>
		</div>  </form>
            <div class="col-md-4"></div>
        </div>
               
      
        <script>
            function validateForm() {
		var x = document.forms["myForm"]["username"].value;
		if (x == "") {
		alert("Username must be filled out");
		return false;
		}
		var y = document.forms["myForm"]["password"].value;
		if (y == "") {
		alert("Password must be filled out");
		return false;
		}
		}
	</script>
        
        
        <div class="copy-right wthree" style="margin-top:80px;">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
    
      </div>
      <!-- //footer --> 
      
    
   </body>
</html>