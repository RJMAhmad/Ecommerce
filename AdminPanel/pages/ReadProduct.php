<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(pink,black);
}

.icons {
            color: dark;
        }
        i {
            text-shadow: 2px 4px 6px pink;
            
        }
        .fa:hover{
            background: #ff3399;
            color: pink;
            border-radius: 5px;
            box-shadow: 0 0 5px #ff3399,
              0 0 25px #ff3399,
              0 0 50px #ff3399,
              0 0 100px #ff3399;
        }
        .fa{
            font-size: 20px;
        }

</style>

<?php include_once("../../Config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadProduct</title>
</head>
<body>
    
<?php include_once("Header.php"); ?>

<?php

$Insert_Query = "SELECT * FROM `tbl_product`";
$Execute = mysqli_query($conn,$Insert_Query);
$Count_Rows = mysqli_num_rows($Execute);

echo "<div class='conatiner'>

    <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
     <a   href='AddProduct.php' class='btn btn-dark '>Add Product</a>
    </div>";

echo "<table Class='table table-striped table-hover table-dark'>

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

<tbody >";
if ($Count_Rows > 0) {
    while ($data = mysqli_fetch_array($Execute)) {
        echo "<tr>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            <td>$data[4]</td>
            <td><img src='".$data[5]."' width='100' height='100'></td>
            <td><a href='DeleteProduct.php?IdGo=$data[0]'><i class='fa fa-trash' ></i></a></td>
            <td><a href='Updateproduct.php?IdGo=$data[0]'><i class='fa fa-pencil'></i></a></td>
        </tr>";
    }
} else {
        echo "<tr>
            <td colspan='3' style='text-align: center'class='text-danger' >No Record found</td>
        </tr>";
}

 echo
    "</tbody>
    </table>
</div>";

?>

<?php include_once("Footer.php"); ?>

</body>
</html>