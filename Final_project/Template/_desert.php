<?php
$food_shuffle  = $food->getFoodData('Desert')
?>


<!-- DESERT -->
<div class="Food-Carousel" id="dese">
    <div class="container py-5">
        <h4 class="food_hd">DESERT</h4>
        <hr color= "#f85307">
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($food_shuffle as $item){?>
            <div class="item py-2">
                <div class="product font-rale"></div>
                <a href="#"><img src="<?php echo $item['food_image'] ?? "./img/food/masala-dosa.jpg";?>" alt="food" class="img-fluid"></a>
                <div class="text-center py-2">
                    <h6 ><?php echo $item['food_name'] ?? "Masala Dosa";?></h6>

                    <div class="price">
                        <span>₹<?php echo $item['food_price'] ?? "50";?></span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>