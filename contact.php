<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<head>
	<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/ph.css">
	<link rel="stylesheet" href="css/ph_theme.css">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/font_style.css">
	<link rel="stylesheet" href="css/view_customer.css">
	
	<link rel="shortcut icon" href="logo.jpg" type="image/jpg">

<style>
.movingstyle{
     font-size: 20px;
    color: green;
    position: relative;
    -webkit-animation: mymove 10s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 10s;
    animation-iteration-count: infinite;
}

@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 100%;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 100%;}
}

.footerfont{
  font-size: 20px;
  font-family: monospace;
}

.back_image{
  background-image: url("contactuspics/bodyimg.jpg");
  font-family: "Times New Roman";
  background-size: 100% 100%;
  font-size: 18px;
}
</style>
</head>
<body>
	<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
    
	<a href="index.php" class="p-bar-item p-button p-hide-small p-hover-white ">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white  p-white">Contact</a>
   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>


	<div class="back_image">
	</br></br>
		<h1 align="center"><i>ABOUT US...</i></h1>
		<table style="color: black; " align="center" id="bolding">
			<tr>
				<td><img src="contactuspics/brijesh.png" style="width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;" ></td>
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Brijesh Vishwakarma</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>brijeshrv26@gmail.com</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-8976437651</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>Chembur</td>
						</tr>
					</table>
				</td>
			</tr>


			<tr align="right">
				
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Bipin Navik</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>bipinnavik@gmail.com</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-9768524514</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>Chembur</td>
						</tr>
					</table>
				</td>
				<td><img src="contactuspics/bipin.jpg" style="width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;" ></td>
			</tr>

			
			

		</table>
		
		
	</div>
</body>
</html>