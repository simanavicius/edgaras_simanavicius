		<footer>
			<div class="container flex-container flex-align">
				<div class="logo">
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
				<div class="footer-navigation">
					<?php 
						$args = [
							'menu_class' => 'contacts flex-container',
							'container' => false,
							'theme_location' => 'footer-navigation'
						];
						wp_nav_menu($args);

						?>
				</div>
			</div>
		</footer>
		<?php wp_footer() ?>
	</body>
</html> 

