<?php 
$connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"sms");
 $query = "update students set name= '$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no =$_POST[roll_no]";
        $query_run = mysqli_query($connect,$query);
         
        ?>
        <script type="text/javascript">
        	alert("Deatiled Edited Succesfully ");
        	window.location.href="admin_dashboard.php";
        </script>