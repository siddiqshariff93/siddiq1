
              <form action="feedback2stud.php" method="post" enctype="multipart/form-data">
			 <br>
                        
                         
                      
			<select name="Assignment_Name" style="width:250px; padding:4px; margin-left:20px;  autofocus">
			<option value="0" title="subject">Select Assignment Name</option> 
                        
                            
                            <?php 
			include('config.php');
			$sql = mysqli_query($connection, "SELECT Assignment_Name FROM assignment");
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