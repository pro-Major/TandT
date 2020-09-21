<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<title>Tour and Travels</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/ph.css">
<link rel="stylesheet" href="css/ph_theme.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/font_style.css">
<link rel="stylesheet" href="css/view_customer.css">
<link rel="stylesheet" href="css/customcss.css">
<body>

<!-- Navbar -->
<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
	<a href="#" class="p-bar-item p-button p-hide-small p-hover-white  p-white">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white">Contact Us</a>
 
	<?php
		myaccountstatus();
	?>
  </div>
</div>
<!-- Slideshow container -->
<?php include('slider.php'); ?>
<!--/Slideshow container --> 
<div id="id01" class="">
  <h2 class="userlogin" style="text-shadow: 1px 1px;" align="center">Let's Measure The World...</h2><br><br>
 
	<h3 class="p-text-teal" align="center">
     We specialize in customized/tailor-made tours to India as well as international tour packages. All our itineraries are customizable. Browse through our sample tour packages for your trip to Indian Subcontinent.
    </h3><br>
</div>
<div >    
 </div>
<!--End slide show for upper images -->
<!-- Contains the packages -->
<?php
global $con;
$q="select * from package order by RAND() LIMIT 0,4";
$run_q=mysqli_query($con, $q);
?>
 <div id="id01" class="">
  
  <div class="modal-content">
  <h2  style="text-shadow: 1px 1px;" align="center">Some of Our Popular Packages...</h2><br>
    <div class="container p-card-4" >

	<?php 
		while($row_q=mysqli_fetch_array($run_q))
		{
			
			$id = $row_q['id'];
			$name = $row_q['name'];
			$image=$row_q['image'];
	?>
	<div class="row">
	<div class="polaroid column" style="display:table;" ><a href="package.php?view_package_detail=<?php echo "$id"; ?>"  style="text-decoration: none;">
	  <img src="package_images/<?php echo"$image";?>" alt="Norway" style="width:100%">
	  
    <h2><?php echo"$name";?></h2>
	</a>
	</div>
	
	<?php
			$row_q=mysqli_fetch_array($run_q);
			$id = $row_q['id'];
			$name = $row_q['name'];
			$image=$row_q['image'];
		
	?>
	<div class="polaroid column" style="display:table;"><a href="package.php?view_package_detail=<?php echo "$id"; ?>"  style="text-decoration: none;">
	  <img src="package_images/<?php echo"$image";?>" alt="Norway" style="width:100%">
	  
    <h2><?php echo"$name";?></h2>
	</a>
	</div>
	</div>
	<?php
		}
	?>

	</div>
  </div>
 </div>
<br>
<!-- Gallery Starts Here -->
<h3 style="text-align: center; width:bolder;"> <span> <img src="img/star.png" alt=""> <span> Gallery
		  <img src="img/star.png" alt=""><span></span> </h3>
<br>
<?php include('gallery.php') ?>
<!-- Gallery Ends Here -->
<!-- Footer start --> 

<!--  Footer End  -->
<!-- END MAIN -->

<?php include('footer.php') ?>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function p_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function p_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
