<?php get_header(); ?>


<div class="container top50">
	<div class="row justificado">
		<?php 
							// Se houver algum post
		if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
			while( have_posts() ): the_post();

				?>

				<article>
					<div class="row col-12 col-md-12 ftTamanho45 negrito padBot15 fontAzulVibe">
						<?php the_title(); ?>
					</div>
					<?php the_content(); ?>
				</article>

				<?php 
			endwhile;
		else:
			?>

			<p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'vibe' ); ?></p>

		<?php endif; ?>
	</div>
</div>	



<?php get_footer(); ?>