<?php
require_once('../../Config.php');
if(isset($_GET["IdGo"])){
    $Id = $_GET["IdGo"];
    $Delete_query = "DELETE FROM `tbl_product` WHERE Product_Id = $Id";
    $Delete_Run = mysqli_query($conn,$Delete_query);

    if($Delete_Run == true){

        echo"<script>
        alert('Product Deleted Successfully!')
        window.location.href = 'ReadProduct.php'
        </script>";

    }
    else{
        echo"<script>
        alert('".mysqli_error($conn)."')
        window.location.href = 'ReadProduct.php'
        </script>";

    }

}
else{
    header("location: ReadProduct.php");
}
?>