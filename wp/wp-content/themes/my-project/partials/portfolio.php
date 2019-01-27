<section class="portfolio" id="portfolio">
	<div class="container">
		<h2>Portfolio</h2>
		<ul class="flex-container">
			<li>Web-design</li>
			<li>UI Design</li>
			<li>Prototype</li>
			<li>Photography</li>
		</ul>
		<div class="img_container flex-container">
		<?php
		// patikriname ar repeater saugo duomenis
		if( have_rows('wp_image_repeater') ):
		    // pereiname per kiekviena repeater irasa
		    while ( have_rows('wp_image_repeater') ) : the_row();
		    	$image = get_sub_field('image');
		    	// echo $image;
		        // repeater viduje i laukus kreipiames naudodami:
		        // the_sub_field('sub_field_name');
		        // get_sub_field('sub_field_name');
		        ?>
		        <!-- html blokas -->
		        
					<div class="portfolio_item">
						<img src="<?php echo $image['sizes']['medium']; ?>" alt="#">
						<div class="img_overlay flex-container flex-align">
							<h4><?php the_sub_field('image_title') ?></h4>
							<p><?php the_sub_field('image_info') ?></p>
						</div>
					</div>
				
		 
		        <?php
		    endwhile;
		endif;
		?>
		</div>
	</div>
</section>