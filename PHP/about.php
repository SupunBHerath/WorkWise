
<?php $active4 = "active"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../CSS/about.css"> -->
    <title>WorkWise</title>
    <style>
    body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
   
}


.disc {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}




.logo {
    width: 130px;
    cursor: pointer;
    height: 40px;
    margin-left: 20px;
    margin-right: 30px;

}


@media screen and (max-width: 900px) {
   
    .disc {
        max-width: 600px;
      
    }
}
@media screen and (max-width: 700px) {
   
    .disc {
        max-width: 400px;
      
    }
}
    </style>
</head>

<body>
<?php include_once('header.php') ?>

    <?php include_once("navbar.php")?>
    <div class="disc">
        <h2>Why Choose WorkWise?</h2>
        <img src="../Image/logo/logo1.png" alt="logo" class="logo">

        <ul>
            <li>Diverse Job Listings: Explore a vast array of job opportunities from various industries and sectors.
            </li>
            <li>User-Friendly Interface: Navigating your career path has never been easier.</li>
            <li>Personalized Job Recommendations: Say goodbye to endless scrolling!</li>
            <li>Connect with Employers: Establish meaningful connections with employers through our messaging platform.
            </li>
            <li>Skill Development Resources: Stay ahead in your career with our curated resources.</li>
            <li>Mobile Accessibility: Job hunting on the go? WorkWise is mobile-friendly.</li>
        </ul>

        <h2>Join Our Thriving Community</h2>
        <p>WorkWise isn't just a job portal; it's a community of like-minded individuals committed to professional
            growth. Share insights, seek advice, and celebrate successes with fellow members.</p>

        <p>Ready to embark on your career journey? <a href="signup.php">Create your WorkWise account</a> today and
            unlock a
            world of possibilities!</p>
    </div>

    <?php include_once("footer.php")?>
