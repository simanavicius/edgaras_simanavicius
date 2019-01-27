<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
			<?php
			// lygiavimui
			// col-md-push-3 desine
			// col-md-pull-3 kaire
			?>

			<?php
			// patikriname ar repeater saugo duomenis
			if( have_rows('hh_slides_repeater') ):
			    // pereiname per kiekviena repeater irasa
			    while ( have_rows('hh_slides_repeater') ) : the_row();
			    	$image = get_sub_field('image');
			    	//dump($image);
			        $alignment = strtolower(get_sub_field('alignment'));
			        //dump($alignment);
			        if($alignment == 'left'){
			        	$class = 'col-md-pull-3';
			        }else if($alignment == 'right'){
			        	$class = 'col-md-push-3';
			        }else{
			        	$class = 'text-center';
			        }
			        
			        ?>
			        <!-- html blokas -->
			        <li style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
				   		<div class="overlay-gradient"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 <?php echo $class; ?> slider-text">
					   				<div class="slider-text-inner">
					   					<?php the_sub_field('slide_content'); ?>
										<p>
											<?php
												// patikriname ar repeater saugo duomenis
												if( have_rows('buttons_repeater') ):
												    // pereiname per kiekviena repeater irasa
												    while ( have_rows('buttons_repeater') ) : the_row();
												    	$link = get_sub_field('link');
												        ?>
												        <!-- html blokas -->
												        <a class="btn btn-primary <?php the_sub_field('button_style'); ?>" href="<?php echo $link['url']; ?>" target="<?php $link['target'] ?>"><?php echo $link['title']; ?></a>
												 
												        <?php
												    endwhile;
												endif;
												?>
											
										</p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
			 
			        <?php
			    endwhile;
			endif;
			?>
	  	</ul>
  	</div>
</aside>