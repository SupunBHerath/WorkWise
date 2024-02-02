<?php session_start(); ?>
<?php
if (!isset($_SESSION['id']) || $_SESSION['role'] != 'admin') {
    header('Location: ../login.php');
    exit();
}
?>
<?php require_once('../conn.php') ?>


<?php $active4 = "active"; ?>
<?php
if (isset($_GET['remove'])) {
    $jobid = $_GET['id'];
    $sql = "DELETE FROM jobtable WHERE `jobtable`.`jobId` = $jobid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script> alert("Delete successful.");</script>';
        header('location:approved_job.php');
    }
}
?>
<?php
$note = "";
if (isset($_GET["search"]) || isset($_GET["filter"])) {
    $search1 = $_GET["search"];
    $filter = $_GET["filter"];
    $search = mysqli_real_escape_string($conn, $search1);

    if (!empty($search)) {
        if ($filter == "All Type") {
            $sql = "SELECT * FROM jobtable WHERE (title LIKE '%$search%' OR company LIKE '%$search%' OR location LIKE '%$search%' OR price LIKE '%$search%' OR exitDay LIKE '%$search%')";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
                // echo '<script> alert("Data not found.");</script>';
            }
        } else if ($filter == "Full Time" || $filter == "Part Time") {
            $sql = "SELECT * FROM jobtable WHERE (title LIKE '%$search%' OR company LIKE '%$search%' OR location LIKE '%$search%' OR price LIKE '%$search%' OR exitDay LIKE '%$search%') AND jobType = '$filter'";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
            }
        }
    } else {
        if ($filter == "Full Time" || $filter == "Part Time") {
            $sql = "SELECT * FROM jobtable WHERE jobType = '$filter'";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
                // echo '<script> alert("Data not found.");</script>';
                $note = "Data not found.";
            }
        } else {
            $sql = "SELECT * FROM jobtable ";
        }
    }
} else {
    $sql = "SELECT * FROM jobtable ";
}


$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/job_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Approved Job</title>
    <style>
        #idcheck {
            margin-top: 0;
            width: 100px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        #idcheck:focus {
            width: 150px;
        }
        #fsearch {
            margin-top: 0;
            width: 20%;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        #fsearch:focus {
            width: 50%;
        }
    </style>
</head>

<body>
    <header>
        <link rel="stylesheet" href="../../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>
        </div>
    </header>

    <?php include_once("admin_navbar.php"); ?>
    <?php include_once("admin_ctg_bar.php"); ?>
    <form action="approved_job.php" method="get">
        <div class="searchbar">
            <input id="fsearch" type="search" name="search" placeholder="<?php if (isset($_GET["search"])) {
                                                                echo $_GET["search"];
                                                            } else {
                                                                echo "Search jobs...";
                                                            } ?>">

            <select name="filter"  id="idcheck " >
                <option value="All Type">Job Type</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
            </select>
            <button type="submit"    name="submit"><i class="fa fa-fw fa-search"></i></button>
            
            <input type="number" name="idcheck" id="idcheck" placeholder="JOB ID" ><button type="submit" name="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </form>
    <h3 id="phpmg">
        <?php
        if (isset($_GET["filter"])) {
            echo "Job Type: " . $_GET['filter'];
        }
        ?>
    </h3>

    <div class="job_listings">
        <div class="job_row">
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                $newID = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="approved_job.php" method="get">
                        <div class="job">
                            <button id="remove" type="submit" name="remove"><i class="fa fa-remove"></i></button>
                            <input type="hidden" name="id" value="<?php echo $row['jobId'] ?>">

                            <h2>
                                <?php echo $row["title"]; ?>
                            </h2>
                            <div class="job_details">

                                <h4>Job Category:</h4>
                                <p>
                                    <?php echo $row['category']; ?>
                                </p>
                                <h4>Job Type:</h4>
                                <p>
                                    <?php echo $row['jobType']; ?>
                                </p>
                                <h4>Company:</h4>
                                <p>
                                    <?php echo $row['company']; ?>
                                </p>
                                <h4>Location:</h4>
                                <p>
                                    <?php echo $row['location']; ?>
                                </p>
                                <h4>Price:</h4>
                                <p>$
                                    <?php echo $row['price']; ?> per monthly
                                </p>
                            </div>
                            <center>
                                <form action="more_details.php" method="get">
                                    <button class="apply-btn" type="submit" name="apply">
                                        <input type="hidden" name="jobId" value="<?php echo $row['jobId']; ?>">
                                        More Details <i class="fas fa-info-circle"></i>
                                    </button>
                                </form>
                            </center>
                        </div>
                    </form>

                <?php
                    $newID++;
                }
                ?>
        </div>
    </div>
<?php
            } else {
                // echo '<script> alert("Data not found.");</script>';
                $note = "Data not found.";
?>

    <div class="note" style="width:100%; text-align: center; ">
        <h1 style="color: red">
            <?php
                echo $note;
            ?>
        </h1>
    </div>



<?php
            }
?>
</body>

</html>