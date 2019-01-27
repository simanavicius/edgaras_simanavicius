<?php

/* Template Name: Homepage */

get_header();
?>
<?php 
	get_template_part('partials/hero');
	get_template_part('partials/services');
	get_template_part('partials/hero2');
	get_template_part('partials/portfolio');
	get_template_part('partials/pricing_img');
	get_template_part('partials/pricing_tables');
	get_template_part('partials/clients_comments');
	get_template_part('partials/our_team');
	get_template_part('partials/about_us');
	get_template_part('partials/contact_us');


 ?>
<!-- Start Point -->


<?php get_footer(); ?>