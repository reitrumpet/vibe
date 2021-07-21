<?php
get_header();

// if (isset($_GET['plano'])) {
// 	$url = $_GET['plano'];

// } else {
// 	$url = " ";
// };
?> 	

<div class="container top50">	
	<div class="row">	
		<div class="col-12 col-md-12 fontAzulVibe negrito padBot15 floatLeft">
			<div class="ftTamanho45 floatLeft borderBottom5px col-5">
				Contato
			</div>
			<div class="floatLeft borderBottom top47 col-7">
				&nbsp;
			</div>
		</div>

	</div>
	<div class="row justificado">
		<div class="col-12">


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
</div>	
<!-- <div class="container-fluid">
	<div class="mapa">
		<iframe src="<?php the_field('mapa'); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div> -->
<script>
	const urlParams = new URLSearchParams(window.location.search);
	const myParam = urlParams.get('plano');
	// console.log(myParam);
	if (myParam === null) {
		// console.log(myParam);
		const myParam = " ";
		// console.log(myParam);
		document.getElementById("input-assunto").value = myParam;
	
	} else if (myParam !== null) {
		// console.log(myParam);
		const assunto = "Tenho interesse no : " + myParam;
		console.log(assunto);
		document.getElementById("input-assunto").value = assunto;
	
	}
</script>
<?php get_footer(); ?>