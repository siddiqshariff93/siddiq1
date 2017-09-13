        <?php

	    include("config.php");
	    session_start();
	    $faculty_name = mysqli_real_escape_string($connection, $_POST['faculty_name']);
	    $password = mysqli_real_escape_string($connection, $_POST['password']);
 
        $query = mysqli_query($connection, "SELECT * from faculty WHERE  faculty_name='$faculty_name'");
        $query = mysqli_query($connection, "SELECT * from faculty WHERE  password='$password'");
	    $exists = mysqli_num_rows($query);
	    $table_reg = "";
	    $table_password = "";
            $fid = "";
	    if($exists > 0) 
	    {
	    while($row = mysqli_fetch_assoc($query)) 
		{
		$table_reg = $row['faculty_name'];
		$table_password = $row['password'];
		$fid = $row['id'];
		}
		if(($faculty_name == $table_reg) && ($password == $table_password))
		{
		if($password == $table_password)
		{
		$_SESSION['user'] = $faculty_name;
		$_SESSION['fid'] = $fid;
		header("location: facultydash.php");
		}
     	}
		else
    	{
	    Print '<script>alert("Incorrect password!");</script>'; 
		Print '<script>window.location.assign("facultylogin.php");</script>'; 
		}
	    }
	    else{
		Print '<script>alert("Incorrect password!"");</script>'; 
		Print '<script>window.location.assign("facultylogin.php");</script>';
	    }  
        ?>