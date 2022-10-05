<?php get_header(); ?>
	<div class="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
				
					<?php the_post_thumbnail('large'); ?>

					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
					<div class="post-meta">
						<?php the_time('m/d/Y'); ?> | 
						<?php if( comments_open() ) : ?>
							<span class="comments-link">
								<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); 
								?>
							</span>
						<?php endif; ?>
					</div>
					
					<div>
						<?php the_content( 'Continue...' ); 
						?>
						
						<?php wp_link_pages(); ?>
					</div>
	
					<div class="meta clearfix">
						<div class="category"><?php echo get_the_category_list(); ?></div>
						<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
					</div>
					
				</article>

			<?php endwhile;  ?>
			
			<div id="pagination" class="clearfix">
				<div class="past-page"><?php previous_posts_link( 'newer' ); ?></div>
				<div class="next-page"><?php next_posts_link( 'older' ); ?></div>
			</div>

		<?php else :  ?>
			
			<article class="post error">
				<h1>Sorry, cannot seem to find that</h1>
			</article>

		<?php endif;  ?>
	</div>
<?php get_footer(); ?>

