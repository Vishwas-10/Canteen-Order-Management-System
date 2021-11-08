<?php
include('header.php');
session_start();
include('config/db.php');

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'] ;

    $sql = "SELECT * FROM user WHERE user_email= '$email'";
    echo $sql;

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dbStoredPASSWORD = $row['user_password'];

    if (password_verify ($password, $dbStoredPASSWORD)){
        $_SESSION['customer'] = $email;
        $_SESSION['customer_id'] =$row['user_id'];
        header('location:welcome.php');
    } else {
        header('location:index.php?message=1');
    }

}
?>

