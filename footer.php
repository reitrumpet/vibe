
<div class="fundoRodape1 ">
	<div class="container-fluid padTop25">
		<div class="row">
			<div class="col-12 col-md-12 text-center negrito ftTamanho20 fontBranca">
				Siga-nos nas redes sociais:
			</div>
			<div class="col-12 col-md-12 text-center negrito ftTamanho20 fontBranca">
				<a href="https://www.facebook.com/VibeFibra" class="fontBranca" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="https://instagram.com/vibefibra" class="fontBranca" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://api.whatsapp.com/send?phone=5582993836066&text=Ol%C3%A1%20!" class="fontBranca" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="fundoRodape2 text-center"> 
	<div class="container-fluid padTop15">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="row">
					<div class="col-12 col-md-5 ftTamanho15 fontBranca padTop10">
						© 2021 Vibe Telecom todos os direitos reservados.
					</div>
					<div class="col-12 col-md-4 offset-md-3">
						<div class="row">
							<div class="col-12 col-md-6 ftTamanho15 fontBranca padTop10">
								Desenvolvido por:
							</div>
							<div class="col-12 col-md-6">
								<?php $template_directory = get_template_directory_uri(); ?>
								<a href="https://instagram.com/agencia_leva" target="_blank">
									<img class="logoLeva" src="<?php echo $template_directory;?>/images/logoLevaBranco.png">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	var zero = 0;
	(function(){
		$(window).on('scroll', function(){
			$('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
			zero = $(window).scrollTop();
		})
	})

</script>

</body>
</html>