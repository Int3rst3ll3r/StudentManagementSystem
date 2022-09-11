<script type="text/javascript">
        if(confirm("are you sure that you want to delete")){
          document.write("<?php 
              $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"sms");
        $query =" delete form students where roll_no = $_POST[roll_no]";

        $query_run = mysqli_query($connect,$query);
           ?>")
          window.location:href="admin_dashboard.php";
        }
        else{
                window.location:href="admin_dashboard.php";
        }
</script>

        