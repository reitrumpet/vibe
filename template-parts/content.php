<article <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>

	<div class="meta-info">
		<p><?php _e( 'Publicado em', 'vibe' ); ?> <?php echo get_the_date(); ?> </p>
		<p class="card-text"><?php the_field('referencia'); ?></p>
		
	</div>

	<?php 
	$image = get_field('imagem_de_capa');
	if( !empty( $image ) ): ?>

		<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		
	<?php endif; ?>
	
	<div class="conteudo top20 ">
		<?php the_content(); ?>
	</div>
</article>