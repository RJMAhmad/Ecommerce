<?php
require_once('../../Config.php');
if(isset($_GET["IdGo"])){
    $Id = $_GET["IdGo"];
    $Delete_query = "DELETE FROM `tbl_contact` WHERE Id = $Id";
    $Delete_Run = mysqli_query($conn,$Delete_query);

    if($Delete_Run == true){

        echo"<script>
        alert('Contact Deleted Successfully!')
        window.location.href = 'ReadContact.php'
        </script>";

    }
    else{
        echo"<script>
        alert('".mysqli_error($conn)."')
        window.location.href = 'ReadContact.php'
        </script>";

    }

}
else{
    header("location: ReadContact.php");
}
?>