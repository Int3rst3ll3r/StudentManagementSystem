<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<center><h1>Student Managament System </h1><br>
   <form action="" method="post">
   	Email:<input type="text"  name="email" value="Email"><br><br>
   	Password:<input type="password" name="password" value="Password"><br><br>
    <input type="submit"  value="Submit">
   </form>
   <?php
       if(isset($_POST['submit'])){
        $connect = mysqli_connect("localhost","root",);
        $db = mysqli_select_db($connect,"sms");
        $query = "select * from login where email = '$_POST[email]'";
        $query_run = mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($query_run)){
          if($row['email']==$_POST['email']){
            if($row['password']==$_POST['password']){
              header("Location: admin_dashboard.php");
          }
          else{
            echo "Wrong Password";
          }
        }
          else{
            echo "Wrong Email";
          }
        }
      }
   ?>
   </center>
</body>
</html>
