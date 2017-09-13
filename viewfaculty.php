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

<div class="container-fluid">
    <div class="col-md-1"></div>
        <div class="col-md-10" style="text-align: center;">
            <div class="row"><br>
                <h1 style="color:black;margin:auto;">Faculty Details</h1><br>
                <table class="table table-bordered">
                <thead style="margin:auto;color:black;text-align: center;border: 1px solid black;">
		<th  style=" color:black;text-align: center;border: 1px solid black;">faculty_name</th>
		<th  style=" color:black;text-align: center;border: 1px solid black;">faculty_qualification</th>
		<th  style=" color:black;text-align: center;border: 1px solid black;">faculty_exp</th>
                <th  style=" color:black;text-align: center;border: 1px solid black;">faculty_id</th>
                <th  style=" color:black;text-align: center;border: 1px solid black;">faculty_contact</th>
                
                </thead>
                <tbody>
                    
		<?php
		include("config.php");
		$query = mysqli_query($connection, "Select * from faculty ");
		while ($row = mysqli_fetch_array($query)) {
		print '<tr>';
		print '<td style=" color:black;border: 1px solid black;">'.$row['faculty_name'].'</td>';
		print '<td style=" color:black;border: 1px solid black;">'.$row['faculty_qualification'].'</td>';
		print '<td style=" color:black;border: 1px solid black;">'.$row['faculty_exp'].'</td>';
                print '<td style=" color:black;border: 1px solid black;">'.$row['faculty_id'].'</td>';
                print '<td style=" color:black;border: 1px solid black;">'.$row['faculty_contact'].'</td>';
                
		print '</tr>';
		 }
		 ?>
		</tbody>
		</table>	
            </div>
	</div>
    <div class="col-md-1"></div>
</div>

      
      
      <div class="copy-right wthree" style="margin-top:50px;">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer --> 
      
          
                             </body>
                             </html>