<!DOCTYPE html >
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="<?= get_locale();?>" dir="<?= is_rtl() ? 'rtl' : 'ltr';?>"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png">
   <?php  wp_head();?>
</head>

<body id="top" <?php body_class();?>
    <!-- header 
   ================================================== -->
   <header style="padding-top: 20px;">

   	<div class="row">

   		<div class="logo">
	       <?php the_custom_logo();?>
	      </div>
               <?php
			     wp_nav_menu([
					 'theme_location' => 'main-menu',
					 'menu_class'     => 'main-navigation',
					 'container'     =>  'nav',
					 'container_id' => 'main-nav-wrap',
				 ])

			   ?>
	   					
					<!-- <li class="highlight with-sep"><a href="#" title="">Sign Up</a></li>					 -->
			

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	
   </header> <!-- /header -->