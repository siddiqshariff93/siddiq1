        <?php

	    include("config.php");
	    session_start();
	    $student_name = mysqli_real_escape_string($connection, $_POST['student_name']);
	    $password = mysqli_real_escape_string($connection, $_POST['password']);
 
        $query = mysqli_query($connection, "SELECT * from student_reg WHERE  student_name='$student_name'");
        $query = mysqli_query($connection, "SELECT * from student_reg WHERE  password='$password'");
	    $exists = mysqli_num_rows($query);
	    $table_reg = "";
	    $table_password = "";
		$id;
	    if($exists > 0) 
	    {
	    while($row = mysqli_fetch_assoc($query)) 
		{
		$table_reg = $row['student_name'];
		$table_password = $row['password'];
		$id = $row['id'];
		}
		if(($student_name == $table_reg) && ($password == $table_password))
		{
		if($password == $table_password)
		{
		$_SESSION['user'] = $student_name;
		$_SESSION['id'] = $id;
		header("location: studentdash.php");
		}
     	}
		else
    	{
	    Print '<script>alert("Incorrect password!");</script>'; 
		Print '<script>window.location.assign("studentlogin.php");</script>'; 
		}
	    }
	    else{
		Print '<script>alert("Incorrect password!"");</script>'; 
		Print '<script>window.location.assign("studentlogin.php");</script>';
	    }  
        ?>