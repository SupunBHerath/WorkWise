<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/navbar.css">
<div class="navbar" id="navbarid">

    <a href=""><img id="logo" src="../Image/logo/logo1.png" alt="ss"></a>
    <a class="<?php echo $active1?>" class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="<?php echo $active2?>" href="find_job.php"><i class="fa fa-fw fa-search"></i> Search Job</a>
    <a class="<?php echo $active3?>"  href="find_freelancer.Notlogin.php"><i class="fa fa-group"></i> Find Freelancers</a>
    <a class="<?php echo $active4?>"  href=""><i class="fa "></i> About Us</a>
    <a class="<?php echo $active5?>"  href="#"><i class="fa "></i> Contact us</a>

    <a class="<?php echo $active6?>" href="login.php" id="login"><i class="fa fa-fw fa-user "></i> Login</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>


<script>
    function myFunction() {
        var x = document.getElementById("navbarid");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>