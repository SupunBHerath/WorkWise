<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php require_once('../conn.php') ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/index.css">

</head>

<body>
<?php include_once("login_header.php"); ?>

    <?php include_once('login_navbar.php') ?>



    <div class="div_flex">
        <div class="flex_left">
              <h2>Find the right freelance service, right away</h2>
            <h3>The #1 Site for Remote Jobs</h3><br>
            <button id="doctor-button" name="doctor-button"><span>Find Job</span></button>
            
        </div>
        <div class="flex_right"></div>
    </div>
    <div id="i" class="imagebar"></div>
    <br>
    <h1 id="text2">Popular job categories</h1>


    <div class="jobctg_div">
        <div class="job_row">
            <?php
            // $sql = "SELECT * FROM jobtable WHERE category IN (SELECT DISTINCT category FROM jobtable ORDER BY category LIMIT 5)";
            $sql = "SELECT category, count(category) AS category_count FROM jobtable GROUP BY category ORDER BY category_count DESC LIMIT 5";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="job1">
                        <a href="login_job_category.php?ctg=<?php echo $row['category'] ?>">
                            <div class="job_img">
                                <img src="../../Image/FT/<?php echo $row['category'] ?>.png" alt="Image Updating ">
                            </div>
                            <?php
                            $ctg = $row['category'];
                            if ($ctg == "Graphics") {
                                $c1 = 'Graphics & Design';
                            } elseif ($ctg == "Programming") {
                                $c1 = 'Programming & Tech';
                            } elseif ($ctg == "Digital") {
                                $c1 = 'Digital Marketing';
                            } elseif ($ctg == "Video") {
                                $c1 = 'Video & Animation';
                            } elseif ($ctg == "Writing") {
                                $c1 = 'Writing & Translation';
                            } elseif ($ctg == "Music") {
                                $c1 = 'Music & Audio';
                            } elseif ($ctg == "Business") {
                                $c1 = 'Business';
                            } elseif ($ctg == "AI") {
                                $c1 = 'AI Services';
                            } else {
                                $c1 = 'New Job category';
                            }
                            ?>
                            <a href="login_job_category.php?ctg=<?php echo $row['category'] ?>"><?php echo $c1; ?></a>
                            <br>
                        </a>
                    </div>

                <?php      }
            } else {
                $count = 0;
                while ($count < 5) { ?>
                    <div class="job1">
                        <a href="#">
                            <div class="job_img">
                                <img src="../Image/FT/<?php echo 'coming' ?>" alt=".<?php echo 'coming soon' ?>">
                            </div>
                            <a href="#"><?php echo 'coming soon'; ?>/a>
                                <br>
                            </a>
                    </div>
            <?php   }
            }
            $conn->close();
            ?>

        </div>
    </div>


    <br>
    <div class="foruser_div">
        <h1 id="ftyw_text">Find great <br> work</h1>
        <p id="ftyw_text2">
            Meet clients you’re excited to work with and take
            your career or business to new heights.
        </p>
        <br>
        <p><a href="user.php">Find Work </a></p>
    </div>

    <div class="div3">
        <div class="left_div3"></div>
        <div class="right_div3">
            <h1 id="ftyw_text">Find talent <br> your way</h1>
            <p id="ftyw_text2">
                Work with the largest network of independent
                professionals and get things done from quick
                turnarounds to big transformations.
            </p>
            <br>
            <p><a href="find_freelancers.php">Post Your Job</a></p>
        </div>
    </div>


    <?php include_once('../footer.php') ?>