<?php
	global $zitaly;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $zitaly['email'];?></p></li>
				<li class="phone"><p><?php echo $zitaly['mobile'];?></p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="<?php echo $zitaly['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $zitaly['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $zitaly['google'];?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="<?php echo $zitaly['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?php echo $zitaly['instagram'];?>"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="<?php echo $zitaly['logo']['url']; ?>"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $zitaly['slogan'];?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<!-- <ul class="clearfix">
			<li class="colour-1"><a href="<?php home_url(); ?>">Home</a></li>
			<li class="colour-2"><a href="menu.html">Menu</a></li>
			<li class="colour-3"><a href="location.html">Location</a></li>
			<li class="colour-4"><a href="archive.html">Blog</a></li>
			<li class="colour-5"><a href="reservation.html">Reservation</a></li>
			<li class="colour-6"><a href="staff.html">Our Staff</a></li>
			<li class="colour-7"><a href="news.html">News</a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul> -->
		<?php wp_nav_menu([
			'theme_location'		=> 'main_manu',
			'container'				=> ' ',
			'menu_class'			=> 'clearfix',
			'menu_id'				=> '',	
		]);?>
	</nav>