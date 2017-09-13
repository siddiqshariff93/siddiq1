<html>
    <head>
      <title>Student Dash Board</title>
    
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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="viewassign.php" >Assignment questions</a></li>
                      <li><a href="viewstudent.php">View Profile</a>
                      <li><a href="studentassignsub.php">Submit Assignment</a></li>
                     <li><a href="stuviewfeedback.php"> Veiw feedback</a>
                     <li style="margin-left:15px;"><a href="logout.php">Logout</a>
                         
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <!-- //header -->
             <div class="container">
                 <div class="col-md-2"></div>
                 <div class="col-md-8" style="text-align: center;">
	        <div class="row">
                    <h1 style="margin-bottom:20px;margin-top: 20px;"><center>Assignment questions</center></h1>
                        <table class="table table-bordered table-hover">
                            <thead style="margin:auto;color:black;text-align: center;border: 1px solid black;">
				<th  style=" color:black;text-align: center;border: 1px solid black;">Assignment_Name</th>
				<th  style=" color:black;text-align: center;border: 1px solid black;"> Submit_Date</th>
				<th  style=" color:black;text-align: center;border: 1px solid black;"> Download</th>
                                <th  style=" color:black;text-align: center;border: 1px solid black;">Faculty_Id</th>
                                <th  style=" color:black;text-align: center;border: 1px solid black;">Sub_Id</th>
                             </thead>
                             <tbody>
							 <?php
							 include("config.php");
							 $query = mysqli_query($connection, "Select * from upload ");
							 while ($row = mysqli_fetch_array($query)) {
							 print '<tr>';
							 print '<td style=" color:black;border: 1px solid black;">'.$row['Assignment_Name'].'</td>';
							 print '<td style=" color:black;border: 1px solid black;">'.$row['Submit_Date'].'</td>';
							 print "<td ><a href='assignment_questions/".$row["File_Upload"]."' download>Download file</a></td>"; 
                                                          print '<td style=" color:black;border: 1px solid black;">'.$row['Faculty_Id'].'</td>';
                                                          print '<td style=" color:black;border: 1px solid black;">'.$row['Sub_Id'].'</td>';
                                                          
							 print '</tr>';
					     	 }
							 ?>
							 </tbody>
							 </table>	
				             </div>
				             </div>
                 <div class="col-md-2"></div>
                     
             </div>

      <div class="copy-right wthree" style="margin-top:180px;">
         <div class="container">
             <p style="font-size:20px; color:red;"><i> Design by Siddiq</i></p>
         </div>
      </div>
      <!-- //footer -->          </body>
                             </html>