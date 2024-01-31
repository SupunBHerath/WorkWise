<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php include("../conn.php"); ?>
<?php $active6 = "active"; ?>
 <?php 
  $fName=$_SESSION['fName'];
  $lName=$_SESSION['lName'];
  $email=$_SESSION['email'];
  $id=$_SESSION['id'];


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/profile.css">
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
    
    <?php include_once("login_navbar.php") ?>

<form action="user_renter_password.php" method="post">
  <div class="asd">
    <div class="www item1"><h2 id="name"><?php echo $fName.' '.$lName ;?></h2></div>
    <div class="www item2">Apply Job:</div>
    <div class="www item3">Post Job:</div>
    
    <div class="www item7" style="background-image: url(UploadImage/<?php echo $_SESSION['image'];?>);">
        
      </div>
      <div class="www item5">
      <div class="lable">
        <label >User ID : <span>ww0<?php echo $id;?></span></label>
      </div>
      <br>
      <div class="lable">
        <label >First Name : <span><?php echo $fName;?></span></label>
      </div>
      <br>
      <div class="lable">
        <label >Last Name : <span><?php echo $lName;?></span></label>
      </div>
      <br>
      <div class="lable">
        <label >Email     : <span><?php echo $email;?></span></label>
      </div>
      
     
    </div>
    <div class="www item4"><button type="submit"  name="edit"><i class="fa fa-edit" style="font-size:36px"></i></button></div>

    <div class="www item6"><button type="submit" name="userdelete">Delete Account</button></div>
  </div>
  </form>
</body>
</html>

