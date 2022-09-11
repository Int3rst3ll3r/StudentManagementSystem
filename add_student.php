<?php 
$connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"sms");
        $query ="insert into students values ('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[mobile_no],$_POST[class],'$_POST[email]','$_POST[password]','$_POST[remark]')";

        $query_run = mysqli_query($connect,$query);
         
        ?>
        <script type="text/javascript">
        	alert("student added Succesfully ");
        	window.location.href="admin_dashboard.php";
        </script> 