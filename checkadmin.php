        <?php

	    include("config.php");
	    session_start();
	    $username = mysqli_real_escape_string($connection, $_POST['username']);
	    $password = mysqli_real_escape_string($connection, $_POST['password']);
 
        $query = mysqli_query($connection, "SELECT * from adminlogin WHERE  username='$username'");
        $query = mysqli_query($connection, "SELECT * from adminlogin WHERE  password='$password'");
	    $exists = mysqli_num_rows($query);
	    $table_reg = "";
	    $table_password = "";
	    if($exists > 0) 
	    {
	    while($row = mysqli_fetch_assoc($query)) 
		{
		$table_reg = $row['username'];
		$table_password = $row['password'];
		}
		if(($username == $table_reg) && ($password == $table_password))
		{
		if($password == $table_password)
		{
		$_SESSION['user'] = $username;
		header("location: admindash.php");
		}
     	}
		else
    	{
	    Print '<script>alert("Incorrect Username");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
		}
	    }
	    else{
		Print '<script>alert("Incorrect password!"");</script>'; 
		Print '<script>window.location.assign("login.php");</script>';
	    }  
        ?>