<section class="about-us" id="about-us">
	<div class="container">
		<h2>About us</h2>
		<div class="staff-positioning flex-container">
			
			<?php
			// patikriname ar repeater saugo duomenis
			if( have_rows('wp_team_members_repeater') ):
			    // pereiname per kiekviena repeater irasa
			    while ( have_rows('wp_team_members_repeater') ) : the_row();
			    $image = get_sub_field('image');
			        // repeater viduje i laukus kreipiames naudodami:
			        // the_sub_field('sub_field_name');
			        // get_sub_field('sub_field_name');
			        ?>
			        <!-- html blokas -->
			        <div class="staff">
						<img src="<?php echo $image['sizes']['medium'] ?>" alt="<?php the_sub_field('name'); ?>">
						<h5><?php the_sub_field('name'); ?></h5>
						<h6><?php the_sub_field('position') ?></h6>
						<p class="desc"><?php the_sub_field('description') ?></p>
					</div>
			 
			        <?php
			    endwhile;
			endif;
			?>			
		</div>

		<!-- SKILL BARS -->

		<h3><span class="text-overlay">Our Skills</span></h3>
		<div class="skill-bars flex-container">
			<?php
			// patikriname ar repeater saugo duomenis
			if( have_rows('wp_skills_repeater') ):
			    // pereiname per kiekviena repeater irasa
			    while ( have_rows('wp_skills_repeater') ) : the_row();
			        // repeater viduje i laukus kreipiames naudodami:
			        // the_sub_field('sub_field_name');
			        // get_sub_field('sub_field_name');
			        ?>
			       
			        <div class="skill-bar">
						<div class="c100 p<?php the_sub_field('skill_value') ?>">
						    <span><?php the_sub_field('skill_value') ?></span>
							<div class="slice">
								<div class="bar"></div>
							    <div class="fill"></div>
							</div>
						</div>
						<div class="skill-text"><?php the_sub_field('skill_name') ?></div>
					</div>
						
			 
			        <?php
			    endwhile;
			endif;
			?>
		</div>				
	</div>
</section>