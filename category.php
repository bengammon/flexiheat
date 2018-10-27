<?php get_header(); ?>

<main class="padding--bottom-large">

	<div class="section padding--top-large">
	    <div class="section__content section__content text--centered">

	    	<ul class="list list--categories">
				<li><span class="text--bold">Categories:</span></li>
			    <?php wp_list_categories( array(
			        'orderby' => 'name',
					'title_li' => '',
					'exclude' => '128'
			    ) ); ?> 
			</ul>

	    </div>
	</div>

	<div class="section padding--top-large">
	    <div class="section__content section__content--narrow">

			<h1><?php single_cat_title(); ?></h1>
	    	<?php echo category_description(); ?> 
		
		</div>
	</div>

    <?php if ( have_posts() ) : ?>
    
	<div class="section padding--top-large">
	    <div class="section__content">
	    	
	    	<ul class="list list--grid list--triple list--spaced">

			<?php while ( have_posts() ) : the_post(); ?>

				<li class="list__item">

		            <div class="promo">
		                <a class="promo__text" href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
		                <div class="promo__overlay"></div>
		                <div class="promo__image">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'category-thumb' ); } ?>
		                </div>
		            </div>

		        </li>

			<?php endwhile; ?>

			</ul>

		</div>
	</div>

	<div class="section padding--top-large">
	    <div class="section__content section__content--narrow">

	    	<p class="nav-previous alignleft margin--bottom-none"><?php next_posts_link( 'Older posts' ); ?></p>
			<p class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></p> 

		</div>
	</div>

	<?php else : ?>

	<div class="section padding--top-large">
	    <div class="section__content section__content--narrow">
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

		</div>
	</div>

	<?php endif; ?>

</main>

<?php get_footer(); ?>