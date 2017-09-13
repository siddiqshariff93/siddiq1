<html>
     <head>
      <title>Student Login</title>
    
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
      <style>
          body{
       background-color: royalblue;
              }
      </style>
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
                      <li><a href="index.php">Home</a>
                     <li><a href="login.php" >Admin</a></li>
                     <li><a href="faclogin.php" >Faculty</a></li>
                     <li><a href="stulogin.php">Student</a>
                     <li><a href="logout.php">Logout</a>
                     
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
    
       
        <div class="container-fluid" style="margin-top:120px;margin-bottom:80px;">
            <div class="col-md-4"></div> 
            
           <div class="col-md-4">
               <form action="checkstudent.php" method="post" onsubmit="return validateForm()" name="myForm">
		<div class="panel panel-success">
                    <div class="panel-heading"><span  style="margin-left:100px;">Sign In</span></div>	
                        <p style="margin-top:15px; margin-left:20px;"><b>Student Name</b></p>
                        <input type="text" name="student_name" id="student_name" placeholder="student_name" style="width:250px; padding:4px; margin-left:20px; autofocus">
                        <p style="margin-top:15px; margin-left:20px;"><b>Password</b></p>
                        <input type="password" name="password" id="password" placeholder="password" style="width:250px; padding:4px; margin-left:20px;  autofocus"><br>	
			<input type="checkbox" name="Remember Me" style="margin-left:20px; margin-top:20px;"><span style="margin-left:10px;">Remember Me</span>	<br>
                        <button type="Submit" name="submit" class="btn btn-success" style="margin-top:15px;margin-left:20px;margin-bottom:15px;">Login</button>             		
                    </div>					
		</div>	</form>
            </div>
       
        <div class="col-md-4"></div>    
        </div>
        
        <script>
	 
	 	
				function validateForm() {
					
						var a = document.forms["myForm"]["student_name"].value;
						if (a == "") {
							alert("student_name must be filled out");
							return false;
						}
						
						
						var b = document.forms["myForm"]["password"].value;
						if (b == "") {
							alert("password must be filled out");
							return false;
						}
						
				}
	 
	 </script>
        
          <div class="copy-right wthree">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer --> 
    </body>
</html>