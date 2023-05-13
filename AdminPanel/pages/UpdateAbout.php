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

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  
  text-align: center;
}
.login-box h2:hover{
    background: #ff3399;
  color: black;
  border-radius: 5px;
  box-shadow: 0 0 5px #ff3399,
              0 0 25px #ff3399,
              0 0 50px #ff3399,
              0 0 100px #ff3399;
}


.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #ff3399;
  font-size: 12px;
}

.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  background: #ff3399;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #ff3399;
  color: black;
  border-radius: 5px;
  box-shadow: 0 0 5px #ff3399,
              0 0 25px #ff3399,
              0 0 50px #ff3399,
              0 0 100px #ff3399;
}

.login-box button span {
  position: absolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, black, #ff3399);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, black, #ff3399);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, black, #ff3399);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box button span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, black, #ff3399);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}




</style>


<?php include_once("../../Config.php"); ?>
<?php
    $Id = $_GET["IdGo"];
    $Fetch = mysqli_query($conn,"SELECT * FROM `tbl_about` WHERE Id = $Id");
    $My_Array = mysqli_fetch_array($Fetch);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add About</title>
</head>
<body>
    <?php include_once("Header.php"); ?>
 
    <div class="login-box">
        <h2>Add About</h2>
        <form action="" method="post">

            <div class="user-box">
                <input type="text" name="Name" required="" value="<?php echo $My_Array[1];?>">
                <label>About </label>
            </div>

            <div class="user-box">
            <input type="textarea" name="Description" required="" value="<?php echo $My_Array[2];?>">
                <label>Description</label>
            </div>

            <button name="Update_About" type="submit">Update</button>
      </form>
  </div>

    <?php include_once("Footer.php"); ?>


  <?php

    if (isset($_POST["Update_About"])) 
    {
        $Name = $_POST["Name"];
        $Description = $_POST["Description"];

        $Update_About = "UPDATE `tbl_about` SET `Name`='$Name',`Description`='$Description' WHERE Id = $Id";
        $Run_UpdateAbout = mysqli_query($conn,$Update_About);

        if ($Run_UpdateAbout  == True) {
            echo 
             "<script>
                    alert('About Us Updated Successfully! ')
                    window.location.href='ReadAbout.php';
             </script>";
        } else {
            echo 
            "<script>
                   alert('".mysqli_error()."')
                   window.location.href='UpdateAbout.php';
            </script>";
        }
        

    
    }
  ?>

</body>
</html>