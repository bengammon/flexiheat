<?php get_header(); ?>

<main class="padding--bottom-large">

	<div class="section padding--top-large">
	    <div class="section__content section__content text--centered">
	
			<ul class="list list--categories">
				<li><span class="text--bold">Categories:</span></li>
			    <?php wp_list_categories( array(
			        'orderby' => 'name',
			        'title_li' => ''
			    ) ); ?> 
			</ul>

	    </div>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="section padding--top-large">
	    <div class="section__content section__content--narrow">
		
			<h1 class="margin--bottom-tiny"><a class="link--grey" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

			<p class="text--italic text--grey"><?php the_date(); ?></p>

			<?php the_excerpt(); ?>

		</div>
	</div>
		
	<?php endwhile; ?>

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