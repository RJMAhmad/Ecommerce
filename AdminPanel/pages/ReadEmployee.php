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
            background: #bla;
            color: pink;
            border-radius: 5px;
            box-shadow: 0 0 5px #ff3399,
              0 0 25px #ff3399,
              0 0 50px #ff3399,
              0 0 100px #ff3399;
        }
        .fa{
            font-size: 20px;
            color:dark;
        }

</style>

<?php include_once("../../Config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Employee</title>
</head>
<body>
    
<?php include_once("Header.php"); ?>

<?php

$Insert_Query = "SELECT * FROM `tbl_employee`";
$Execute = mysqli_query($conn,$Insert_Query);
$Count_Rows = mysqli_num_rows($Execute);

echo "<div class='conatiner'>

    <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
     <a   href='AddEmployee.php' class='btn btn-dark '>Add Employee</a>
    </div>";

echo "<table Class='table table-striped table-hover table-dark'>

    <tr>
        <th>Employee Id</th>
        <th>Employee Name</th>
        <th>Employee Email</th>
        <th>Employee Adress</th>
        <th>Employee Phone</th>
        <th>Employee Gender</th>
        <th>Employee Salary</th>
        <th>Employee Depart</th>
        <th>Employee Image</th>
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
            <td>$data[5]</td>
            <td>$data[6]</td>
            <td>$data[7]</td>
            <td><img src='".$data[8]."' width='100' height='100'></td>
            <td><a href='DeleteEmployee.php?IdGo=$data[0]'><i class='fa fa-trash' ></i></a></td>
            <td><a href='UpdateEmployee.php?IdGo=$data[0]'><i class='fa fa-pencil'></i></a></td>
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