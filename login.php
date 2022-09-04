<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center><h1>Student Managament System </h1><br>
   <form action="" method="post">
   	<input type="submit" name="admin_login" value="Admin Login">
   	<input type="submit" name="student_login" value="Student Login">
   </form>
   </center>
   <?php

    if(isset($_POST['admin_login'])){
      header("Location: adminlogin.php");
    }
      if(isset($_POST['student_login'])){
      header("Location: studentlogin.php");
    }

   ?>
</body>
</html>