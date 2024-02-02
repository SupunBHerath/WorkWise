<?php include("conn.php"); ?>
<?php $active2 = "active"; ?>

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
        } else {
            // echo '<script> alert("Data not found.");</script>';


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
    <link rel="stylesheet" href="../CSS/job_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <!-- <header>
        <link rel="stylesheet" href="../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>
        </div>
    </header> -->
    <?php include_once('header.php') ?>

    <?php include_once("navbar.php"); ?>
    <?php include_once("ctg_bar.php"); ?>
    <form action="find_job.php" method="get">
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
            <button type="submit"name="submit"><i class="fa fa-fw fa-search"></i></button>
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

                    <div class="job">
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

                    </div>

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

<?php if ($note != 'Data not found.') {
    include_once('footer.php');
}
