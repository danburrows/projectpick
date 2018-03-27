<?php 

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail(); ?>

	<?php endwhile;					

	else :
		echo "<p>No posts</p>" ;

	endif;

get_footer()	

?>