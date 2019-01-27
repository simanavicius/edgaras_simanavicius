<section class="services" id="services">
	<div class="container">
		<h2>Our services</h2>
		<div class="flex-container services-wrap">

			<?php
			// patikriname ar repeater saugo duomenis
			if( have_rows('wp_services_repeater') ):
			    // pereiname per kiekviena repeater irasa
			    while ( have_rows('wp_services_repeater') ) : the_row();
			        // repeater viduje i laukus kreipiames naudodami:
			        // the_sub_field('sub_field_name');
			        // get_sub_field('sub_field_name');
			        ?>
			        <!-- html blokas -->
			        <div class="services-col">
						<?php the_sub_field('icon'); ?>
						<h3><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
					</div>
			 
			        <?php
			    endwhile;
			endif;
			?>


		</div>
	</div>
</section>