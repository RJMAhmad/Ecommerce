<?php
require_once('../../Config.php');
if(isset($_GET["IdGo"])){
    $Id = $_GET["IdGo"];
    $Delete_query = "DELETE FROM `tbl_employee` WHERE Emp_Id = $Id";
    $Delete_Run = mysqli_query($conn,$Delete_query);

    if($Delete_Run == true){

        echo"<script>
        alert('Employee Deleted Successfully!')
        window.location.href = 'ReadEmployee.php'
        </script>";

    }
    else{
        echo"<script>
        alert('".mysqli_error($conn)."')
        window.location.href = 'ReadEmployee.php'
        </script>";

    }

}
else{
    header("location: ReadEmployee.php");
}
?>