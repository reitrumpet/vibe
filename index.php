<?php get_header(); ?>

<div class="container">
	<div class="container">	
		<div class="row">	
			<div class="col-12 col-md-12 fontAzulVibe negrito padBot15 floatLeft">
				<div class="ftTamanho45 floatLeft borderBottom5px col-5">
					Blog
				</div>
				<div class="floatLeft borderBottom top47 col-7">
					&nbsp;
				</div>
			</div>

		</div>
	</div>	
	<div class="row col-md-12">

		<?php
	// Se houver algum post
		if(have_posts()):
			// query_posts( 'posts_per_page=9' );
			// get_posts( array('category'=>'parceiros', 'posts_per_page'=>'9'));
			// query_posts( array( 'category' => array(1), 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) );
			query_posts( array('category_name'  => 'geral', 'posts_per_page' => 9 ) );
	// Enquanto houver posts, mostre-os pra gente
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
						<h5 class="card-title negrito text-truncate" title="<?php the_title(); ?>"><?php the_title(); ?></h5>
						<p>Publicado em <?php echo get_the_date(); ?></p>
						<p class="card-text"><?php the_field('resumo'); ?></p>
						<div class="card-footer text-muted">
							<a href="<?php the_permalink() ?>" class="btn btn-primary">Leia mais !</a>
						</div>

					</div>
				</div>

				<?php 
			endwhile;
		else:
			?>
			<p>Nenhuma notícia cadastrada !</p>
		<?php endif; ?>
	</div>
</div>
<div class="container">&nbsp;</div>



<?php get_footer(); ?>