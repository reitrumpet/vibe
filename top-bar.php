<?php $url = add_query_arg(array(), $wp->request); ?>
<div class="container-fluid ">
	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-light col-12 bgNav z2">
			<div class="col-2 logo">
				<?php the_custom_logo(); ?>
			</div>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse negrito col-10 z1" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto col-12">
					<div class="col-12 col-md-1 text-center">
						&nbsp;
					</div>
					<li class="nav-item col-12 col-md-2 text-center <?php if($url=='sobre-nos'){echo 'active';} ?>">
						<a class="fontAzulVibe col-12 <?php if($url=='sobre-nos'){echo 'active';} ?>" href="sobre-nos" title="Sobre Nós">Sobre Nós</a>
					</li>
					<li class="nav-item col-12 col-md-2 text-center <?php if($url=='vibe-social'){echo 'active';} ?>">
						<a class="fontAzulVibe col-12 <?php if($url=='vibe-social'){echo 'active';} ?>" href="vibe-social" title="Vibe Social">Vibe Social </a>
					</li>
					<li class="nav-item col-12 col-md-2 text-center <?php if($url=='planos'){echo 'active';} ?>">
						<a class="fontAzulVibe col-12 <?php if($url=='planos'){echo 'active';} ?>" href="planos" title="Planos">Planos</a>
					</li>
					<li class="nav-item col-12 col-md-2 text-center <?php if($url=='blog'){echo 'active';} ?>">
						<a class="fontAzulVibe col-12 <?php if($url=='blog'){echo 'active';} ?>" href="blog" title="Blog">Blog </a>
					</li>
					<li class="nav-item col-12 col-md-2 text-center <?php if($url=='contato'){echo 'active';} ?>">
						<a class="fontAzulVibe col-12 <?php if($url=='contato'){echo 'active';} ?>" href="contato" title="Contato">Contato </a>
					</li>
					<li class="nav-item col-12 col-md-1 text-center actived">
						<a class="fontAzulVibe col-12 active" href="http://vibetv.com.br/central" title="Área do Cliente" target="_blank">Minha Vibe</a>
					</li>
				</ul> 

				<!-- <?php wp_nav_menu(
					array(
						'theme_location'=>'top_menu'
					)
					); ?> -->

				</div>
			</nav>
		</div>
	</div>