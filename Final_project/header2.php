<?php
    session_start();
    include('config/db.php');
    if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) ) {
        header('location:index.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final_Project</title>

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">


    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
<!-- Header section (START)-->
<header id="header">
    <!-- Navigation bar (START) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent color-second-bg">
        <a class="navbar-brand" href="welcome.php">HO<span>T C</span>HIX<span>.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto nav-fill">
                <li class="nav-item ">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu-grid">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">ABOUT</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">CONTACT</a>
                </li>
            </ul>
            <button class="btn_login text-white px-2"><a href="logout.php" class="text-decoration-none text-white" >LOG OUT</a></button>

            <form action="#" class="cart">
                <?php
                $count = '';

                if(isset($_SESSION['cart'])){
                    $cart = $_SESSION['cart'];
                    $count = count($cart);
                }
                ?>
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo $count?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- Navigation bar (END)-->
</header>
<!-- Header section (END)-->
<main id="main-site">
