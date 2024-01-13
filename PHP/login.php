<?php include("conn.php") ?>
<?php
// session_destroy();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            if (password_verify($password, $row["password"])) {
                if ($row["role"] == 'user') {
                    session_start();
                    $_SESSION['id'] = $row['userid'];
                    $_SESSION['user'] = $row['fName'];
                    $_SESSION['email'] = $row['email'];
                    header('location:user/user.php');
                    exit();
                } else {
                    session_start();
                    $_SESSION['id'] = $row['userid'];
                    $_SESSION['user'] = $row['fName'];
                    $_SESSION['email'] = $row['email'];
                    header('location:admin/admin.php');
                    exit();
                }
            } else {

                echo '<script> alert("Incorrect password");</script>';
            }
        } else {

            echo '<script> alert("User not found");</script>';
        }
    } else {

        echo '<script> alert("Error fetching user data");</script>';
    }


    mysqli_stmt_close($stmt);
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/login.css">

</head>

<body>
    <div class="login-container">
        <a href="index.php"> <img src="../Image/logo/logo1.png" alt="logo" class="logo"></a>
        <a href="index.php"><img src="../Image/logo/X.png" alt="x"
                style="float: inline-end; width: 20px; height: 20px;"></a>
        <br><br>
        <h2>Login to WorkWise</h2><br>
        <form class="loginform" action="login.php" method="post">
            <div class="form-group">
                <label for="username" style="text-align: left;">Email</label>
                <input type="email" id="username" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password" style="text-align: left;">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <h5 id="fp"><a href="#">Forgot password ?</a>
            </h5>
            <div class="form-group" id="loginbtn">
                <button type="submit" name="submit">Login</button>

            </div>

        </form>
        <h5 style="color: red;"> -- Don't you have WorkWise account?<a href="signup.php"
                style="border: 0; font-size: small; text-decoration: underline;">Sign Up</a>
        </h5>
    </div>

</body>

</html>