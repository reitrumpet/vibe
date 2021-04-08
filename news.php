<div class="col-md-12">

	<?php
	// Se houver algum post
	if(have_posts()):
		query_posts( 'posts_per_page=3' );
	// Enquanto houver posts, mostre-os pra gente
		while(have_posts()):the_post();
			?>
			<div class="card col-md-4 floatLeft match-height" style="width: 18rem;">

				<?php 
				$image = get_field('imagem_de_capa');
				if( !empty( $image ) ): ?>
					<div class="card-header">
						<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" width="286" height="107" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				<?php endif; ?>
				<div class="card-body">
					<h5 class="card-title negrito text-truncate" title="<?php the_title(); ?>"><?php the_title(); ?></h5>
					<p>Publicado em <?php echo get_the_date(); ?></p>
					<p class="card-text"><?php the_field('resumo'); ?></p>
						<a href="<?php the_permalink() ?>" class="btn btn-primary">Leia mais !</a>
				</div>
			</div>

			<?php 
		endwhile;
	else:
		?>
		<p>Nenhuma notícia cadastrada !</p>
	<?php endif; ?>
</div>