<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image.png" href="<?=base_url('asset/images/icons/favicon.png')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/bootstrap/css/bootstrap.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/fonts/iconic/css/material-design-iconic-font.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/fonts/linearicons-v1.0.0/icon-font.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/animate/animate.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/css-hamburgers/hamburgers.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/animsition/css/animsition.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/select2/select2.min.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/daterangepicker/daterangepicker.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/slick/slick.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/MagnificPopup/magnific-popup.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/vendor/perfect-scrollbar/perfect-scrollbar.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/util.css')?>"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/main.css')?>"/>

	<title>Eye Candy</title>
</head>

<body class="animsition">
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over IDR 500000
					</div>

					<div class="right-top-bar flex-w h-full">
						<!-- <a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a> -->

						<!-- <a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a> -->
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?=base_url()?>" class="logo">
						<img src="<?=base_url('asset/images/icons/logo-01.png')?>" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="label1 <?=$new_class?>" data-label1="HOT">
								<a href="<?=base_url()?>">New Arrivals</a>
							</li>

							<li class='<?=$shop_class?>'>
								<a href="<?=base_url('/index.php/Products')?>">Shop</a>
								<ul class="sub-menu">
									<li><a href="<?=base_url('index.php/Products/showTypes/Dress')?>">Dresses</a></li>
									<li><a href="<?=base_url('index.php/Products/showTypes/Jumpsuit')?>">Jumpsuits</a></li>
									<li><a href="#">Tops</a>
										<ul class="sub-menu">
											<li><a href="<?=base_url('index.php/Products/showTypes/Tees')?>">Tees</a></li>
											<li><a href="<?=base_url('index.php/Products/showTypes/Shirt')?>">Shirt</a></li>
											<li><a href="<?=base_url('index.php/Products/showTypes/Blouse')?>">Blouse</a></li>
										</ul>
									</li>
									<li><a href="#">Bottoms</a>
										<ul class="sub-menu">
											<li><a href="<?=base_url('index.php/Products/showTypes/Shorts')?>">Shorts</a></li>
											<li><a href="<?=base_url('index.php/Products/showTypes/Skirt')?>">Skirt</a></li>
											<li><a href="<?=base_url('index.php/Products/showTypes/Jeans')?>">Jeans</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div> -->

						<?php if($userlogin):?>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
							data-notify="<?=$total_cart_items?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="<?=base_url('index.php/Wishlist')?>"
							class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
							data-notify="<?=$total_wishlist_items?>">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>

						<a href="<?=base_url('index.php/Cart/history')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
							data-notify="">
							<i class="zmdi zmdi-file-text"></i>
						</a>

						<a href="<?=base_url('index.php/Login/logging_out')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
							data-notify="">
							<i class="zmdi zmdi-power"></i>
						</a>

						<?php else:?>
						<a href="<?=base_url('index.php/Login')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
							data-notify="">
							<i class="zmdi zmdi-account"></i>
						</a>
						<?php endif;?>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="<?=base_url()?>"><img src="<?=base_url('asset/images/icons/logo-01.png')?>" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div> -->
			<?php if($userlogin):?>
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
				data-notify="<?=$total_cart_items?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="<?=base_url('index.php/Wishlist')?>"
					class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
					data-notify="<?=$total_wishlist_items?>">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>

				<a href="<?=base_url('index.php/Cart/history')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
					data-notify="">
					<i class="zmdi zmdi-file-text"></i>
				</a>

				<a href="<?=base_url('index.php/Login/logging_out')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
					data-notify="">
					<i class="zmdi zmdi-power"></i>
				</a>

				<?php else:?>
				<a href="<?=base_url('index.php/Login')?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
					data-notify="">
					<i class="zmdi zmdi-account"></i>
				</a>
			<?php endif;?>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over IDR 500.000
					</div>
				</li>

				<!-- <li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>
					</div>
				</li> -->
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?=base_url()?>">New Arrivals</a>
				</li>
				<li>
					<a href="<?=base_url('index.php/Products')?>">Shop</a>
					<ul class="sub-menu-m">
						<li><a href="<?=base_url('index.php/Products/showTypes/Dress')?>">Dressses</a></li>
						<li><a href="<?=base_url('index.php/Products/showTypes/Dress')?>">Jumpsuits</a></li>

						<li><a href="<?=base_url('index.php/Products/showTypes/Tees')?>">Tees</a></li>
						<li><a href="<?=base_url('index.php/Products/showTypes/Shirt')?>">Shirts</a></li>
						<li><a href="<?=base_url('index.php/Products/showTypes/Blouse')?>">Blouses</a></li>

						<li><a href="<?=base_url('index.php/Products/showTypes/Shorts')?>">Shorts</a></li>
						<li><a href="<?=base_url('index.php/Products/showTypes/Skirt')?>">Skirt</a></li>
						<li><a href="<?=base_url('index.php/Products/showTypes/Jeans')?>">Jeans</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			</ul>
		</div>
	</header>
