<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="banner col-lg-12 col-xl-12">

			<div class="">
				<!-- <?php include("banner-top.php"); ?> -->
				<?php
				echo do_shortcode('[smartslider3 slider="2"]');
				?>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row fontAzulVibe">
		<div class="container linha"></div>
		<div class="col-12 col-md-12 text-center ftTamanho40 negrito padBot15">
			#FiquePorDentro
		</div>
		<div class="col-12 col-md-12 col-lg-12 col-xl-12">
			<div class="row padBot15">
				<?php include("news.php"); ?>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12 text-end padBot15">
					<button type="button" class="btn btn-primary btn-lg negrito BGLaranja borderNone"><a class="link" href="blog">+</a></button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row fontAzulVibe caixa600">
		<div class="container linha"></div>
		<div class="col-12 col-md-12 text-center ftTamanho45 negrito padBot15">
			#PodeCopiar
		</div>
		<div class="col-12 padBot15">
			<?php include("banner-planos.php"); ?>
		</div>
	</div>
</div>






<?php get_footer(); ?>