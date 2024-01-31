<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../CSS/login_navbar.css">
<div class="navbar" id="navbarid">
    
    <a href=""><img id="logo" src="../../Image/logo/logo1.png" alt="ss"></a>
    <a class="<?php echo $active1?>" href="admin_home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="<?php echo $active2?>" href="admin_dashbord.php" ><i class="fa fa-fw fa-search"></i>Admin Dashboard</a>
    <a class="<?php echo $active5?>" href="../index.php" id="login"><i class="fa fa-sign-out "></i> Logo Out</a>
    <a class="<?php echo $active6?>" href="admin_profile.php" id="profile"><div class="pimge" style="background-image: url(../user/UploadImage/<?php echo $_SESSION['image'];?>);"></div> </a>

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