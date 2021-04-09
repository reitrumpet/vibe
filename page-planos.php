<?php get_header(); ?>

<div class="container">	
	<div class="row padBot20">	
		<div class="col-12 col-md-12 fontAzulVibe negrito padBot15 floatLeft">
			<div class="ftTamanho45 floatLeft borderBottom5px col-5">
				Planos
			</div>
			<div class="floatLeft borderBottom top47 col-7">
				Planos de Fibra Óptica, Internet de Verdade !
			</div>
		</div>
	</div>
	<div class="row padBot20">
		<div class="col-6">
			<div class="text-center padBot20 borderBottom fontAzulVibe">Planos Residenciais</div>
			<div class="row padTop10">
				<div class="col-12">


					<?php

					if(have_posts()):
						query_posts( array('category_name'  => 'planos', 'posts_per_page' => 3 ) );
						while(have_posts()):the_post();
							?>
							<div class="plano col-12 col-md-12 col-xl-4 floatLeft padTop10">
								<div class="text-center">
									<h3 class="BGCinza"><?php the_title(); ?></h3>
									<h5 class=""><?php the_content(); ?></h5>
									<div class="valorPlano BGCinza">
										<div class="ftTamanho35">
											R$<?php the_field('valor'); ?>
										</div>
										<p class="fidelidadePlano">por mês</p>
									</div>
								</div>
								<div class="descricaoPlano justificado">
									<div class="itemPacote ftTamanho15">

										<ul class="itens-do-plano">	
											<?php 
											$field = get_field_object('item_do_plano');
											$itens = $field['value'];
											?>
											<?php foreach( $itens as $item ): ?>
												<li>
													<?php $template_directory = get_template_directory_uri(); ?>
													<img class="visto" src="<?php echo $template_directory;?>/images/visto.png">
													<?php echo $field['choices'][ $item ]; ?></li>
												<?php endforeach; ?>
											</ul>


										</div>

									</div>
									<div class="col-12 btnContato top15">
										<button type="button" class="btn btn-primary btn negrito borderNone btnPlanos">
											<a class="link" href="contato">
												Solicitar Contato
											</a>
										</button>
									</div>



								</div>
								<?php 

							endwhile;
						else:
							?>
							<p>Nenhum plano cadastrado !</p>
						<?php endif; ?>


					</div>

				</div>
			</div>					
			<div class="col-6">
				<div class="text-center padBot20 borderBottom fontAzulVibe">HiperPlanos</div>
				<div class="row padTop10">
					<div class="col-12">

						<?php

						if(have_posts()):
							query_posts( array('category_name'  => 'hiperplanos', 'posts_per_page' => 3 ) );
							while(have_posts()):the_post();
								?>
								<div class="plano col-12 col-md-12 col-xl-4 floatLeft padTop10">
									<div class="text-center">
										<h3 class="BGCinza"><?php the_title(); ?></h3>
										<h5 class=""><?php the_content(); ?></h5>
										<div class="valorPlano BGCinza">
											<div class="ftTamanho35">
												R$<?php the_field('valor'); ?>
											</div>
											<p class="fidelidadePlano">por mês</p>
										</div>
									</div>
									<div class="descricaoPlano justificado">
										<div class="itemPacote ftTamanho15">

											<ul class="itens-do-plano">	
												<?php 
												$field = get_field_object('item_do_plano');
												$itens = $field['value'];
												?>
												<?php foreach( $itens as $item ): ?>
													<li>
														<?php $template_directory = get_template_directory_uri(); ?>
														<img class="visto" src="<?php echo $template_directory;?>/images/visto.png">
														<?php echo $field['choices'][ $item ]; ?></li>
													<?php endforeach; ?>
												</ul>


											</div>

										</div>
										<div class="col-12 btnContato top15">
											<button type="button" class="btn btn-primary btn negrito borderNone btnPlanos">
												<a class="link" href="contato">
													Solicitar Contato
												</a>
											</button>
										</div>



									</div>
									<?php 

								endwhile;
							else:
								?>
								<p>Nenhum plano cadastrado !</p>
							<?php endif; ?>


						</div>

					</div>
				</div>					
			</div>
			<div class="row">
				*Todos os planos seguindo a promoção corrente.
			</div>


		</div>	

		<?php get_footer(); ?>