<div id="fh5co-counter" class="fh5co-counters">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center animate-box">
			<?php the_field('hs_description'); ?>	
		</div>
	</div>
	<div class="row animate-box">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">

				<?php
					// patikriname ar repeater saugo duomenis
					if( have_rows('hs_stats_repeater') ):
					 	// pereiname per kiekviena repeater irasa
					    while ( have_rows('hs_stats_repeater') ) : the_row();
					        // repeater viduje i laukus kreipiames naudodami:
					        // the_sub_field('sub_field_name');
					        // get_sub_field('sub_field_name');
					        ?>
					        <!-- html blokas -->
					        <div class="col-md-3 text-center">
								<span class="fh5co-counter js-counter" data-from="0" data-to="<?php the_sub_field('number') ?>" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label"><?php the_sub_field('text'); ?></span>
							</div>


				<?php
				   		endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>