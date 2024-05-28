<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from allstore-html.real-web.pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 18:39:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>PITRUKRUPA KICHANWARE</title>

	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">

</head>
<body>
<!-- Header - start -->
<header class="header">

	<!-- Topbar - start -->
	<div class="header_top">
		<div class="container">
			<ul class="contactinfo nav nav-pills">
				<li>
					<i class='fa fa-phone'></i> +91 99989 35025
				</li>
				<li>
					<i class="fa fa-envelope"></i> pitrukrupakichanwer2512@gmail.com
				</li>
			</ul>
			<!-- Social links -->
<ul class="social-icons nav navbar-nav">
	<li>
		<a href="http://facebook.com/" rel="nofollow" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
	</li>
	<li>
		<a href="http://google.com/" rel="nofollow" target="_blank">
			<i class="fa fa-google-plus"></i>
		</a>
	</li>
	<li>
		<a href="http://twitter.com/" rel="nofollow" target="_blank">
			<i class="fa fa-twitter"></i>
		</a>
	</li>
	<li>
		<a href="http://vk.com/" rel="nofollow" target="_blank">
			<i class="fa fa-vk"></i>
		</a>
	</li>
	<li>
		<a href="http://instagram.com/" rel="nofollow" target="_blank">
			<i class="fa fa-instagram"></i>
		</a>
	</li>
</ul>		</div>
	</div>
	<!-- Topbar - end -->

	<!-- Logo, Shop-menu - start -->
	<div class="header-middle">
		<div class="container header-middle-cont">
			<div class="toplogo">
				<a href="index-2.php">
					<img src="img/logos.png" alt="AllStore - MultiConcept eCommerce Template">
				</a>
			</div>
			<div class="shop-menu">
				<ul>

					
					<li class="topauth">
					<?php
                           
                                error_reporting(0);
                                if (!isset($_SESSION['login'])) { ?>

						<a href="registration.php">
							<i class="fa fa-lock"></i>
							<span class="shop-menu-ttl">Registration /</span>
						</a>
						<a href="login.php">
							<span class="shop-menu-ttl">Login /</span>
						</a>

						<a href="logout.php">
									<span class="shop-menu-ttl">Logout</span>	
								</a>
						<?php }
                                else { ?>
                                    <a href="logout.php">
									<span class="shop-menu-ttl">Logout</span>	
									</a>
                                <?php } ?>
					</li>

					<li>
						<div class="h-cart">
							<a href="cart.php">
								<i class="fa fa-shopping-cart"></i>
								<span class="shop-menu-ttl">Cart</span>
								<?php
								error_reporting(0);
								$count =0;
								foreach ($_SESSION['cart'] as $key => $value) {
									$count = $count +1;
								} 
								 ?>
								(<b><?php echo $count;?></b>)
							</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- Logo, Shop-menu - end -->

	<!-- Topmenu - start -->
	<div class="header-bottom">
		<div class="container">
			<nav class="topmenu">

	<!-- Catalog menu - start -->
	<div class="topcatalog">
		<a class="topcatalog-btn" href="product.php"><span>All</span> catalog</a>
		<ul class="topcatalog-list">
			<li>
				<a href="product.php">
					Still
                </a>
			</li>
			<li>
				<a href="product.php">
					plastic
				</a>
			</li>
			<li>
				<a href="product.php">
				Electric product
				</a>
				</li>
			<li>
				<a href="product.php">
					Athoer product
				</a>
			</li>
	</div>
	<!-- Catalog menu - end -->

	<!-- Main menu - start -->
	<button type="button" class="mainmenu-btn">Menu</button>

	<ul class="mainmenu">
		<li>
			<a href="index-2.php" class="active">
				Home
			</a>
		</li>
		
		<li>
			<a href="about.php">
				About Us
			</a>
		</li>
		<li>
			<a href="product.php">
				Product
			</a>
		</li>
		
		   
		<li>
		<a href="contacts.php">
						Contacts
					</a>
		</li>
		<li class="mainmenu-more">
			<span>...</span>
			<ul class="mainmenu-sub"></ul>
		</li>
	</ul>
	<!-- Main menu - end -->

	<!-- Search - start -->
	<div class="topsearch">
		<a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
		<form class="topsearch-form" action="#">
			<input type="text" placeholder="Search products">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<!-- Search - end -->

</nav>		</div>
	</div>
	<!-- Topmenu - end -->

</header>
<!-- Header - end -->
