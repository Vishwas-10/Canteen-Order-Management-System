

<?php

include('header2.php');
include('config/db.php');
?>

<?php

$cart =  $_SESSION['cart'];


//  print_r($cart);

?>


<div class="container">
    <h2 class='text-center text-white'>Cart</h2>

    <table class="table table-bordered bg-white">
        <tr>
            <th>Food</th>
            <th>Food name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <?php
        $total = 0;
        foreach($cart as $key => $value){
            // echo $key ." : ". $value['quantity'] . "<br>";

            $sql = "SELECT * FROM food where food_id = $key";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result)
            ?>


            <tr>
                <td><img src="<?php echo $row['food_image']?> " alt=""></td>
                <td><?php echo $row['food_name']?></td>
                <td><?php echo $row['food_price']?> </td>
                <td><?php echo $value['quantity']?></td>
                <td><?php echo $row['food_price'] * $value['quantity'] ?> </td>
                <td><a href='deleteCart.php?id=<?php echo $key; ?>'>Remove</a></td>
            </tr>

            <?php

            $total = $total +  ($row['food_price'] * $value['quantity']);
        }

        ?>

    </table>

    <div class="text-right">
        <!-- <button class="btn mr-3">Update Cart</button> -->
        <form action="checkout.php">
            <button class="btn">Checkout</button>
        </form>


    </div>
    <div class="card">
        <div class="card-header">Total</div>
        <div class="card-body">
            Total Amount: INR <?php echo $total; ?>.00/-
        </div>
    </div>

</div>








<?php include('footer.php');  ?>
