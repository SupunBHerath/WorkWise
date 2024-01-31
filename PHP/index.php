<?php if(session_start()) {
    session_destroy();
    
} ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <style>
  .job1 img {
            width: 100%;
            height: 180px;
        }

        .job1 a {
            text-decoration: none;
            font-size: 18px;
            margin-bottom: auto;
            text-align: center;
            color: rgb(2, 2, 2);
            font-weight: 900;
            margin-top: 10px;
        }

        .job1 :hover {
            text-decoration: none;
            color: blue;
            font-weight: 900;
            font-size: 20px;
            transition: .5s;
        }

        .job1 {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include_once('navbar.php') ?>

    <div class="div_flex">
        <div class="flex_left">
            <h1 id="text1">Find the right <span id="freel">freelance </span> service, right away</h1>
            <div class="search_div">
                <input type="text" class="search_bar" placeholder="Search...">
                <button class="search_btn">Search</button>
            </div>
        </div>
        <div class="flex_right"></div>
    </div>
    <div id="i" class="imagebar"></div>
    <br>
    <h1 id="text2">Popular job categories</h1>

    <div class="jobctg_div">

        <a href="login_job_category.php?ctg=Graphics">
            <div class="job1">
                <img src="../Image/FT/GD.png" alt="">
                <a href="login_job_category.php?ctg=Graphics">Graphics & Design</a>
                <br>

            </div>
        </a>

        <a href="job_category.php?ctg=Programming">
            <div class="job1">
                <img src="../Image/FT/SD2.jpg" alt="">
                <a href="job_category.php?ctg=Programming">Programming & Tech</a>
            </div>
        </a>
        <a href="job_category.php?ctg=Digital">
            <div class="job1">
                <img src="../Image/FT/DA.gif" alt="">
                <a href="job_category.php?ctg=Digital">Digital Marketing</a>
            </div>
        </a>
        <a href="job_category.php?ctg=Business">
            <div class="job1">
                <img src="../Image/FT/EC.gif" alt="">
                <a href="job_category.php?ctg=Business">Business</a>
            </div>
        </a>
        <a href="job_category.php?ctg=AI">
            <div class="job1">
                <img src="../Image/FT/AI.gif" alt="">
                <a href="job_category.php?ctg=AI">AI Services</a>
            </div>
        </a>
    </div>
    <br>
    <div class="foruser_div">
        <h1 id="ftyw_text">Find great <br> work</h1>
        <p id="ftyw_text2">
            Meet clients you’re excited to work with and take
            your career or business to new heights.
        </p>
        <br>
        <p><a href="find_job.php">Find Work </a></p>
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
            <p><a href="find_freelancer.Notlogin.php">Post Your Job</a></p>
        </div>
    </div>


    <?php include_once('footer.php') ?>