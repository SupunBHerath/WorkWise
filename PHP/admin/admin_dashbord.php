<?php include("../conn.php"); ?>
<?php session_start(); ?>
<?php
$sql_user = "SELECT count(*) as user_count FROM users ";
$result_user = mysqli_query($conn, $sql_user);
$row_user = mysqli_fetch_assoc($result_user);

$sql_job = "SELECT count(*) as job_count FROM jobtable ";
$result_job = mysqli_query($conn, $sql_job);
$row_job = mysqli_fetch_assoc($result_job);

$sql_uajob = "SELECT count(*) as unjob_count FROM unapproved_job ";
$result_uajob = mysqli_query($conn, $sql_uajob);
$row_uajob = mysqli_fetch_assoc($result_uajob);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/admin_dashbord.css">

    <title>Admin Dashbord</title>
</head>

<body>
    <?php include_once 'admin_navbar.php'; ?>

    <div class="main_div">
        <a href="user_list.php">
            <div class="sub_div">
                <h1><i class="fa fa-group"> </i> Users</h1>
                <h2><?php echo $row_user['user_count']; ?></h2>
            </div>
        </a>
        <a href="approved_job.php">
            <div class="sub_div">
                <h1><i class="fa fa-group"></i> Approved Job</h1>
                <h2><?php echo $row_job['job_count']; ?></h2>
            </div>
        </a>
        <a href="unapproved_job.php">
            <div class="sub_div">
                <h1>Unapproved Job</h1>
                <h2><?php echo $row_uajob['unjob_count']; ?></h2>
                

            </div>
        </a>
        <a href="#">
            <div class="sub_div">
                <h1>Users Feedback</h1>
                <h2>85</h2>

            </div>
        </a>
        <div class="sub_div hidden"></div>
        <a href="add_job.php">
            <div class="sub_div">
                <h1>Add new Job</h1>

            </div>
        </a>
        <a href="#">
            <div class="sub_div">
                <h1>Add Notification</h1>
            </div>
        </a>
        <div class="sub_div hidden"></div>
    </div>
</body>

</html>