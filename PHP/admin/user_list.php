<?php include("../conn.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/user_list.css">
    <title>Document</title>
    <style>

    </style>
</head>
<?php include_once 'admin_navbar.php'; ?>

<body>
    <form action="user_list.php" method="get">
        <ul class="btn">
            <li><button type="submit" name="all" value="all">All</button></li>
            <li><button type="submit" name="user" value="user">Users</button></li>
            <li><button type="submit" name="admin" value="admin">Admin</button></li>
        </ul>
    </form>
    <table>
        <thead>
            <th>No</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <?php
        if (isset($_GET['admin'])) {
            $admin = 'admin';
            $sql = "SELECT * FROM users WHERE role = '$admin';";
        } elseif (isset($_GET['user'])) {
            $user = 'user';
            $sql = "SELECT * FROM users WHERE role = '$user';";
        } else {
            $sql = "SELECT * FROM `users`";
        }
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tbody>
                    <tr>
                        <td id="idNumber">
                            <?php echo $count; ?>
                        </td>
                        <td id="idNumber">WW<?php echo $row['userid']; ?></td>
                        <td>
                            <?php echo $row['fName'] . ' ' . $row['lName']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>

                        </td>
                        <td id="btntd">
                            <form action="renter_password.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $row['userid']; ?>">
                                <button type="submit" name="edit" value="edit">Edit</button>
                                <button id="delbtn" type="submit" name="delete" value="delete">Deleted</button>
                            </form>
                        </td>
                    </tr>

            <?php $count++;
            }
        }
            ?>
                </tbody>
    </table>


</body>

</html>