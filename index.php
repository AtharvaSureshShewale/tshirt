<?php
ob_start();
//include header php file
include("components/header.php");
?>

<?php
//include banner php file 
include("Template/_banner-area.php");

//include top scale php file
include("Template/_top-sale.php");

//include banner add php file
include("Template/_banner-adds.php");

//include new tshirts php file
include("Template/_new-tshirts.php");

//include latest blogs php file
include("Template/_blogs.php");

?>

 <?php
 //include footer php file
 include("components/footer.php")
 ?>
<!-- !start footer -->