<p><b>"single.php"</b></p>
<hr>
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php 
	while (have_posts()) {
		the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php }
 ?>