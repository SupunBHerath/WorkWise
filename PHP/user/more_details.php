<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php include("../conn.php"); ?>
<?php
$note = "";
$userid = $_SESSION['id'];
$jobId = $_GET['jobId'];
$sqlbm = "SELECT COUNT(*) as count
        FROM bmjob
        WHERE userId = '$userid' AND jobId = '$jobId';";
$resultbm = mysqli_query($conn, $sqlbm);

if ($resultbm) {
    $row1 = mysqli_fetch_assoc($resultbm);
    $count = $row1['count'];
    $buttonColor = ($count > 0) ? 'green' : '#bbbebb';


} else {
    echo "Error: " . mysqli_error($conn);
}

if (isset($_GET["bookmark"])) {
    $sql = "INSERT INTO bmjob (userId, jobId)
    SELECT '$userid', '$jobId'
    FROM dual
    WHERE NOT EXISTS (
    SELECT 1
    FROM bmjob
    WHERE userId = '$userid' AND jobId = '$jobId')";
    $result = mysqli_query($conn, $sql);
    $_GET["apply"] = "apply";
}

if (isset($_GET["apply"])) {
    $sqlbm = "SELECT COUNT(*) as count
    FROM bmjob
    WHERE userId = '$userid' AND jobId = '$jobId';";
    $resultbm = mysqli_query($conn, $sqlbm);

    if ($resultbm) {
        $row1 = mysqli_fetch_assoc($resultbm);
        $count = $row1['count'];
        $buttonColor = ($count > 0) ? 'green' : '#bbbebb';


    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $jobId = $_GET["jobId"];
    $sql = "SELECT * FROM jobtable WHERE jobId='$jobId'; ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

    }
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/more_details.css">
</head>

<body>
    <br><br><br>
    <div class="job_listings">
        <div class="job_row">
            <div class="job">
                <a id="back" href="http:user.php" style="float: inline-start;"><i class="fa fa-chevron-left" style="font-size:20px ; "></i></a>
                <form action="more_details.php" method="get">
                    <button id="bookmark" type="submit" name="bookmark"><i class="fa fa-bookmark"
                            style="color: <?php echo $buttonColor; ?>;"></i></button>
                    <input type="hidden" name="jobId" value="<?php echo $row['jobId']; ?>">
                </form>
                <h2>
                    <?php echo $row['title']; ?>
                </h2>
                <?php echo $note; ?>
                <div class="job_details">
                    <div class="details">
                        </p>
                        <table>
                            <tr>
                                <td class="subtitle">Job Type</td>
                                <td>
                                    <?php echo $row['jobType']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="subtitle">Company</td>
                                <td>
                                    <?php echo $row['company']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="subtitle">Location</td>
                                <td>
                                    <?php echo $row['location']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="subtitle">Price</td>
                                <td>
                                    <?php echo $row['price']; ?> per monthly
                                </td>
                            </tr>

                            <tr>
                                <td class="subtitle">Exit Day:</td>
                                <td><span style="color: rgba(255, 0, 0, 0.601);">
                                        <?php echo $row['exitDay']; ?>
                                    </span></td>
                            </tr>
                        </table>
                        <br>
                        <p>Responsibilities:</p>
                        <ul>
                            <li>
                                <?php echo $row['responsibilities']; ?>
                            </li>
                        </ul>
                        <br>
                        <p>Requirements:</p>
                        <ul>
                            <li>
                                <?php echo $row['requirements']; ?>
                            </li>
                        </ul>
                    </div>

                </div>

                <center>
                    <form action="Job Application Form.php" method="get">
                        <button class="apply-btn" type="submit" name="apply">
                            <input type="hidden" name="jobId" value="<?php echo $row['jobId']; ?>">
                            Apply Now <i class="fas fa-info-circle"></i>
                        </button>
                    </form>
                </center>

            </div>
        </div>
</body>
</html>
