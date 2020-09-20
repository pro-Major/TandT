<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ph.css">
<link rel="stylesheet" href="css/ph_theme.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/font_style.css">
<link rel="stylesheet" href="css/view_customer.css">




<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.p-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

.polaroid {
  width: 500px;
  height:400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  background-color:#ffffff;
  margin-bottom:2%;
  margin-top:2%;
}
.modal-content 
{
	 margin: 0% auto 0% auto;
    background-color:#f1f1f1;
	width: 100%; /* Could be more or less, depending on screen size */
	border-radius: 25px;

}
.p-display-leftmid{position:absolute;top:15%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%);}

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
.column {
    float: left;
	margin-left:5%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 2; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 0.9;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>
<body>

<!-- Navbar -->
<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
   
	<a href="#" class="p-bar-item p-button p-hide-small p-hover-white  p-white">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white">Contact Us</a>
   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>
<?php include('slider.php'); ?>

<!--/Slideshow container --> 
<div id="id01" class="">
  <h2 class="userlogin" style="text-shadow: 1px 1px;" align="center">Let's Measure The World...</h2><<br><br>
 
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

<?php include('footer.php') ?>
<!-- END MAIN -->
</div>

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
