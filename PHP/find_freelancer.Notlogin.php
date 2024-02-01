<?php $active3 = "active"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/find_freelancers.css">
    <title>Find Freelancers</title>
</head>

<body>
<header>
        <link rel="stylesheet" href="../CSS/header.css">
        <div class="headerbar">
            <h3>The #1 Site for Remote Jobs</h3>
        </div>
    </header>

    <?php include_once("navbar.php"); ?>

    <div class="container">
        <a id="backlink" href="index.php"><i class="glyphicon glyphicon-menu-left"></i></a>
        <h1 id="find">Find Freelancers</h1>
        <p>Welcome to our "<strong>Find Freelancers</strong>" section, a space dedicated to showcasing your creative
            projects and talents! Whether you're an artist, designer, photographer, or a creator in any other field, we
            invite you to share your work with our community.</p>
        <p><strong>How it Works:</strong></p>
        <ol>
            <li><strong>Fill in the Details:</strong> Provide a title, a brief description of your work, and specify the
                category it falls under.</li>
            <br>
            <li><strong>Payment :</strong>
                <ul>
                    <li>One Week &emsp;&emsp;: $10</li>
                    <li>Two Week &emsp;&emsp;: $20</li>
                    <li>Three Week &emsp; : $30</li>
                    <li>Month&emsp;&emsp;&emsp;&emsp; : $35</li>
                </ul>
            </li>
            <br>
            <li><strong>Submit Your Work:</strong> Hit the submit button, and your work will be shared with our
                community.</li>
        </ol>
        <p><strong>Guidelines:</strong></p>
        <ul>
            <li>Please ensure that your content adheres to our community guidelines.</li>
            <li>Include a descriptive title and relevant category for easy navigation.</li>
            <li>Provide a concise yet informative description of your work.</li>
            <li>Only upload images that you have the right to share.</li>
        </ul>

        <p><strong>Note:</strong> Your submitted work may go through a brief review process before being featured on our
            platform. We appreciate your contribution to our creative community!</p>
        <a id="next" href="login.php"> Login </a>

    </div>
    <?php include_once('footer.php')?>
