<?php get_header();?>
<div id="box">
	<section id="content">
<?php if (have_posts()) : ?>
 
<?php while (have_posts()) : the_post(); ?>
 


	<a href="<?php the_permalink(); ?>">
			<div id="one-post" <?php post_class(); ?>>
				<div id="header-post">
					<h3><?php the_title(); ?></h3>
					<p><?php the_author(); ?>, <?php the_date(); ?></p>
				</div>
				<div id="main-img"><?php
		
		if (has_post_thumbnail ()) {
			the_post_thumbnail ( array (
					400,
					9999 
			) );
		} else {
			?>
			<img style="margin-left: 20px;" alt="Standardowy obrazek komputer"
						src="<?php bloginfo('template_directory'); ?>/images/laptop.png" />
		<?php
		}
		?> 
		
		</div>
			</div>
		</a>
	

 
<?php endwhile; ?>
 
<?php next_posts_link( 'Starsze Posty »', 0 ); ?>
 
<?php else : ?>
 
 <h1>Przepraszamy</h1>
 
<?php endif; ?>
</section>
<?php

if (wp_is_mobile ()) {
} else {
	get_sidebar ();
}
?>
</div>
<?php get_footer();?>
