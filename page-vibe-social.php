<?php get_header(); ?>


<div class="container top80">
	<div class="row justificado">
		<?php 
							
		if( have_posts() ):
								
			while( have_posts() ): the_post();

				?>

				<article>
					<!-- <div class="row col-12 col-md-12 ftTamanho45 negrito padBot15 fontAzulVibe">
						<?php the_title(); ?>
					</div> -->
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

<div class="BGCinza">
	<div class="container">	
		<div class="row">	
			<div class="col-12 col-md-12 fontAzulVibe negrito padBot15 floatLeft">
				<div class="ftTamanho45 floatLeft borderBottom5px col-5">
					Parceiros
				</div>
				<div class="floatLeft borderBottom top47 col-7">
					&nbsp;
				</div>
			</div>

		</div>
		<div class="row col-md-12">

			<?php

			if(have_posts()):
				query_posts( array('category_name'  => 'parceiros', 'posts_per_page' => 9 ) );

				while(have_posts()):the_post();
					?>
					<div class="card col-md-4 match-height">

						<?php 
						$image = get_field('imagem_de_capa');
						if( !empty( $image ) ): ?>
							<div class="card-header">
								<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" width="286" height="107" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
						<?php endif; ?>
						<div class="card-body">
							<h3 class="card-title negrito text-truncate" title="<?php the_title(); ?>"><?php the_title(); ?></h3>
							<div class="card-footer text-muted">
								<a href="<?php the_permalink() ?>" class="btn btn-primary btnMais">Saiba mais !</a>
							</div>

						</div>
					</div>

					<?php 
				endwhile;
			else:
				?>
				<p>Nenhum parceiro cadastrado !</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="container">&nbsp;</div>
</div>	
</div>

<?php get_footer(); ?>