<?php include("../conn.php"); ?>
<?php
if (isset($_GET["apply"])) {
    $jobId = $_GET["jobId"];

    $sql = "SELECT * FROM jobtable WHERE jobId='$jobId'; ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


            <title>Document</title>
            <link rel="stylesheet" href="../../CSS/more_details.css">
        </head>

        <body>
            <div class="job_listings">
                <div class="job_row">
                    <div class="job">
                        <button id="bookmark" type="submit"><i class="fa fa-bookmark"></i></button>
                        <h2>
                            <?php echo $row['title']; ?>
                        </h2>

                        <div class="job_details">
                            <div class="details">
                                </p>
                                <table>
                                    <tr>
                                        <td class="subtitle">Job Type</td>
                                        <td> <?php echo $row['jobType']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="subtitle">Company</td>
                                        <td>
                                            <?php echo $row['company']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="subtitle">Location</td>
                                        <td>
                                            <?php echo $row['location']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="subtitle">Price</td>
                                        <td>
                                            <?php echo $row['price']; ?> per monthly
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="subtitle">Exit Day:</td>
                                        <td><span style="color: rgba(255, 0, 0, 0.601);">
                                                <?php echo $row['exitDay']; ?>
                                            </span></td>
                                    </tr>
                                </table>
                                <br>
                                <p>Responsibilities:</p>
                                <ul>
                                    <li>
                                        <?php echo $row['responsibilities']; ?>
                                    </li>
                                </ul>
                                <br>
                                <p>Requirements:</p>
                                <ul>
                                    <li>
                                        <?php echo $row['requirements']; ?>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    <?php

    }
} else {
    header('location:../login.php');
    mysqli_close($conn);
} ?>
                <center>
                    <form action="apply.php" method="get">
                        <button class="apply-btn" type="submit" name="apply">
                            <input type="hidden" name="jobId" value="<?php echo $row['jobId']; ?>">
                            Apply Now <i class="fas fa-info-circle"></i>
                        </button>
                    </form>
                </center>

            </div>
        </div>

</body>

</html>