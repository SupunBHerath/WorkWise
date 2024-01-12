<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Home.css">
    <title>Document</title>
</head>

<body>
    <header>
        <link rel="stylesheet" href="../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>

        </div>
    </header>
    <?php include_once("navbar.php")?>

    <div class="container">
        <div class="flex-container">
            <div class="flex-text">
                <h1>Welcome to</h1>
                <h1 id="workwise"> <span style="color: black;">Work</span>Wise</h1>
                <button class="signbtn"><a href="../HTML/Signup.html">Sign Up & Find Your Next Remote
                        Job!</a></button>
                <br>

            </div>
            <div class="flex-image" id="flex-image">
                <!-- <img src="../Image/Home/5.jpg" alt=""> -->
            </div>


        </div>
        <br><br><br>

        <div id="i" class="imagebar"></div>

    </div>
    </div>
    <!-- image bar -->

    <!-- job categories  -->
    <H1 id="squareText">Popular Job categories<a href="" id="squareTextP"> Find More Job</a> </H1>
    <div class="square-container">
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">Graphic Design</a></h3>
        </div>
        <div class="square">
            <img src="../Image/Home/4.gif" alt="">
            <h3><a href="#">Web Development</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/EC.gif" alt="">
            <h3> <a href="#">Ecommerce Development</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/AI.gif" alt="">
            <h3><a href="#">AI Service</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/DA.gif" alt="">
            <h3><a href="#">Data Analys</a></h3>
        </div>

    </div><br><br><br>
    <div class="square-container">
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">Game Developers</a></h3>
        </div>
        <div class="square">
            <img src="../Image/Home/4.gif" alt="">
            <h3><a href="#">Java Developers</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/SD2.jpg" alt="">
            <h3> <a href="#">Mobile App Developers</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">CMS Developers</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">API Developers</a></h3>
        </div>

    </div>
    <br><br><br>
    <!-- /* post your work  */ -->

    <div class="postWork-box">
        <div class="postText">
            <h1>Find talent</h1>
            <h2>your way</h2>
            <p>Work with the largest network of independent <br>
                professionals and get things done—from <br>
                quick turnarounds to big transformations.</p>
            <button type="submit"><a href="../HTML/Login.html">Post Your Work</a></button>

        </div>
        <div class="postImage">

        </div>
    </div>
    <br><br><br>
</body>

</html>