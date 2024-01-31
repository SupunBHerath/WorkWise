<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../CSS/login_navbar.css">
<div class="navbar" id="navbarid">
    
    <a href=""><img id="logo" src="../../Image/logo/logo1.png" alt="ss"></a>
    <a class="<?php echo $active1?>" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="<?php echo $active2?>" href="user.php" ><i class="fa fa-fw fa-search"></i> Search Job</a>
    <a class="<?php echo $active3?>" href="find_freelancers.php"><i class="fa fa-group"></i> Find Freelancers</a>
    <a class="<?php echo $active4?>" href="save_job.php"><i class="	fa fa-bookmark"></i> Save Job</a>
    <a class="<?php echo $active3?>"  href="#"><i class="fa "></i> Contact us</a>
    <a class="<?php echo $active5?>" href="../index.php" id="login"><i class="fa fa-sign-out "></i> Logo Out</a>
    <a class="<?php echo $active6?>" href="profile.php" id="profile"><div class="pimge" style="background-image: url(UploadImage/<?php echo $_SESSION['image'];?>);"></div> </a>

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