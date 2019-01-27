<?php
// gauname uzklausos objekta, t.y duomenis kuriuos WP
// paprase gauti is duomenu bazes
$category = get_queried_object();

$image = get_field('image', $category);

?>
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url(<?php echo $image['sizes']['large'] ?>);">
	   		<div class="overlay-gradient"></div>
	   		<div class="container-fluids">
	   			<div class="row">
		   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
		   				<div class="slider-text-inner text-center">
		   					<h1><?php echo $category->name; ?></h1>
		   					<h2><?php echo $category->description; ?></h2>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>		   	
	  	</ul>
  	</div>
</aside>