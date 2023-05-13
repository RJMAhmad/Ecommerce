<?php
require_once('../../Config.php');
if(isset($_GET["IdGo"])){
    $Id = $_GET["IdGo"];
    $Delete_query = "DELETE FROM `tbl_category` WHERE Id = $Id";
    $Delete_Run = mysqli_query($conn,$Delete_query);

    if($Delete_Run == true){

        echo"<script>
        alert('Category Deleted Successfully!')
        window.location.href = 'ReadCategory.php'
        </script>";

    }
    else{
        echo"<script>
        alert('".mysqli_error($conn)."')
        window.location.href = 'ReadCategory.php'
        </script>";

    }

}
else{
    header("location: ReadCategory.php");
}
?>