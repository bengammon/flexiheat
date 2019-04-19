<?php /* Template Name: Landing page */ ?>

<?php get_header(); ?>

<main>

    <?php include_once("components/header.php") ?>
    <?php include_once("components/masthead.php") ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section class="section section--landing-page">
        <div class="section__content">
            
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

        </div>
        <div class="section__sidebar">

            <?php if ( is_active_sidebar( 'google_reviews' ) ) : ?>
            <section class="section section--reviews">
                <div class="section__content">
                    <?php dynamic_sidebar( 'google_reviews' ); ?>
                </div>
            </section>
            <?php endif; ?>

            <div class="section__form">
                <div class="form">
                    <?php the_field('form_shortcode'); ?>
                </div>
            </div> 

        </div>
    </section>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</main>	

<?php get_footer(); ?>