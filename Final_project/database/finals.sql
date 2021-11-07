
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `food` (
                           `food_id` int(11) NOT NULL,
                           `food_name` varchar(200) NOT NULL,
                           `food_category` varchar(255) NOT NULL,
                           `food_price` double(10,2) NOT NULL,
                            `food_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_cat`, `food_price`, `food_image`) VALUES
                                                                                        (1, 'Aloo Parantha', 'Breakfast', 30.00,'./img/food/Aloo-parantha.jpg'),
                                                                                        (2, 'Chole Bhature', 'Breakfast', 30.00,'./img/food/chole-bhature.jpg'),
                                                                                        (3, 'Masala Dosa', 'Breakfast', 50.00,'./img/food/masala-dosa.jpg'),
                                                                                        (4, 'Pancake', 'Breakfast', 40.00,'./img/food/pancake.jpg'),
                                                                                        (5, 'Pav Bhaji', 'Breakfast', 30.00,'./img/food/pav-bhaji.jpg'),
                                                                                        (6, 'Uttapam', 'Breakfast', 40.00,'./img/food/uttapam.jpg'),
                                                                                        (7, 'Vada Pav', 'Breakfast', 20.00,'./img/food/vada-pav.jpg'),
                                                                                        (8, 'Vada Sambhar', 'Breakfast', 25.00,'./img/food/vada-sambar.jpg'),

                                                                                        (9, 'Butter Naan', 'Lunch', 15.00,'./img/food/butter-nan.jpg'),
                                                                                        (10, 'Caesar Salad', 'Lunch', 50.00,'./img/food/caesar-salad.jpg'),
                                                                                        (11, 'Dal Makhni', 'Lunch', 50.00,'./img/food/dal-makhni.jpg'),
                                                                                        (12, 'Garlic Naan', 'Lunch', 20.00,'./img/food/garlic-nan.jpg'),
                                                                                        (13, 'Kadhai Paneer', 'Lunch', 50.00,'./img/food/kadhai-paneer.jpg'),
                                                                                        (14, 'Lemon Rice', 'Lunch', 30.00,'./img/food/lemon-rice.jpg'),
                                                                                        (15, 'Paneer Butter Masala', 'Lunch', 50.00,'./img/food/paneer-butter-masala.jpg'),
                                                                                        (16, 'Roti', 'Lunch', 10.00,'./img/food/roti.jpg'),
                                                                                        (17, 'Shahi Paneer', 'Lunch', 50.00,'./img/food/shahi-paneer.jpg'),

                                                                                        (18, 'Burger', 'Snacks', 45.00,'./img/food/burger.jpg'),
                                                                                        (19, 'Cheesy Meatballs', 'Snacks', 30.00,'./img/food/cheesy-meatballs.jpg'),
                                                                                        (20, 'Chicken Tikka Wrap', 'Snacks', 50.00,'./img/food/chicken-tikka-wrap.jpg'),
                                                                                        (21, 'Fries', 'Snacks', 25.00,'./img/food/fries.jpg'),
                                                                                        (22, 'Garlic Bread', 'Snacks', 50.00,'./img/food/garlic-bread.jpg'),
                                                                                        (23, 'Momos', 'Snacks', 40.00,'./img/food/momos.jpg'),
                                                                                        (24, 'Pizza', 'Snacks', 100.00,'./img/food/pizza.jpg'),
                                                                                        (25, 'Potato Chilli Shots', 'Snacks', 30.00,'./img/food/potato-chilli-shots.jpg'),
                                                                                        (26, 'Potato Wedges', 'Snacks', 30.00,'./img/food/potato-wedges.jpg'),
                                                                                        (27, 'Samosa', 'Snacks', 20.00,'./img/food/samosa.jpg'),

                                                                                        (28, 'Biryani', 'Dinner', 80.00,'./img/food/biryani.jpg'),
                                                                                        (29, 'Butter Chicken', 'Dinner', 100.00,'./img/food/butter-chicken.jpg'),
                                                                                        (30, 'Chicken Tikka Masala', 'Dinner', 100.00,'./img/food/chicken-tikka-masala.jpg'),
                                                                                        (31, 'Egg Curry', 'Dinner', 100.00,'./img/food/egg-curry.jpg'),
                                                                                        (32, 'Fish Kebab', 'Dinner', 80.00,'./img/food/fish-kebab.jpg'),
                                                                                        (33, 'Rice', 'Dinner', 40.00,'./img/food/rice.jpg'),
                                                                                        (34, 'Soya Chap', 'Dinner', 100.00,'./img/food/soya-chap.jpg'),
                                                                                        (35, 'Tandori Roti', 'Dinner', 20.00,'./img/food/tandori-roti.jpg'),

                                                                                        (36, 'Cheese Cake', 'Desert', 40.00,'./img/food/cheese-cake.jpg'),
                                                                                        (37, 'Chocolate Pastry', 'Desert', 40.00,'./img/food/chocolate-pastry.jpg'),
                                                                                        (38, 'Gulab Jamun', 'Desert', 20.00,'./img/food/gulab-jamun.jpg'),
                                                                                        (39, 'Hazelnut Brownie', 'Desert', 40.00,'./img/food/hazelnut-brownie.jpg'),
                                                                                        (40, 'Lava Cake', 'Desert', 40.00,'./img/food/lava-cake.jpg'),
                                                                                        (41, 'Payasam', 'Desert', 30.00,'./img/food/payasam.jpg'),
                                                                                        (42, 'Rasmalai', 'Desert', 30.00,'./img/food/rasmalai.jpg'),
                                                                                        (43, 'Red Velvet Pastry', 'Desert', 40.00,'./img/food/red-velvet-pastry.jpg'),

                                                                                        (44, '7 up', 'Drinks', 20.00,'./img/food/7-up.jpg'),
                                                                                        (45, 'Fruit Juice', 'Drinks', 20.00,'./img/food/fruit-juice.jpg'),
                                                                                        (46, 'Ice Tea', 'Drinks', 25.00,'./img/food/ice-tea.jpg'),
                                                                                        (47, 'Mango Lassi', 'Drinks', 25.00,'./img/food/mango-lassi.jpg'),
                                                                                        (48, 'Milk Shake', 'Drinks', 25.00,'./img/food/milk-shake.jpg'),
                                                                                        (49, 'Mirinda', 'Drinks', 20.00,'./img/food/mirinda.jpg'),
                                                                                        (50, 'Mountain Dew', 'Drinks', 20.00,'./img/food/mountain-dew.jpg'),
                                                                                        (51, 'Pepsi', 'Drinks', 20.00,'./img/food/pepsi.jpg'),
                                                                                        (52, 'Red Bull', 'Drinks', 20.00,'./img/food/red-bull.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(100) NOT NULL,
                        `last_name` varchar(100) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
                                                                               (1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
                                                                               (2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
                            `cart_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;