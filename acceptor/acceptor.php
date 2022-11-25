<?php
session_start();
if (!isset($_SESSION['acceptor_id'])) {
	header("Location:../index.php");
}
date_default_timezone_set("Asia/Karachi");
$date=date('d-m-Y');
$uid=$_SESSION["acceptor_id"];
include '../dbcon.php';

if (isset($_POST['old'])) {
	$title=$_POST['title1'];
	$description=$_POST['description1'];
	$sql = "INSERT INTO requests (acc_id, title, description, status,update_date)
VALUES ('$uid','$title', '$description', '0','$date')";
if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Request Send Successfully!');</script>";
   echo "<script> window.location.href = 'acceptor.php';</script>";
}
}

if (isset($_POST['blood'])) {
	$title=$_POST['title2'];
	$description=$_POST['description2'];
	$sql = "INSERT INTO requests (acc_id, title, description, status,update_date)
VALUES ('$uid','$title', '$description', '0','$date')";
if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Request Send Successfully!');</script>";
   echo "<script> window.location.href = 'acceptor.php';</script>";
}
}
if (isset($_POST['persons'])) {
	$title=$_POST['title3'];
	$description=$_POST['description3'];
	$sql = "INSERT INTO requests (acc_id, title, description, status,update_date)
VALUES ('$uid','$title', '$description', '0','$date')";
if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Request Send Successfully!');</script>";
   echo "<script> window.location.href = 'acceptor.php';</script>";
}
}
if (isset($_POST['education'])) {
	$title=$_POST['title4'];
	$description=$_POST['description4'];
	$sql = "INSERT INTO requests (acc_id, title, description, status,update_date)
VALUES ('$uid','$title', '$description', '0','$date')";
if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Request Send Successfully!');</script>";
   echo "<script> window.location.href = 'acceptor.php';</script>";
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>acceptor</title>
	<link rel="shortcut icon" href="images/678.png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="css/lsb.css" rel="stylesheet" type="text/css"> <!-- gallery-css -->
<!-- //css files -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body>
	<?php include 'navbar.php';?>
	<section class="banner-w3ls">
	<div class="banner-w3l-mk">
		<div class="logo-w3ls">
		<a href="acceptor.php"><img class="logo" src="images/678.png"> <h1>Saving the Souls</h1></a>
		</div>		
		
		<div class="clearfix"></div>
	</div>
	
<div class="pogoSlider" id="js-main-slider">
		<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000"  style="background-image:url(images/banner1.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<h3>They are Humans as Well</h3>
					<p>We should helped the poors and needy peoples.</p>
					<ul class="banner-agileits">
						<li><a href="#readmore" class="link-w3l1" data-toggle="modal">Read More</a></li>
						<li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
					</ul>
					<a href="#about" class="btn btn-circle scroll">
						<i class="fa fa-hand-o-down" aria-hidden="true"></i>
					</a>
				</div>	
			</div>
		</div>	
		<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(images/banner2.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<h3>Together We Can Help Missing Persons</h3>
					<p>we should help those peoples that are missing.</p>
					<ul class="banner-agileits">
						<li><a href="#readmore" class="link-w3l1" data-toggle="modal">Read More</a></li>
						<li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
					</ul>
					<a href="#about" class="btn btn-circle scroll">
						<i class="fa fa-hand-o-down" aria-hidden="true"></i>
					</a>
				</div>	
			</div>
		</div>	
		<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(images/banner3.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<h3>Save Red!</h3>
					<p>we should donate blood for poors because they one of us.</p>
					<ul class="banner-agileits">
						<li><a href="#readmore" class="link-w3l1" data-toggle="modal">Read More</a></li>
					<li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
					</ul>
					<a href="#about" class="btn btn-circle scroll">
						<i class="fa fa-hand-o-down" aria-hidden="true"></i>
					</a>
				</div>	
			</div>
		</div>
		<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(images/banner4.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<h3>Education For Every Hummans!</h3>
					<p>we should help the poors and needy people for their eduaction .</p>
					<ul class="banner-agileits">
						<li><a href="#readmore" class="link-w3l1" data-toggle="modal">Read More</a></li>
						<li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
					</ul>
					<a href="#about" class="btn btn-circle scroll">
						<i class="fa fa-hand-o-down" aria-hidden="true"></i>
					</a>
				</div>						
			</div>
		</div>
	</div><br><br><!-- //pogoSlider -->	
<!--terms and condition-->
<div class="container">
<h4><b>Terms And Conditions for Acceptor</b></h4><br>
<ul>
	<li>Acceptor should be poor and have eligable for services.</li>
	<li>Acceptor shuold be register on this for accepting services.</li>
	<li>Acceptor should not have these things in these services.</li>
	<li>Acceptor should provide complete information ab his/her for accepting donations.</li>
	<input type="checkbox"  name="checkbox" value="check">
  <label for="check"> I agreed terms and conditions</label><br>
  <input type="submit" value="submit" class="btn"></ul></div>


</div>
<div class="service" id="services">
	<div class="container">
		<h3 class="w3l-title">Services for Acceptor<hr></h3>
		<div class="serve-grids-top">
			<div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
				<div class=" hi-icon-effect-6">
				   <a href="#set-6" class="hi-icon fa fa-home"></a>
				 </div>
				<h5>House Old Things</h5>
				<p> you can charity to gave household old things to the needy and poor peoples for increasing their funds to fill their desire.</p>
				<form action="" method="post">
					<input type="hidden" name="title1" value="House Old Things">
					<textarea class="form-control" required placeholder="Enter Detail here..." name="description1"></textarea>
						<input type="submit" class="btn" name="old" value="REQUEST">
				</form>
				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
				<div class=" hi-icon-effect-6">
					<a href="#set-6" class="hi-icon fa fa-gratipay"></a>
				</div>
				<h5>Blood Donations</h5>
				<p> you can charity to donate blood to the needy and poor peoples for increasing their funds to fill their desire.</p>
				<form action="" method="post">
					<input type="hidden" name="title2" value="Blood Donations">
					<textarea class="form-control" required placeholder="Enter Detail here..." name="description2"></textarea>
						<input type="submit" class="btn" name="blood" value="REQUEST">
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4  service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
				<div class=" hi-icon-effect-6">
					<a href="#set-6" class="hi-icon fa fa-child"></a>
				</div>
				<h5>Missing Persons</h5>
				<p> you can find missing person on this plateform to the needy and poor peoples for increasing their funds to fill their desire.</p>
				<form action="" method="post">
					<input type="hidden" name="title3" value="Missing Persons">
					<textarea class="form-control" required placeholder="Enter Detail here..." name="description3"></textarea>
						<input type="submit" class="btn" name="persons" value="REQUEST">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="serve-grids-top second">
			<div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
				<div class=" hi-icon-effect-6">
					<a href="#set-6" class="hi-icon fa fa-gift"></a>
				</div>
					<h5>Free Eduaction</h5>
					<p> you can give charity to provide free eduaction to the needy and poor peoples for increasing their funds to fill their desire.</p>
					<form action="" method="post">
					<input type="hidden" name="title4" value="Free Eduaction">
					<textarea class="form-control" required placeholder="Enter Detail here..." name="description4"></textarea>
						<input type="submit" class="btn" name="education" value="REQUEST">
				</form>
			</div>
			
	</div>
</div>
<!-- //Services -->
<?php 
if (isset($_POST['msg'])) {
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Telephone=$_POST['Telephone'];
	$Subject=$_POST['Subject'];
	$Message=$_POST['Message'];
	$sql = "INSERT INTO `contact`(`name`, `email`,`telephone`, `subject`, `message`, `send_date`)
VALUES ('$Name','$Email', '$Telephone', '$Subject','$Message','$date')";
if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Message Send Successfully!');</script>";
   echo "<script> window.location.href = 'acceptor.php';</script>";
}
}
?>
<!-- Contact-form -->
<h3 class="w3l-title" id="mail">Contact Us<hr></h3>
<div class="w3layouts_mail_grid_right">
	<div class="container">
		<form action="#" id="myForm" method="post">
			<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
				<input type="text" name="Name" placeholder="Name" required="">
				<input type="email" name="Email" placeholder="Email" required="">
			</div>
			<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
				<input type="text" name="Telephone" placeholder="Telephone" required="">
				<input type="text" name="Subject" placeholder="Subject" required="">
			</div>
			<div class="clearfix"> </div>
			<textarea name="Message" placeholder="Message..." required=""></textarea>
			<input type="submit" name="msg" value="Submit">
			<input type="reset" onclick="myFunction()" value="Clear">
		</form>
	</div>
</div>
<!-- //Contact-form -->
<!-- Pre-requests -->
<h3 class="w3l-title" id="pre-requests">Pre Requests<hr></h3>
<div class="w3layouts_mail_grid_right">
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
				    <th>Title</th>
				    <th>Description</th>
				    <th>Status</th>
				    <th>Update</th>
			    </tr>
			</thead>
			<tbody>
				<?php 

	$sql = "SELECT * FROM requests WHERE acc_id='$uid'";
$result = $conn->query($sql);
$k=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    <tr>
    	<td><?php echo ++$k;?></td>
    	<td><?php echo $row['title'];?></td>
    	<td><?php echo $row['description'];?></td>
    	<td><?php 
    	$st=$row['status'];
    	if ($st=='0') {
    		echo "Pending";
    	}
    	elseif ($st=='1') {
    		echo "Accepted";
    	}
    	else{
    		echo "Rejected";
    	}
        ?></td>
    	<td><?php echo $row['update_date'];?></td>
    </tr>
 <?php }
} else { ?>
 <tr>
 	<th colspan="5">No request added yet....</th>
 </tr>
<?php }	?>	

			</tbody>
       </table>
	</div>
</div>
<!-- //Pre requests -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<!-- Social-icons -->

				<h3><font color="white"><center>Social Links</center> </h3></font>
		<div class="icons-w3l">
			<ul>
				<li><a class="facebook" href=><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
				<li><a class="dribbble" href=><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
			
				<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
			</ul>
		</div>
		<!-- //Social-icons -->
		<div class="logo-footer">
			<div class="col-md-3 agileinfo_footer_grid">
				<h4>About Us</h4>
				<p> Saving the Soul is made for fundrsing the poors and needy peoples in all over the world, not only the pakistan<span>This palteform provide the charity and donation to the poors and needy peoples through providing different services to inrease the funding of needy people so that they can live happily and enjoy their own life without the fear of poorness.</span></p>
				<p class="adam">- Saqib Ali, CEO</p>
			</div>
			<div class="col-md-3 agileinfo_footer_grid f1">
				<h4>facebook Posts</h4>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo1.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo2.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo3.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo4.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo5.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo6.jpg" alt=" " class="img-responsive"></a>
				</div>


				<h4>Instagram Posts</h4>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo1.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo2.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo3.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo4.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo5.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#"><img src="images/fo6.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 agileinfo_footer_grid f3">
				<h4>Navigation</h4>					
				<div class="nav-w3-l">
					<ul>
						<li><a href="index.html" >Home</a></li>
						<li><a href="#about" class="scroll" >About Us</a></li>
						<li><a href="#services" class="scroll" >Services</a></li>
						<li><a href="#team" class="scroll" >Our Team</a></li>
						<li><a href="#gallery" class="scroll" >Gallery</a></li>
						<li><a href="#mail" class="scroll" >Contact Us</a></li>
					</ul>
				</div>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<!-- copyright -->
		<div class="w3agile_footer_copy">
			<p>© 2022 Saving the Souls. All rights reserved | Design by <a href="https://www.facebook.com/profile.php?id=100009180066261/">Saqib Ali</a><button type="button" class="btn"><a href="logout.php">Logout</button></a></p>
		</div>
		<!-- //copyright -->
<!-- js files -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- js for banner -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for banner -->
<!-- js for navigation -->
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!-- /js for navigation -->
<!-- Gallery --> 
<script src="js/lsb.min.js"></script>
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
$(window).load(function() {
	  $.fn.lightspeedBox();
	});
</script>
<!-- //Gallery --> 
<!-- Numscroller -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Numscroller -->
<!-- Owl-Carousel-JavaScript -->
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel ({
			items : 3,
			lazyLoad : true,
			autoPlay : true,
			pagination : true,
		});
	});
</script>
<!-- //Owl-Carousel-JavaScript --> 
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- //js files -->
</body>
</html>