<?php include("conn.php"); ?>
<?php $conn->close(); ?>
<?php session_destroy(); ?>
<?php session_start(); ?>
<?php if(session_start()) {
    session_destroy();
} ?>

<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>