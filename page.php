<?php get_header(); ?>
		<div id="content" class="content">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1><?php the_title(); ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div>
						
					</article>

				<?php endwhile;  ?>

			<?php else :  ?>
				
				<article class="post error">
				<h1 class="404">Sorry, cannot seem to find that</h1>
				</article>

			<?php endif;  ?>

		</div>
	</div>
<?php get_footer(); ?>