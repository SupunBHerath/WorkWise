<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php include("../conn.php"); ?>


 <?php 
  $fName=$_SESSION['fName'];
  $lName=$_SESSION['lName'];
  $email=$_SESSION['email'];
  $id=$_SESSION['id'];


 ?>
 <?php 
   if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder_name='UploadImage/'.$file_name;

    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];
    if (!empty($file_name)) {
        $sql = "UPDATE `users` SET image = '$file_name' WHERE `users`.`userid` = $id";
        $result = mysqli_query($conn, $sql);
    
        if (!move_uploaded_file($tempname, $folder_name)) {
            echo "File upload error";
        }
    }
    if(!empty($fName)){
        $sql="UPDATE `users` SET fName = '$fName' WHERE `users`.`userid` = $id";
        $result=mysqli_real_query($conn,$sql);
    }
    if(!empty($lName)){
        $sql="UPDATE `users` SET lName = '$lName' WHERE `users`.`userid` = $id";
        $result=mysqli_real_query($conn,$sql);
    }
    if(!empty($password)){
        if (!empty($password)) {
            if ($rpassword == $password) {
                $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET password = '$hashpassword' WHERE `users`.`userid` = $id";
                $result = mysqli_real_query($conn, $sql);
            } else {
            echo '<script> alert("Passwords do not match");</script>';
            }
        }

    }
    $sql="SELECT * FROM users WHERE userid =$id;";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0){
        $row=mysqli_fetch_array($result);
       $_SESSION['fName'] = $row['fName'];
       $_SESSION['lName']= $row['lName'];
       $_SESSION['email']= $row['email'];  
       $_SESSION['image'] = $row['image'];
       echo '<script> alert("successful");</script>';

       if($_SESSION['role'] =="admin"){
        header('location:../admin/admin_profile.php');
       } else {
        header("location:profile.php");

       }
    }else{
        echo '<script> alert("Error ");</script>';
    
        if($_SESSION['role'] =="admin"){
            header('location:admin/admin_profile.php');
           } else {
            header("location:profile.php");
    
           }
    }
   }
 
 
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/editprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>

<body>

    <header>
        <link rel="stylesheet" href="../../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>
        </div>
    </header>

    <?php 
    if($_SESSION['role'] =="admin"){
        include_once("../admin/admin_navbar.php") ;
       } else {
        include_once("login_navbar.php") ;
       }
    ?>


    <body>
    <form action="editprofile.php" method="post" enctype="multipart/form-data">

            <fieldset>
                <div class="profile-container">

                    <h1>Update Profile</h1>
                    <hr>

                    <div class="upload">
                        <input type="file" name="image">
                        <label class="fake-btn" style=" background-image: url(UploadImage/<?php echo $_SESSION['image'];?>);"></label>
                    </div>

                    <div class="input-group">
                        <label id="a" for="firstname">First Name</label>
                        <input type="text" id="firstname" name="fName" placeholder="Enter your first name">
                    </div>

                    <div class="input-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lName" placeholder="Enter your last name">
                    </div>

                    <div class="input-group">
                        <label for="email">Password</label>
                        <input type="password" id="password" name="password" pattern=".{8,}" title="Password must be at least 8 characters"  placeholder="Enter Password (at least 10 characters)">

                    </div>

                    <div class="input-group">
                        <label for="phone number">Repeat password</label>
                        <input type="password" id="phone number" name="rpassword" placeholder="Enter password agian">
                    </div>

                    <button type="submit" name="submit">Save Changes</button>
                </div>
            </fieldset>
        </form>

    </body>

</html>