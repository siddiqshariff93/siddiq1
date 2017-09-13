<!DOCTYPE html>
<html lang="en">
     <head>
      <title>Feedback To Students</title>
    
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
       background-image: url("images/23.jpg");       
       }
      </style>
   </head>
   <body>
<!-- ####################################################################################################### -->
       <!-- header -->
      <div class="headerw3l">
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header navbar-left">
                   <h1 style="margin-left:350px;color:cyan;text-decoration:underline;">My College</h1>
               </div><br><br>     
             
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav navbar-left">
                      <li><a href="index.php" >Home</a></li>
                     <li><a href="viewfaculty.php" >view profile</a></li>
                     <li><a href="feedback2stud.php" >Feedback</a>
                     <li><a href="assignment.php" > Assignment Questions</a>
                     <li><a href="facviewstuassign.php" >Student Submitted Assignment</a>
                     <li style="margin-left:15px;"><a href="logout.php">Logout</a>
                         
                  </ul>
               </div>
               <!-- //navigation --> 
            </div>
         </nav>
      </div>
<!-- ####################################################################################################### -->
  
						
<div class="container-fluid" style="margin-top: 20px;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="margin-top:30px;">
                        <div class="panel panel-success">
                            <div class="panel-heading"><span style="margin-left:90px;">Feedback</span></div>
			 <form action="feedback2stud.php" method="post" enctype="multipart/form-data">
			 <br>
                        
                         
                      
			<select name="Assignment_Name" style="width:250px; padding:4px; margin-left:20px;  autofocus">
			<option value="0" title="subject">Select Assignment Name</option> 
                        
                            
                            <?php 
			include('config.php');
			$sql = mysqli_query($connection, "SELECT Assignment_Name FROM upload");
			while ($row = $sql->fetch_assoc()){
			echo "<option value=". $row['Assignment_Name'] .">" . $row['Assignment_Name'] ."</option>";
			}
			?>
                        </select>
                        <br><br>
                        <select name="student_name" style="width:250px; padding:4px; margin-left:20px;  autofocus">
			<option value="0" title="subject">Select Student Name</option> 
                        <?php 
			include('config.php');
			$sql = mysqli_query($connection, "SELECT student_name FROM student_reg");
			while ($row = $sql->fetch_assoc()){
			echo "<option value=". $row['student_name'] .">" . $row['student_name'] ."</option>";
			}
			?>
			</select>
                                               
                        <p style="margin-top:15px; margin-left:90px;"><b>feedback</b></p>
                        <textarea name="feedback" style="width:250px; padding:4px; margin-left:20px;  autofocus"></textarea>
                        <br><br>
                         <button type="submit" name="submit" class="btn btn-success" onclick="return validate1()" onclick="log()"  style="width:250px;margin-bottom:20px;margin-left:20PX;">Submit</button> 
                       </form>				
							
							<?php
                        include('config.php');
					
                        if (isset($_POST['submit'])) {
                       
                        $Assignment_Name = $_POST['Assignment_Name'];
                        $student_name = $_POST['student_name'];
			$feedback = $_POST['feedback'];
											
                        $bool = true;
                  
                        if ($bool) {
                        mysqli_query($connection, "insert into feedback(Assignment_Name,student_name,feedback) 
						values ('$Assignment_Name','$student_name','$feedback')");
                        
                      
                        Print '<script>alert("Successfully Added!");</script>';
                        Print '<script>window.location.assign("feedback2stud.php");</script>';
                        }
                        }
                        			
                        ?>
						

                        </div>
                    </div>    
                    
                </div>
	</div>
</div>
				   
				  
				  
<!-- ####################################################################################################### -->
                   
<div class="copy-right wthree" style="margin-top:60px;">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer --> 
      
                  </body>
                  </html>