<?php
/**
 * @name : Default
 * @package : Food-Launge
 * @author : Fox
 */
?>
<?php global $smof_data, $food_meta; ?>
<header id="food-header-1" class="site-header">
<div id="food-header-top">
	<div class="container">
		<div class="row">
				<?php if(isset($smof_data['top_header_content1'])):?>
				<div id="food-header-top-first" class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
					<?php if($smof_data['contact_info']!=""):?>
						<i class="fa fa-map-marker"> </i>
						<span class="top_text"><?php echo $smof_data['contact_info'];?></span>
					<?php endif; ?>
					<?php if($smof_data['phone_numb']!=""):?>
						<a href="tel:<?php echo $smof_data['phone_numb'];?>"><span class="fa-stack"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x"></i></span> <?php echo $smof_data['phone_numb'];?></a>
					<?php endif; ?>
					<?php if($smof_data['email']!=""):?>
						<a href="mailto:<?php echo $smof_data['email'];?>"><i class="fa fa-envelope"></i> <?php echo $smof_data['email'];?></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if(isset($smof_data['top_header_content2'])):?>
				<div id="food-header-top-second" class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="social-share text-right">
						<a href="//facebook.com"><i class="fa fa-facebook"></i></a>
						<a href="//twitter.com"><i class="fa fa-twitter"></i></a>
						<a href="//instagram.com"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<?php endif; ?>
		</div>
	</div>
</div>
<div id="food-header" class="food-main-header food-header-1">
	<div class="container">
		<div class="row">
		<nav id="food-header-navigation-fixed" class="navbar">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#food-header-navbar-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Food Lounge"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="food-header-navbar-1">
						<?php
							$attr = array(
								'menu' => food_menu_location(),
								'menu_class' => 'nav navbar-nav navbar-right',
							);

							$menu_locations = get_nav_menu_locations();

							if (!empty($menu_locations['primary'])) {
								$attr['theme_location'] = 'primary';
							}
							/* main nav. */
							wp_nav_menu($attr); ?>
			</div><!-- /.navbar-collapse -->
		</nav>
		</div>
	</div>
</div>
<!--#food-header-->
</header>