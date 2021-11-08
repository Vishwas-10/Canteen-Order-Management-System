


<!-- DESERT -->
<div class="Food-Carousel" id="dese">
    <div class="container py-5">
        <h4 class="food_hd">DESERT</h4>
        <hr color= "#f85307">
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php

            $sql = "SELECT * FROM food where food_cat = 'Desert'";

            $result = mysqli_query($conn, $sql);

            while($item = mysqli_fetch_assoc($result)) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                ?>
            <div class="item py-2">
                <div class="product font-rale"></div>
                <a href="#"><img src="<?php echo $item['food_image'] ?? "./img/food/masala-dosa.jpg";?>" alt="food" class="img-fluid"></a>
                <div class="text-center py-2">
                    <h6 ><?php echo $item['food_name'] ?? "Masala Dosa";?></h6>

                    <div class="price">
                        <span>₹<?php echo $item['food_price'] ?? "50";?></span>
                    </div>
                    <form action="addToCart.php">
                        <input type="hidden" name='id' value='<?php echo  $item["food_id"] ?>'>
                        <input type="number" class="form-control" name="quantity" style="width:50px">

                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>