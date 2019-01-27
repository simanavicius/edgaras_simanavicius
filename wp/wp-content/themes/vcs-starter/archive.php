<?php get_header(); ?>
<h1>Esame archive.php</h1>
<div id="fh5co-blog">
	<div class="row">
		<?php
		if (have_posts()):
			while ( have_posts() ):
				the_post();
				?>
				<!-- html blokas -->
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php the_post_thumbnail_url('medium_large'); ?>);"></a>
						<div class="blog-text">
							<span class="posted_on"><?php echo get_the_date('M. jS Y H:i') ?></span>
							<h3><a href="#"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?></p>
							<ul class="stuff">
								<li><i class="icon-heart3"></i>249</li>
								<li><i class="icon-eye2"></i>1,308</li>
								<li><a href="#">
									<?php _e('Read More', 'vcs-starter'); ?>
									<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
		
	</div>
	<div class="row">
		<div class="col-xs-12">
			<?php echo paginate_links(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>