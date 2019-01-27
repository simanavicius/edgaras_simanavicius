<section class="pricing_tables" id="prices">
			<div class="container">
				<h2>Our price</h2>
				<div class="prices_section1 flex-container">

					<?php
					// patikriname ar repeater saugo duomenis
					if( have_rows('wp_first_row_repeater') ):
					    // pereiname per kiekviena repeater irasa
					    while ( have_rows('wp_first_row_repeater') ) : the_row();
					        // repeater viduje i laukus kreipiames naudodami:
					        // the_sub_field('sub_field_name');
					        // get_sub_field('sub_field_name');
					        ?>
					        <!-- html blokas -->
					        <div class="prices_block">
								<h5><?php the_sub_field('title'); ?></h5>
								<div class=price><?php the_sub_field('price'); ?></div>
									<?php the_sub_field('content'); ?>
								<a href="#">Purchase</a>
							</div>
					 
					        <?php
					    endwhile;
					endif;
					?>
				</div>


				<div class="prices_section2 flex-container">
					<?php
					// patikriname ar repeater saugo duomenis
					if( have_rows('wp_second_row_repeater') ):
					    // pereiname per kiekviena repeater irasa
					    while ( have_rows('wp_second_row_repeater') ) : the_row();
					        // repeater viduje i laukus kreipiames naudodami:
					        // the_sub_field('sub_field_name');
					        // get_sub_field('sub_field_name');
					        ?>
					        <!-- html blokas -->
					        <div class="prices_block">
								<h5><?php the_sub_field('title'); ?></h5>
								<div class=price><?php the_sub_field('price'); ?></div>
									<?php the_sub_field('content'); ?>
								<a href="#">Purchase</a>
							</div>
					 
					        <?php
					    endwhile;
					endif;
					?>
				</div>