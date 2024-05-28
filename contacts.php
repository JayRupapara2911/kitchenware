<?php
error_reporting(0);
include('header.php'); 
?>

<!-- Main Content - start -->
<main>
<section class="container stylization maincont">


<ul class="b-crumbs">
	<li>
		<a href="index-2.html">
			Home
		</a>
	</li>
	<li>
		<span>Contacts</span>
	</li>
</ul>
<h1 class="main-ttl"><span>Contacts</span></h1>
<!-- Contacts - start -->
<br>
<div class="iconbox-wrap">
	<div class="row iconbox-list">
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/1.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl">+91 98244 80031</h3>
			Let's have a<br>
			talk together
			<span class="iconbox-i-margin"></span>
		</div>
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/2.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl">Our address</h3>
		       Khodiyar Industries Estate, Stree no.3,<by>
			Mavdi Baypass Road, Rajkot - 360004
			<span class="iconbox-i-margin"></span>
		</div>
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/3.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl">Schedule</h3>
			Mon-Sun 07:00(am) - 8:00(pm)<br>
			Wed closed
			<span class="iconbox-i-margin"></span>
		</div>
	</div>
</div>

<!-- Contacts Info - end -->
<div class="social-wrap">
	<div class="social-list">
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://facebook.com/">
				<p class="social-i-img">
					<i class="fa fa-facebook"></i>
				</p>
				<p class="social-i-ttl">Facebook</p>
			</a>
		</div>
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://google.com/">
				<p class="social-i-img">
					<i class="fa fa-google-plus"></i>
				</p>
				<p class="social-i-ttl">Google +</p>
			</a>
		</div>
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://twitter.com/">
				<p class="social-i-img">
					<i class="fa fa-twitter"></i>
				</p>
				<p class="social-i-ttl">Twitter</p>
			</a>
		</div>
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://vk.com/">
				<p class="social-i-img">
					<i class="fa fa-vk"></i>
				</p>
				<p class="social-i-ttl">Vkontakte</p>
			</a>
		</div>
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://instagram.com/">
				<p class="social-i-img">
					<i class="fa fa-instagram"></i>
				</p>
				<p class="social-i-ttl">Instagram</p>
			</a>
		</div>
		<div class="social-i">
			<a rel="nofollow" target="_blank" href="http://youtube.com/">
				<p class="social-i-img">
					<i class="fa fa-youtube"></i>
				</p>
				<p class="social-i-ttl">Youtube</p>
			</a>
		</div>
	</div>
</div>

<!-- Contact Form -->

		
<center><h2>Feedback</h2></center>

<form action="user-process.php" method="post">
  <label for="fname" >First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>

  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" ><br><br>

  <label for="message" >Message:</label><br>
  <input type="text" id="message" name="message" ><br>

  <input type="submit" value="Submit" name="feedback"><?php echo $_SESSION['feedback']; unset($_SESSION['feedback']); ?>

		
		

	</form>
</div>
<br>
<br>
<!-- Google Maps -->
<div class="contacts-map allstore-gmap">
	<div class="marker" data-zoom="15" data-lat="-37.81485261872975" data-lng="144.95655298233032" data-marker="img/marker.png">534-540 Little Bourke St, Melbourne VIC 3000, Australia</div>
</div>
<!-- Contacts - end -->

</section>
</main>
<!-- Main Content - end -->

  <!-- End Blog  -->
  <?php include('footer.php'); ?>
  