<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Assignment Question</title>
    
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
       background-image: url("images/21.jpg");  
       
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
                      <li><a href="index.php">Home</a></li>
                     <li><a href="viewfaculty.php">view profile</a></li>
                     <li><a href="feedback2stud.php">Feedback</a>
                     <li><a href="assignment.php"> Assignment Questions</a>
                     <li><a href="facviewstuassign.php">Student Submitted Assignment</a>
                     <li style="margin-left:15px;"><a href="logout.php">Logout</a>
                       
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
<!-- ####################################################################################################### -->

	<div class="container">
	    <div class="row">
	        <?php
		include('config.php');
		if (isset($_POST['submit'])) 
		{
		$Assignment_Name = $_POST['Assignment_Name'];
                $Submit_Date = $_POST['Submit_Date'];
                $Faculty_Id = $_POST['Faculty_Id'];
		$Sub_Id = $_POST['Sub_Id']; 
		$errors= array();
		$file_name = $_FILES['file_Upload']['name'];
		$file_size =$_FILES['file_Upload']['size'];
		$file_tmp =$_FILES['file_Upload']['tmp_name'];
		$file_type=$_FILES['file_Upload']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['file_Upload']['name'])));
		$expensions= array("jpeg","jpg","png","docx","doc","txt","xlx","xlsx","ppt","pdf","pptx");
		if(in_array($file_ext,$expensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
		}
		if(empty($errors)==true){
		move_uploaded_file($file_tmp,"assignment_questions/".$file_name);
		echo "Success";
		}
		else
		{
		print_r($errors);
		}
		$bool = true;
                
                if ($bool) {
		mysqli_query($connection, "insert into upload(Assignment_Name,Submit_Date,File_Upload,Faculty_Id,Sub_Id) "
                        . "values ('$Assignment_Name','$Submit_Date','$file_name','$Faculty_Id','$Sub_Id')");
		Print '<script>alert("Successfully Added!");</script>';
                Print '<script>window.location.assign("assignment.php");</script>';
		}
                }
                ?>
						
                <div class="container-fluid">
                    
                    <div class="col-md-4" style="margin-top:20px;">
                        <div class="panel panel-success" >
                            
			<form action="assignment.php" method="post" enctype="multipart/form-data">
			<br>
                         <p style="margin-left:90px;color:black;"><b>Assignment_Name</b></p>
                        <input type="text"  name="Assignment_Name" placeholder="Assignment_Name" style="width:250px; padding:4px; margin-left:20px;  autofocus"/>
                        
                        <p style="margin-top:15px; margin-left:90px;color:black;"><b>Submit_Date</b></p>
			<input type="date"  name="Submit_Date" id="datepicker" placeholder="Submit_Date" style="width:250px; padding:4px; margin-left:20px;  autofocus"/>
                        
                        <p style="margin-top:15px; margin-left:90px;color:black;"><b>File_Upload</b></p>
			<input type="file" name="file_Upload"  id="fileToUpload" size="50" placeholder="file_Upload" style="width:250px; padding:4px; margin-left:20px;  autofocus"/>
                        
                        <p style="margin-top:15px; margin-left:90px; color:black;"><b>Faculty_Id</b></p>
			<input type="text" name="Faculty_Id" placeholder="Faculty_Id" style="width:250px; padding:4px; margin-left:20px;  autofocus"/>
                        
                        <p style="margin-top:15px; margin-left:90px;color:black;"><b>Sub_Id</b></p>
                        <input type="text"  name="Sub_Id" placeholder="Sub_Id" style="width:250px; padding:4px; margin-left:20px;  autofocus"/><br><br>
                        
                        <button type="submit" name="submit" onclick="reg()" style="margin-left:120px;margin-bottom:20px;">SUBMIT</button>
			</form>
                        </div>
                    </div>    
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
	</div>
</div>
				   
	  <div class="copy-right wthree">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer --> 
                  </body>
                  </html>