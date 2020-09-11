<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 

		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-receita-produto' ); ?>

		<section class="box-content page-contato">
			<div class="container">
				
				<div class="row">
					<div class="col-12">

						<?php if($imagem[0]){ ?>
							<div class="img-single">
								<a href="<?php echo $imagem[0]; ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
									<img src="<?php echo $imagem[0]; ?>">
								</a>
							</div>					
						<?php } ?>

						<div class="content content-page <?php if($imagem[0]){ echo 'margin-top-60'; } ?>">
							<?php if( have_rows('conteudo') ):
									while( have_rows('conteudo') ): the_row(); ?>

										<?php if( get_row_layout() == 'imagem' ): ?>
											<div class="item-conteudo img-single">
												<a href="<?php the_sub_field('imagem_conteudo'); ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
													<img src="<?php the_sub_field('imagem_conteudo'); ?>">
												</a>
											</div>
											

										<?php elseif( get_row_layout() == 'texto' ): ?>
											<div class="item-conteudo <?php the_sub_field('align_texto_conteudo'); ?>">
												<?php the_sub_field('texto_conteudo'); ?>
											</div>


										<?php elseif( get_row_layout() == 'texto_titulo' ): ?>
											<div class="item-conteudo <?php the_sub_field('align_texto_titulo_conteudo'); ?>">

												<?php if(get_sub_field('tit_texto_titulo_conteudo')){ ?>
													<h2><?php the_sub_field('tit_texto_titulo_conteudo'); ?></h2>
												<?php }
												
												the_sub_field('txt_texto_titulo_conteudo'); ?>
											</div>


										<?php elseif( get_row_layout() == 'texto_titulo_imagem' ): ?>
											<div class="item-conteudo cont-imagem <?php the_sub_field('align_texto_titulo_imagem_conteudo'); ?>">

												<?php if(get_sub_field('tit_texto_titulo_imagem_conteudo')){ ?>
													<h2><?php the_sub_field('tit_texto_titulo_imagem_conteudo'); ?></h2>
												<?php } ?>
												
												<div class="cont-txt-img">
													<img src="<?php the_sub_field('img_texto_titulo_imagem_conteudo'); ?>">
													<?php the_sub_field('txt_texto_titulo_imagem_conteudo'); ?>
												</div>
											</div>


										<?php elseif( get_row_layout() == 'listagem' ): ?>
											<div class="item-conteudo cont-list">
												<?php

												if( have_rows('listagem_conteudo') ): ?>
													<ul class="listagem_conteudo">
														<?php while ( have_rows('listagem_conteudo') ) : the_row(); ?>

															<li>

																<i class="fas fa-plus"></i>
																<img src="<?php the_sub_field('imagem'); ?>">
																<h3><?php the_sub_field('titulo'); ?></h3> 
																
																<p><?php the_sub_field('texto'); ?></p>

																<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>

															</li>

														<?php endwhile; ?>
													</ul>
												<?php endif;

												?>

											</div>

										<?php endif; ?>

									<?php endwhile;
							endif; ?>


							<div class="item-conteudo">
								<a data-fancybox data-touch="false" href="#mapa" class="link-contato">
									<h5>Google Maps</h5>
								</a>
								<div style="display: none;" id="mapa">
									<?php the_field('maps_contato','options'); ?>
								</div>
							</div>

							<div class="item-conteudo">
								<a href="mailto:eamais@eamais.net" class="link-contato">
									<h5><?php the_field('email_contato','options'); ?></h5>
								</a>
							</div>

						</div>

					</div>
				</div>

			</div>
		</section>

		<?php /*
		<section class="box-content page-contato">
			<div class="container">

				<div class="row">
					<div class="col-m-1 col-5">
						<h2 class="left">ENDEREÇO</h2>
						<p class="info-contato">Dom Jaime Câmera 77, 9 andar<br>
						<strong>Florianópolis</strong> | Santa Catarina | Brasil</p>
					</div>			
					<div class="col-5">
						<h2 class="right">CONTATO</h2>
						<div class="info-contato info-tel">
							<i class="fab fa-whatsapp"></i>
							<span>(48) 99963.1065</span>
							<span>55 (48) 3223.9049</span>
						</div>

						<div class="info-contato info-email">
							<a href="mailto:eamais@eamais.net" title="eamais@eamais.net">eamais@eamais.net</a>
							<a href="mailto:adm@eamais.net" title="mailto:adm@eamais.net">mailto:adm@eamais.net</a>
						</div>
					</div>
				</div>

			</div>
		</section>
		*/ ?>

		<section class="box-content page-contato">
			<div class="container">

				<div class="row">
					<div class="col-m-4 col-4">
						<?php /*<h2 class="center uppercase sub-title"><?php the_title(); ?></h2>*/ ?>
						<p class="sub-title form-sub-title">Para mais informações, entre <br> em contato</p>

						<form action="javascript:" method="post" id="form-contato">
							<fieldset>
								<input type="text" id="nome" name="nome" placeholder="Nome *">
							</fieldset>
							<fieldset>
								<input type="text" id="email" name="email" placeholder="E-mail *">
							</fieldset>
							<fieldset>
								<input type="text" name="telefone" id="telefone" placeholder="Telefone *">
							</fieldset>
							<fieldset>
								<input type="text" id="assunto" name="assunto" placeholder="Assunto *">
							</fieldset>
							<fieldset>
								<textarea name="mensagem" id="mensagem" placeholder="Mensagem *"></textarea>
							</fieldset>
							<fieldset>
								<p class="msg-form right" style="display: block; width: 100%;"></p>
								<button class="enviar">Enviar</button>
							</fieldset>
						</form>
					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$('[data-fancybox]').fancybox({

			iframe : {
		        css : {
		            width : '600px'
		        }
			},
			infobar: false, // quantidade de slides
			smallBtn: false, // close individual em cada foto
			toolbar: true, // botões padrões
			buttons: [
				//"zoom",
				//"share",
				//"slideShow",
				//"fullScreen",
				//"download",
				//"thumbs",
				"close"
			],

		})

	});




	$(".enviar").click(function(){
		$('.enviar').html('Enviando').prop( "disabled", true );
		$('.msg-form').removeClass('erro ok').html('');
		
		nome = $('#nome').val();
		email = $('#email').val();
		telefone = $('#telefone').val();
		assunto = $('#assunto').val();
		mensagem = $('#mensagem').val();

		para = '<?php the_field('email_contato', 'option'); ?>';
		nome_site = '<?php bloginfo('name'); ?>';

		if(nome == ''){
			$('#nome').parent().addClass('erro');
		}

		if(email == ''){
			$('#email').parent().addClass('erro');
		}

		if(assunto == ''){
			$('#assunto').parent().addClass('erro');
		}

		if(telefone == ''){
			$('#telefone').parent().addClass('erro');
		}

		if(mensagem == ''){
			$('#mensagem').addClass('erro');
		}

		if((nome == '') || (email == '') || (telefone == '') || (assunto == '') || (mensagem == '')){
			$('.msg-form').html('Todos os campos são obrigatórios!');

			$('.enviar').html('Enviar').prop( "disabled", false );
		}else{
			$.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, mensagem:mensagem, assunto:assunto, para:para, nome_site:nome_site }, function(result){		
				if(result=='ok'){
					resultado = 'Mensagem enviada com sucesso!<br>Em breve entraremos em contato.';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				$('.msg-form').addClass(classe).html(resultado);
				$('#form-contato').trigger("reset");
				$('.enviar').html('Enviar').prop( "disabled", false );
			});
		}
	});
</script>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/maskedinput.js"></script>
<script type="text/javascript">
	$(function(jQuery){
	   $("#telefone").mask("(99) 9999-9999?9");
	});
</script>