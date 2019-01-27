<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

 
	<!-- Modernizr JS -->
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	</head>
	<body>
		
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo">
							<a href="index.html">
							<?php
								//get_field('lauko_pavadinimas') - reiksme grazina
								//the_field('lauko_pavadinimas') - iskart spausdina
								if(get_field('logo_type', 'option')):
									//dump(get_field('logo_image', 'option'));
									$image = get_field('logo_image', 'option');
									?>
									<img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">
									<?php
								else:
									the_field('logo_text', 'option');
								endif;
								?>
							</a>
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<?php 
						$args = [
							'menu_class' => 'ul elemento klases',
							'container' => false,
							'theme_location' => 'primary-navigation'
						];
						wp_nav_menu($args);

						?>
				
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<?php if(is_front_page()){
			//esame tituliniame puslapyje
			get_template_part('partials/homepage-hero');
		}else if(is_archive()){
			//esame archyvo puslapyje
			get_template_part('partials/archive-hero');
		}else{
			//esame vidiniame puslapyje
			get_template_part('partials/inner-hero');
		}

		?>

