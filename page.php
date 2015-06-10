<?php get_header(); ?>
<section id="content" role="main">
	<div class="container">
	<?php
		require 'top.php';
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="header">
			
			</header>
			<section class="entry-content">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
		<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>