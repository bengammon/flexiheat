<?php /* Template Name: Blank page */ ?>

<?php get_header(); ?>

<main>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>

	<div class="entry-links"><?php wp_link_pages(); ?></div>

	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</main>	

<?php get_footer(); ?>