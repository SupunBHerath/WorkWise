<?php require_once('conn.php') ?>


<?php 
if(isset($_POST['change'])){
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['cpassword'];
    
    if ($password1 ==$password2) {
        $hashpassword = password_hash($password1, PASSWORD_DEFAULT);
        
        $sql = "UPDATE `users` SET `password` = ? WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $hashpassword, $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    
        echo '<script> alert("Password Changed Successfully");window.location.href="login.php";</script>';
    } else {
        echo '<script> alert("Passwords do not match");window.location.href="froget_password.php";</script>';
        
    }
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $qusation = $_POST['qusation'];
    $answer = $_POST['answer'];
    $sql = "SELECT * FROM users WHERE email =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['question'] == $qusation) {
            if (password_verify($answer, $row["answer"])) {
                $none1='none';
                $none2='block';

            } else {
                echo '<script> alert("Invalid answer.");window.location.href="froget_password.php";</script>';
            }
        } else {
            echo '<script> alert("Invalid qustion.");window.location.href="froget_password.php";</script>';
        }
    } else {
        $conn->close();
        header('location:index.php');
    }
}else{
    $none1='block';
    $none2='none';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <style>
        select {
            width: 200px;
            height: 35px;
            font-weight: 600;
            width: 100%;

            margin-bottom: 20px;
            margin-top: 5px;
            border-radius: 5px;
        }

        .hidden {
            display: none;
        }
    </style>

</head>

<body>

    <div class="login-container  hidden" id="check_password" style="display: <?php echo $none1?>;">
        <a href="index.php"> <img src="../Image/logo/logo1.png" alt="logo" class="logo"></a>
        <a href="index.php"><img src="../Image/logo/X.png" alt="x" style="float: inline-end; width: 20px; height: 20px;"></a>
        <br><br>
        <h2>Update your password</h2><br>
        <label for=""></label>
        <form class="loginform" action="froget_password.php" method="post">
            <div class="form-group">
                <label for="email" style="text-align: left;">Email </label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            </div>
            <div class="form-group">
                <label for="password" style="text-align: left;">Select your questions and password</label>
                <select name="qusation" required>
                    <option value="What is your favourite color">What is your favourite color</option>
                    <option value="What is your favourite color">What is your favourite color</option>
                    <option value="What is your favourite color">What is your favourite color</option>
                    <option value="What is your favourite color">What is your favourite color</option>
                </select>
                <input type="text" id="text" name="answer" placeholder="Enter your answer" required>
            </div>

            </h5>
            <div class="form-group" id="loginbtn">
                <button type="submit" name="submit">Submit</button>

            </div>

        </form>
        <h5 style="color: red;"> -- Don't you have WorkWise account?<a href="signup.php" style="border: 0; font-size: small; text-decoration: underline;">Sign Up</a>
        </h5>
    </div>



    <div class="login-container  hidden " id="new_password" style="display: <?php echo $none2?>;">
        <a href="index.php"> <img src="../Image/logo/logo1.png" alt="logo" class="logo"></a>
        <a href="index.php"><img src="../Image/logo/X.png" alt="x" style="float: inline-end; width: 20px; height: 20px;"></a>
        <br><br>
        <h2>Update your password</h2><br>
        <label for=""></label>
        <form class="loginform" action="froget_password.php" method="post">
            <div class="form-group">
                <label for="password" style="text-align: left;">Enter your new Password </label>
                <input type="password" id="password" name="password" pattern=".{8,}" title="Password must be at least 8 characters" required placeholder="Enter New Password (at least 10 characters)">
            </div>
            <div class="form-group">
                <label for="password2" style="text-align: left;">Confirm Password </label>

                <input type="password" id="password2" name="cpassword" placeholder="Enter agin Password">
            </div>

            </h5>
            <div class="form-group" id="loginbtn">
                <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                <button type="submit" name="change">Change Password</button>

            </div>

        </form>
        <h5 style="color: red;"> -- Don't you have WorkWise account?<a href="signup.php" style="border: 0; font-size: small; text-decoration: underline;">Sign Up</a>
        </h5>
    </div>


    <script>
        // document.getElementById('check_password').style.display = 'block';

        function showElement(showFormId, hideFormId) {
            const showForm = document.getElementById(showFormId);
            const hideForm = document.getElementById(hideFormId);

            showForm.style.display = 'block';
            hideForm.style.display = 'none';
        }
    </script>

</body>

</html>