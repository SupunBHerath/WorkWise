<?php
session_start(); 
include("../conn.php");
    if(isset($_GET['delete'])){
        $delete=true;
        $id = $_GET['id'];

    }
    if (isset($_POST['submit'])) {
        $email = $_SESSION["email"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        $delete = $_POST["delete"];
        
        
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                if (password_verify($password, $row["password"])) {
                    if($delete) {
                        $delete_sql = "DELETE FROM users WHERE userid = ?";
                        $delete_stmt = mysqli_prepare($conn, $delete_sql);
                        mysqli_stmt_bind_param($delete_stmt, "i", $id);
                        
                        if (mysqli_stmt_execute($delete_stmt)) {
                            header("location:user_list.php");
                            exit();
                        } else {
                            echo '<script> alert("Error deleting user");</script>';
                        }
                    } else {
                        echo '<script> alert("Invalid delet request");</script>';
                    }
                } else {
                    echo '<script> alert("Incorrect password");</script>';
                }
            } else {
                echo '<script> alert("User not found");</script>';
            }
        } else {
            echo '<script> alert("Erro");</script>';
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
    <link rel="stylesheet" href="../../CSS/login.css">

</head>

<body>
    <div class="login-container">
        <a href="index.php"> <img src="../../Image/logo/logo1.png" alt="logo" class="logo"></a>
        <a href="index.php"><img src="../../Image/logo/X.png" alt="x" style="float: inline-end; width: 20px; height: 20px;"></a>
        <br><br>
        <h2>Re-enter Password</h2><br>
        <form class="loginform" action="renter_password.php" method="POST">
            <div class="form-group">
                <label for="password" style="text-align: left;">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="hidden" name="delete" value="<?php echo $delete;?>">

            </div>

            <div class="form-group" id="loginbtn">
                <button type="submit" name="submit" value="submit">Deleted</button>
            </div>
        </form>

    </div>

</body>

</html>