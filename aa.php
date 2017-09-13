
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Assignment Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
table, th, td {
    border: 1px solid #222;
	padding:2%;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #f8f7df; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,  #f8f7d, #8DC26F);
  background: -moz-linear-gradient(right,  #f8f7d, #8DC26F);
  background: -o-linear-gradient(right, #f8f7d, #8DC26F);
  background: linear-gradient(to left, #f8f7d, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

</head>
<body>
<!-- ####################################################################################################### -->
               <div class="wrapper col1">
  <div id="header">
    <div id="logo">
     <h1 style="color:green apple;"">Assignment<span> Management</span></h1>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
                   <div class="wrapper col2">
                   <div id="topnav">
                    <ul>
					
				   <li><a href="faculty.php">Home</a>
				  
                   <li><a href="facultyprofile.php">Your Profile</a>
				  
			        <li class="active"><a href="assignment.php">Assignment</a>
	
					 
			        <li><a href="viewstudent.php">View Student</a>
					
					<li><a href="submitstudnt.php">Students Assignment</a>
					
					<li><a href="feedback.php">Feedback</a>
				   
				    <li><a href="logout.php">Logout</a> 
      
                   </ul>
                   </div>
                   </div>
<!-- ####################################################################################################### -->
        <div class="wrapper col3">
        <div id="featured_slide">
    
      <div id="featured_content">
        <div class="featured_box" id="fc1"><img src="images/demo/img1.jpg" alt="" />
                 </div>
       
		</div>
</div>
</div>

<br/><br/>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
                       

					    <div class="container">
	                    <div class="row">
	                 
					    <h1 style="color:red";><center>Assignment</center></h1>
<?php
include('config.php');
$facid = $_SESSION["fid"];
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
mysqli_query($connection, "insert into assignment(Assignment_Name,Submit_Date,File_Upload,Faculty_Id,Sub_Id) 
values ('$Assignment_Name','$Submit_Date','$file_name','$Faculty_Id','$Sub_Id')");
Print '<script>alert("Successfully Added!");</script>';
Print '<script>window.location.assign("aa.php");</script>';
}
}
?>
						
<div class="assignment-page">
<div class="form">
	<form action="aa.php" method="post" enctype="multipart/form-data">
	<input type="text"  name="Assignment_Name" placeholder="Assignment_Name"/>
	<input type="date"  name="Submit_Date" id="datepicker" placeholder="Submit_Date" />
	<input type="file" name="file_Upload"  id="fileToUpload" size="50" placeholder="file_Upload">
	<input type="text" name="Faculty_Id" placeholder="Faculty_Id"/>
        <input type="text" name="Sub_Id" placeholder="Sub_Id"/>
	<button type="submit" name="submit" onclick="reg()">SUBMIT</button>
	</form>
</div>
</div>
                                            
                                            
                                            
				        </div>
				        </div>
				   
				  
				  
<!-- ####################################################################################################### -->
                  <div class="wrapper col6">
                  <div id="copyright">
                  <p><center>Copyright &copy; 2017 - All Rights Reserved</center></p>
                  <br class="clear" />
                  </div>
                  </div>
                  </body>
                  </html>