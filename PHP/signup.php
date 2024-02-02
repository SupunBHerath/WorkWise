<?php include("conn.php") ?>
<?php if(session_start()) {
    session_destroy();
} ?>
<?php
if (isset($_POST["submit"])) {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $qusation = $_POST["qusation"];
    $answer = $_POST["answer"];

    if (empty($fName) && empty($lName) && empty($email) && empty($password) && empty($cpassword) && empty($answer)) {
        echo '<script> alert("Enter the data..")</script>';
    } else {
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<script> alert("The email already exists.")</script>';
            $conn->close();

        } else {
            if ($password == $cpassword) {
                $hashpassword = password_hash("$password", PASSWORD_DEFAULT);
                $hashanswer=password_hash($answer, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` ( `fName`, `lName`, `email`, `password`, `question`, `answer`) VALUES (?,?,?,?,?,?);";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $fName, $lName, $email, $hashpassword, $qusation, $hashanswer);
                $stmt->execute();
            echo '<script> alert("Register successfully");window.location.href="login.php"; </script>';

                header("location:login.php");
                $stmt->close();
                
            }
        }
    }

}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signup.css">
    <title>Sign Up</title>
</head>

<body>

    <form action="signup.php" method="post">
        <div class="form">
            <a href="index.php"> <img src="../Image/logo/logo1.png" alt="logo" class="logo"></a>
            <a href="index.php"><img src="../Image/logo/X.png" alt="x"
                    style="float: inline-end; width: 20px; height: 20px;"></a>

            <br><br><br>
            <h2>Sign up to find work you love </h2>
            <br>
            <input type="text" id="firstName" name="fName" placeholder=" First name" required>

            <input type="text" id="lastName" name="lName" placeholder="Last name" required>
            <br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            <br>
            <input type="password" id="password" name="password" pattern=".{8,}" title="Password must be at least 8 characters" required placeholder="Enter Password (at least 10 characters)">
            <br>
            <input type="password" id="confirmpassword" name="cpassword" placeholder="Confirm password" required>
            <br>
            <select name="qusation">
                <option value="What is your favourite color">What is your favourite color</option>
                <option value="What is your favourite color">What is your favourite color</option>
                <option value="What is your favourite color">What is your favourite color</option>
                <option value="What is your favourite color">What is your favourite color</option>
            </select>
            <input type="text" name="answer" placeholder="Enter your answer" required>
            <label>If you forget your password you need to <span style="font-style:italic; color:red;">remember</span>
                this answer <br> to
                recover your account</label>

            <center>
                <br>
                <button type="submit" id="S1" name="submit">Sign Up</button>
            </center>

            <h5 style="color: red;"> -- Already have WorkWise an account ? <a href="../HTML/Login.html"
                    style="border: 0; ">Login</a>

        </div>
    </form>
   
</body>

</html>
<?php $conn->close(); ?>
