<div id="fh5co-services">
	<div class="row">

		<?php
		// patikriname ar repeater saugo duomenis
		if( have_rows('hs_services_repeater') ):
		 	// pereiname per kiekviena repeater irasa
		    while ( have_rows('hs_services_repeater') ) : the_row();
		        // repeater viduje i laukus kreipiames naudodami:
		        // the_sub_field('sub_field_name'); // spauzdina
		        // get_sub_field('sub_field_name'); // reiksme grazina
		        ?>
		        <!-- html blokas -->

		       
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<?php the_sub_field('icon'); ?>
							</span>
							<div class="desc">
								<h3><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('description'); ?></p>
							</div>
						</div>
					</div>
					
		        <?php
		    endwhile;
		endif;
		?>

	</div>
</div>





