<?php include('header.php');

include('config/db.php');

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $hostelno = mysqli_real_escape_string($conn, $_POST['hostelno']);
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    //  $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

    $sql = "INSERT INTO user (user_name, user_email, user_password, user_hostel_no ) VALUES ('$name', '$email', '$password', '$hostelno' )";

// $result = mysqli_query($conn, $sql);



    if (mysqli_query($conn, $sql)) {
        $_SESSION['customer'] = $email;
        header('location:index.php');
    } else {
        header('location:index.php?message=2');
        echo("Error description: " . mysqli_error($conn));
    }






}




?>