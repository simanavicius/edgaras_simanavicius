<div id="fh5co-blog" class="blog-flex">
	<?php 
	// kuriame uzklausos parametrus
	$query = [
		'cat' => get_field('news_category'),
		'posts_per_page' => get_field('limit')
	];

	// vykdome uzklausa i duomenu baze pagal nurodytus parametrus, rezultata issaugome
	$result = new WP_Query($query);

	//dump($result);


	if ( $result->have_posts() ):
	    while ( $result->have_posts() ):
	        $result->the_post();
	        ?>
	        <!-- html blokas -->
	        <div class="featured-blog" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head"><?php _e('Featured Posts', 'vcs-starter'); ?></span>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span><a href="<?php the_permalink(); ?>" class="read-button"><?php _e('Learn More', 'vcs-starter'); ?></a></span>
					</div>
				</div>
			</div>
	        <?php
	        break; // nutraukiame cikla po pirmos iteracijos
	    endwhile; // end while
	endif; // end if
	?>


	<div class="blog-entry fh5co-light-grey">
		<div class="row animate-box">
			<div class="col-md-12">
				<h2>Latest Posts</h2>
			</div>
		</div>
		<div class="row">
			<?php
				if ( $result->have_posts() ):
				    while ( $result->have_posts() ):
				        $result->the_post();
				        ?>
				        <!-- html blokas -->
				        <div class="col-md-12 animate-box">
				        	<div class="blog-post">
								<a href="<?php the_permalink(); ?>">
									<span class="img" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);"></span>
								</a>
								<div class="desc">
									<h3>
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<span class="cat"><?php echo get_the_category_list(', '); ?></span>
								</div>
								
							</div>
						</div>
				        <?php
				    endwhile; // end while
				endif; // end if
				wp_reset_postdata(); // atstatome puslapio uzklausa
			?>
	
		</div>
	</div>
</div>