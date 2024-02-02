
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/navbar.css">

    <style>

    </style>
</head>

<body>

    <div class="navbar" id="navbarid1">
        
        <a href="login_job_category.php?ctg=Graphics">Graphics & Design</a>
        <a href="login_job_category.php?ctg=Programming">Programming & Tech</a>
        <a href="login_job_category.php?ctg=Digital">Digital Marketing</a>
        <a href="login_job_category.php?ctg=Video">Video & Animation</a>
        <a href="login_job_category.php?ctg=Writing">Writing & Translation</a>
        <a href="login_job_category.php?ctg=Music">Music & Audio</a>
        <a href="login_job_category.php?ctg=Business">Business</a>
        <a href="login_job_category.php?ctg=AI">AI Services</a>
        <a href="login_job_category.php?ctg=New">New*</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("navbarid1");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

</body>

</html>