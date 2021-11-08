<?php
session_start();
if(isset($_GET['id'])){

    $quantity = $_GET['quantity'];

    $id = $_GET['id'];

    $_SESSION['cart'][$id] = array('quantity' => $quantity);

    header('location:welcome.php');

    echo '<pre>';
    print_r($_SESSION['cart']);
    echo '</pre>';

    //echo '<pre>';
    //print_r($_SESSION['cart']);
    //echo '</pre>';
}
?>