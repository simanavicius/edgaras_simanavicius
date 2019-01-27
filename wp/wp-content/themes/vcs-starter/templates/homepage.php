<?php

/* Template Name: Homepage */

get_header();

?>
<h1>esame homepage.php</h1>
<!-- Start Point -->
<?php 
get_template_part('partials/services'); // prijungiame services php faila
get_template_part('partials/stats'); // prijungiame stats php faila
get_template_part('partials/homepage-news'); // prijungiame stats php faila
 ?>

<?php get_footer(); ?>