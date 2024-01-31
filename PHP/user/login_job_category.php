<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php include("../conn.php"); ?>

<?php $active2 = "active"; ?>

<?php
$note = "";
$ctg=$_GET["ctg"];
if (isset($_GET["search"]) || isset($_GET["filter"])) {
    $search1 = $_GET["search"];
    $filter = $_GET["filter"];
    $search = mysqli_real_escape_string($conn, $search1);

    if (!empty($search)) {
        if ($filter == "All Type") {
            $sql = "SELECT * FROM jobtable WHERE category='$ctg' AND (title LIKE '%$search%' OR company LIKE '%$search%' OR location LIKE '%$search%' OR price LIKE '%$search%' OR exitDay LIKE '%$search%')";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
                // echo '<script> alert("Data not found.");</script>';

            }
        } else if ($filter == "Full Time" || $filter == "Part Time") {
            $sql = "SELECT * FROM jobtable WHERE category='$ctg' AND (title LIKE '%$search%' OR company LIKE '%$search%' OR location LIKE '%$search%' OR price LIKE '%$search%' OR exitDay LIKE '%$search%') AND jobType = '$filter'";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {


            }

        } else {
            // echo '<script> alert("Data not found.");</script>';

        }
    } else {
        if ($filter == "Full Time" || $filter == "Part Time") {
            $sql = "SELECT * FROM jobtable WHERE category='$ctg' AND jobType = '$filter'";
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
                // echo '<script> alert("Data not found.");</script>';
                $note = "Data not found.";
            }

        } else {
            $sql = "SELECT * FROM jobtable WHERE category='$ctg' ";

        }

    }
} else {
    $sql = "SELECT * FROM jobtable WHERE category='$ctg'";
}

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../CSS/save_job.css">
 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Document</title>
<style>
#seardiv{
   background-image: url(../../Image/Home/ctg2.jpg);
   background-position: center;
   background-size: cover;
   background-repeat: none;
   
    width: 90%;
    height: 180px;
    margin: 10px auto;
    border-radius: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
    
}
.searchbar2{
    margin-top: 30px;
}
#ctg_name{
    color: white;
    font-weight: 1500;
    color: white;
    font-size: 50px;
    margin: 0;
}
#ctg_ds{
    font-size: 30px;
    font-style: italic;
    color: white;
    font-weight: 800;
    margin: 10px 0 0 0 ;
    /* margin-bottom: 0; */
}
#search_icon{
    margin-left: -4px;
}
</style>


</head>

<body>
    <!-- <header>
        <link rel="stylesheet" href="../../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>
        </div>
    </header> -->

    <?php include_once("login_header.php"); ?>


    <?php include_once("login_navbar.php"); ?>
    <?php include_once("login_ctg_bar.php"); ?>

    <form action="login_job_category.php" method="get">
        <div class="searchbar" id="seardiv">
            <?php 
            $ctg=$_GET['ctg'];
            if($ctg=='Graphics'){
                $c1='Graphics & Design';
                $c2='Designs to make you stand out';
            } elseif($ctg=='Programming'){
                $c1='Programming & Tech';
                $c2='You think it. A programmer develops it';
            }
            else if($ctg=='Digital'){
                $c1='Digital Marketing';
                $c2='Build your brand. Grow your business.';
            }
            elseif($ctg=='Video'){
                $c1='Video & Animation';
                $c2='Bring your story to life with creative videos.';
            }elseif($ctg=='Writing'){
                $c1='Writing & Translation';
                $c2='Get your words across—in any language.';
            }
            elseif($ctg=='Music'){
                $c1='Music & Audio';
                $c2='Do not miss a beat. Bring your sound to life.';
            }
            elseif($ctg=='Business'){
                $c1='Business';
                $c2='Business to make you stand out';
            }
            elseif($ctg=='AI'){
                $c1='AI Services';
                $c2='AI to make you stand out';
            }else{
                $c1='New';
                $c2='New to make you stand out';
            } ?>

            <h1 id="ctg_name"><?php echo $c1;?></h1>
            <h3 id="ctg_ds"><?php echo $c2;?></h3>
            
            <input class="searchbar2"  type="search" name="search" placeholder="<?php if (isset($_GET["search"])) {
                echo $_GET["search"];
            } else {
                echo "Search";
            } ?>">

            <select class="searchbar2" name="filter" id="">
                <option value="All Type">Job Type</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
            </select>
            <button class="searchbar2" id="search_icon" ><i class="fa fa-fw fa-search"></i></button>
        </div>
        <input type="hidden" name="ctg" value="<?php echo $ctg?>">

    </form>
    <!-- <h3 id="phpmg">
        <?php
        // if (isset($_GET["filter"])) {
        //     echo "Job Type: " . $_GET['filter'];
        // }
        ?>
    </h3> -->

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
                            <h4>Exit Day:</h4>
                            <p><span style="color: rgba(255, 0, 0, 0.601);">
                                    <?php echo $row['exitDay']; ?>
                                </span></p>
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