<?php
session_start();
include('config/db.php');
$cart =  $_SESSION['cart'];
$cid = $_SESSION['customer_id'];

if(isset($_SESSION['cart'])) {
    $total = 0;
    foreach ($cart as $key => $value) {
        $sql_cart = "SELECT * FROM food where food_id = $key";
        $result_cart = mysqli_query($conn, $sql_cart);
        $row_cart = mysqli_fetch_assoc($result_cart);
        $total = $total + ($row_cart['food_price'] * $value['quantity']);
    }

    $insertOrders = "INSERT INTO orders (user_id, order_price, order_payment) VALUES ('$cid', '$total', 'Order Placed')";

    if (mysqli_query($conn, $insertOrders)) {
        $orderid = mysqli_insert_id($conn);
        foreach ($cart as $key => $value) {
            $sql_cart = "SELECT * FROM food where food_id = $key";
            $result_cart = mysqli_query($conn, $sql_cart);
            $row_cart = mysqli_fetch_assoc($result_cart);
            $price_food = $row_cart['food_price'];
            $q = $value['quantity'];
            $insertOrdersitems = "INSERT INTO ordersItems (orders_id, food_id, quantity, food_price ) VALUES ('$orderid', '$key', '$q','$price_food')";

            if (mysqli_query($conn, $insertOrdersitems)) {
            }
            header('location:thankyou.php');
        }

    }
}

?>