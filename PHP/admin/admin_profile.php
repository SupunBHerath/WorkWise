<?php include("../conn.php");
session_start();
?>
<?php $active6 = "active"; ?>
<?php
$fName = $_SESSION['fName'];
$lName = $_SESSION['lName'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];


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

  <?php include_once("admin_navbar.php") ?>
  <?php
  $id=$_SESSION['id'];
  $sql_user = "SELECT count(*) as user_count FROM users WHERE userid='$id';";
  $result_user = mysqli_query($conn, $sql_user);
  $row_user = mysqli_fetch_assoc($result_user);

  $sql_job = "SELECT count(*) as job_count FROM jobtable WHERE userid='$id'; ";
  $result_job = mysqli_query($conn, $sql_job);
  $row_job = mysqli_fetch_assoc($result_job);

  ?>

  <div class="asd">
    <div class="www item1">
      <h2 id="name"><?php echo $fName . ' ' . $lName; ?></h2>
    </div>
    <div class="www item2">Apply Job: <span style="color: red;"><?php echo $row_job['job_count']; ?></span></div>
    <div class="www item3">Post Job: <span style="color: red;"><?php echo $row_job['job_count']; ?></span></div>

    <div class="www item7" style="background-image: url(../user/UploadImage/<?php echo $_SESSION['image']; ?>);">

    </div>
    <div class="www item5">
      <div class="lable">
        <label>User ID : <span>ww0<?php echo $id; ?></span></label>
      </div>
      <br>
      <div class="lable">
        <label>First Name : <span><?php echo $fName; ?></span></label>
      </div>
      <br>
      <div class="lable">
        <label>Last Name : <span><?php echo $lName; ?></span></label>
      </div>
      <br>
      <div class="lable">
        <label>Email : <span><?php echo $email; ?></span></label>
      </div>


    </div>
    <div class="www item4"><button onclick="location.href='../user/editprofile.php'"><i class="fa fa-edit" style="font-size:36px"></i></button></div>

    <div class="www item6"><button>Delete Account</button></div>
  </div>
</body>

</html>