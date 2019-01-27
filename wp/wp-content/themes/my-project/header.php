<!DOCTYPE html>

<html lang="en-US">
	<head>
		<?php wp_head() ?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
	</head>

	
	<body>
		<!-- ************ Header *************-->
		
		<header>
			<div class="container flex-container flex-align">
				
				<!-- ***********  LOGO **************-->
				<div class="logo">
					<a href="index.php">
						<?php
						//dump(get_field('logo_type', 'option'));
						//the_field('lauko_pavadinimas') - iskart spausdina
						if(get_field('logo_type', 'option')):
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
				<!--************** LOGO ENDS ************-->

				<!--************ NAVIGATION START **************-->
				<div class="menu">
						<?php 
						$args = [
							'menu_class' => 'navigation_bar flex-container',
							'container' => false,
							'theme_location' => 'primary-navigation'
						];
						wp_nav_menu($args);

						?>
					</ul>

					<a href="#search">
						<i class="fa fa-search"></i>
					</a>
					<div class="burger hidden">
						<i class="fas fa-bars"></i>
					</div>

					<div id="search"> 
						<span class="close">X</span>
						<form role="search" id="searchform" action="/search" method="get">
							<input class="testclass" value="" name="q" type="search" placeholder="type to search"/>
						</form>
					</div>
				</div>
			</div>
				<!--************** NAVIGATION END *****************-->
			
		</header>

		