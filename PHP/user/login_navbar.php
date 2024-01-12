<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../CSS/login_navbar.css">
<div class="navbar" id="navbarid">

    <a href=""><img id="logo" src="../../Image/logo/logo1.png" alt="ss"></a>
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search Job</a>
    <a href="#"><i class="fa fa-group"></i> Find Freelancers</a>
    <a href="#"><i class="	fa fa-bookmark"></i> Save Job</a>
    <a href="#" id="login"><i class="fa fa-sign-out "></i> Logo Out</a>
    <a href="#" id="profile"><div class="pimge" style="background-image: url(../../Image/Home/w2.jpg);"></div> </a>

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