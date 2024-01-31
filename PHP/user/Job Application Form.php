<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php include("../conn.php"); ?>

<?php
  $userid = $_SESSION['id'];
if(isset($_GET['apply'])){
    $job = $_GET['jobId'];
    $sql="SELECT * FROM apply_job WHERE userid = '$userid' AND jobid = '$job'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0 ) {
        echo '<script> alert("You already applied .. ");window.location.href="user.php"; </script>';
    } 
}
if (isset($_POST['submit'])) {
    $jobid = $_POST['jobid'];
 
        $sql="INSERT INTO apply_job (userid, jobid) VALUES('$userid','$jobid');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script> alert("Job applied successfully");window.location.href="user.php"; </script>';
        } else {
            echo '<script> alert("Applied Failed");window.location.href="find_freelancers.php";</script>';
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <title>Job Application Form</title>
    <style>
        body {
            font-family: Times New Roman, serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            padding: 12px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
            font-family: Times New Roman, serif;
        }

        #full_name {
            border-radius: 15px;
        }

        #email {
            border-radius: 15px;
        }

        #phone {
            border-radius: 15px;
        }

        #resume {
            border-radius: 15px;
        }

        #cover_letter {
            border-radius: 15px;
        }

        .submit {
            margin-left: 200px;


        }

        #backlink {
            font-size: 24px;
            margin: 0;
        }

        #job {
            margin-top: 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <a id="backlink" href="find_freelancers.php"><i class="glyphicon glyphicon-menu-left"></i></a>

        <h2 id="job">Job Application Form</h2>
        <form action="Job Application Form.php" method="POST" enctype="multipart/form-data">

            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="resume">Upload CV (PDF or Word):</label>
            <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" >

            <label for="cover_letter">Cover Letter:</label>
            <textarea id="cover_letter" name="cover_letter" rows="4" required></textarea>
            <input type="hidden" name="jobid" value="<?php echo $_GET['jobId']; ?>">

            <div class="submit"><button type="submit" name="submit">Submit Application</button>
            </div>

        </form>
    </div>

</body>

</html>