<?php
// Include header.php
include('header2.php');
include('config/db.php');
if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) ){
    header('location:index.php');
}
?>

<?php
// Include login-page
include('_login-page.php');
?>

<?php
// Include Hero-carousel
include('Template/_hero-carousel.php');
?>

<?php
// Include Menu-grid
include('Template/_menu-grid.php');
?>
<?php
// Include breakfast
include('Template/_breakfast.php');
?>
<?php
// Include lunch
include('Template/_lunch.php');
?>
<?php
// Include snack
include('Template/_snacks.php');
?>
<?php
// Include dinner
include('Template/_dinner.php');
?>
<?php
// Include desert
include('Template/_desert.php');
?><?php
// Include drinks
include('Template/_drinks.php');
?>



<?php
// Include footer .php
include('footer.php');
?>