<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>studentmanagamentsystem</title>
	<style type="text/css">
		
		#Heading{
			font: italic;
			font-family: sans-serif;
			background: black;
			color: white;
			font-size: 50px;
			top: 5%;

		}
		#nested{
			font: italic;
			font-family: sans-serif;
			background: black;
			color: white;
			font-size: 10px;
			text-align: right;
			right: 19%;
		}
		#logout{
			text-align: right;
		}

	</style>
	<?php 
	session_start();
	$connect = mysqli_connect("localhost","root",);
        $db = mysqli_select_db($connect,"sms");
	 ?>
</head>
<body>
	<div id="logout"><a href="logout.php" >LOGOUT</a></div>
     <div id="Heading"><center><h1 id="head"></h1>Student Management System</center>
     	<div id="nested"><span>E-mail:<?php echo $_SESSION['email']; ?></span>&nbsp;&nbsp;&nbsp;<span>Name:<?php echo $_SESSION['name']; ?></span>
     	</div>
    </div>
     <marquee>This is visible only to Admin</marquee
     <div><form action="" method="post"> 
     	<table>
     		<tr>
     			<td>
     				<input type="submit" name="Search_details" value="Search details"> 
     			</td>
     		</tr>
     		<tr>
     			<td>
     				<input type="submit" name="edit_details" value="EDIT details"> 
     			</td>
     		</tr>
     		<tr>
     			<td>
     				<input type="submit" name="add_details" value="ADD details">
     			</td>
     		</tr>
     		<tr>
     			<td>
     				<input type="submit" name="delete_details" value="DELETE details"> 
     			</td>
     		</tr>
     		<tr>
     			<td>
     				<input type="submit" name="show_teachers" value="Show Teachers"> 
     			</td>
     		</tr>
     	</table>
     </form>
     </div>
     <div id="right_side">
     	<div>
     		<?php
     		if(isset($_POST['search_details']))  ?>
     			<center>
     				<form action="" method="post">
     					Enter RollNO:<input type="text" name="rollno" >
     					<input type="submit" name="search_by_rollno" value="Search">
     				</form>
     			</center>
     			<?php 
     			if(isset($POST['search_by_rollno'])){
                      $query = "select * from students where rollno = '$_POST[rollno]'";
        $query_run = mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($query_run)){
        	?>
        <table>
        	<tr>
        		<td>ROll NO &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['roll_no']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>NAME&nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['name']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Father s name  &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['father_name']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Mobile number &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['mobile_no']?>" disabled name="">
        		</td>
        	</tr><tr>
        		<td>Class &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['class']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Email&nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['email']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Password&nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['password']?>" disabled name="">
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<b>Remark : &nbsp;&nbsp;&nbsp;</b>
        		</td>
        		<td>
        			<textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>
        		</td>
        	</tr>
        	</center>

        </table>
     			}
     			} 
     	</div>
     </div>
     <?php
     		if(isset($_POST['edit_details']))  ?>
     			<center>
     				<form action="" method="post">
     					Enter RollNO:<input type="text" name="rollno" >
     					<input type="submit" name="edit_by_rollno" value="edit">
     				</form>
     			</center>
     			<?php 
     			if(isset($POST['edit_by_rollno'])){
                      $query = "select * from students where rollno = '$_POST[rollno]'";
        $query_run = mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($query_run)){
        	?>
        	<form action="admin_edit_student.php" method="post">
        <table>
        	<tr>
        		<td>ROll NO &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['roll_no']? disabled>" name="">
        		</td>
        	</tr>
        	<tr>
        		<td>NAME &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['name']?>" name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Father s name  &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['father_name']?>" name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Mobile number &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['mobile_no']?>" name="">
        		</td>
        	</tr><tr>
        		<td>Class &nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['class']?>" name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Email&nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['email']?>"  name="">
        		</td>
        	</tr>
        	<tr>
        		<td>Password&nbsp;&nbsp;&nbsp;</b></td>
        		<td>
        			<input type="text" value="<?php echo $row['password']?>" name="">
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<b>Remark : &nbsp;&nbsp;&nbsp;</b>
        		</td>
        		<td>
        			<textarea rows="3" cols="40" ><?php echo $row['remark'];?></textarea>
        		</td>
        	</tr>
        	</center>

        </table>
        </form>
     			}
     			} 
     			<?php
     			if(isset($_POST['add_new_student'])){ ?>
     				<center><h4>Fill the given details:</h4></center>
     				<form action="add_student.php" method="post">
     					<table>
     						<tr>
     							<td>Roll No.</td>
     							<td>
     							<input type="text" name="roll_no" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Name</td>
     							<td>
     							<input type="text" name="name" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Father name</td>
     							<td>
     							<input type="text" name="father_name" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Mobile No</td>
     							<td>
     							<input type="text" name="mobile" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Class</td>
     							<td>
     							<input type="text" name="class" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Email</td>
     							<td>
     							<input type="text" name="email" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Password</td>
     							<td>
     							<input type="text" name="password" required>
     							</td>
     						</tr>
     						<tr>
     							<td>Remark</td>
     							<td>
     							<textarea rows="3" cols="40" name="remark"></textarea>
     							</td>
     						</tr>
     						<tr>
     							<td></td>
     							<td><input type="submit" name="Add student"></td>
     						</tr>
     					</table>
     				</form>
                 <?php
                 if(isset($_POST['delete details'])){

                   ?>
                   <center>
                   	<h4>Enter roll no to Delete Student</h4><br>
                   	<form action="delete_student.php" method="post">
                   		Roll No. :
                   		<input type="text" name="roll_no">
                   		<input type="submit" name="search_by_roll_no_for_delete" value="Delete Students">
                   	</form>
                   </center>
               }
               <?php
               if(isset($_POST['show_teachers'])){
                 ?>
                 <center>
                 	<h5>Teacher's Details</h5><table>
                 		<tr>
                 			<td id="showteacher"><b>ID</b></td>
                 			<td id="showteacher"><b>Name</b></td>
                 			<td id="showteacher"><b>Mobile</b></td>
                 			<td id="showteacher"><b>Courses</b></td>
                 			<td id="showteacher"><b>View Details</b></td>
                 		</tr>
                 	</table>
                 </center>
                 <?php
                 $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"sms");
        $query =select * from teachers;
        $query_run = mysqli_query($connect,$query);
         while($row = mysqli_fetch_assoc($query_run)){
         	?>
         	<center>
         		<table style="border: solid;width: 80%;color: grey;">
         			<tr>
         				<td  id="td"><?php echo $row['t_id'];?></td>
         				<td  id="td"><?php echo $row['name'];?></td>
         				<td  id="td"><?php echo $row['mobile'];?></td><td  id="td"><?php echo $row['courses'];?></td>
         				<td  id="td"><a href="#">view details</a></td>
         			</tr>
         		</table>
         	</center>
         }
        

               }
                    	</div>
     </div>
</body>
</html>