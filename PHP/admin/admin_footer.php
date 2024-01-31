<style>
    /* -- Footer -- */

    footer {
        background-position: center;

        line-height: 1.2;
        scroll-behavior: smooth;
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        margin-top: 150px;
        background-color: rgb(2, 54, 2);

        padding: 60px 10%;
    }

    ul {
        list-style: none;
    }

    .footer-column {
        width: 25%;
    }

    .footer-column h4 {
        position: relative;
        margin-bottom: 30px;
        font-weight: 500;
        font-size: 21px;
        color: rgb(45, 221, 180);
        text-transform: capitalize;
    }

    .footer-column h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        background-color: rgb(85, 182, 243);
        height: 2px;
        width: 40px;
    }

    ul li:not(:last-child) {
        margin-bottom: 8px;
    }

    ul li a {
        display: block;
        font-size: 16px;
        text-transform: capitalize;
        color: rgb(255, 255, 255);
        text-decoration: rgb(0, 0, 0);
        transition: 1s;
    }

    footer ul li a:hover {
        color: rgb(187, 88, 215);
        padding-left: 7px;
    }

    .text {
        text-align: center;
        font-size: 22px;
        color: rgb(255, 255, 255);
        margin: auto;
        width: 100%;
    }

    @media(max-width:740px) {
        .footer-column {
            width: 50%;
            margin-bottom: 30px;
            text-align: center;
        }

        .footer-column h4::before {
            all: unset;
        }
    }

    @media(max-width:555px) {
        .footer-column {
            width: 100%;
        }
    }

    /* -- Footer -- */
</style>
<!-- <link rel="stylesheet" href="../CSS/footer.css" > -->


<footer>

    <div class="footer-column">
        <h4>JOb Category</h4>
        <ul>
            <li> <a href="find_job.php">All </a></li>
            <li> <a href="job_category.php?ctg=Graphics">Graphics & Design </a></li>
            <li> <a href="job_category.php?ctg=Programming">Programming & Tech</a></li>
            <li> <a href="job_category.php?ctg=Digital">Digital Marketing </a></li>
            <li> <a href="job_category.php?ctg=Video">Video & Animation </a></li>
            <li> <a href="job_category.php?ctg=Writing">Writing & Translation </a></li>
            <li> <a href="job_category.php?ctg=Music">Music & Audio </a></li>
            <li> <a href="job_category.php?ctg=Business">Business </a></li>
            <li> <a href="job_category.php?ctg=AI">AI Services </a></li>
            <li> <a href="job_category.php?ctg=New">New* </a></li>

        </ul>
    </div>




    <div class="footer-column">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">Career</a></li>
            <li><a href="#">Press & News</a></li>
            <li><a href="#">Partnerships</a></li>
            <li><a href="#">Terms of Service</a></li>


        </ul>
    </div>
    <div class="footer-column">
        <h4>Support </h4>
        <ul>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Trust & Safety</a></li>

        </ul>
    </div>

    <div class="footer-column">
        <h4>My Account</h4>
        <ul>
            <li><a href="#">My account</a></li>
            <li><a href="#">Find Talenter </a></li>
            <li><a href="#">Find Freelance </a></li>

        </ul>
    </div>

        <div class="text">
            <P> &copy; Copyright 2023 workwise Group. All right reserved </P>
        </div>


</footer>
<!-- Footer -->

</body>

</html>