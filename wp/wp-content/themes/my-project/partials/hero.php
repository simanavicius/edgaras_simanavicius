<?php
// gauname uzklausos objekta, t.y duomenis kuriuos WP
// paprase gauti is duomenu bazes


$image = get_field('hero_image');

?>

<section class="hero" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
	<div class="container flex-container">
		<div class="hero_align">
			<?php the_field('hero_text'); ?>
		</div>
	</div>
</section>