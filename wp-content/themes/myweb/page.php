<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 

		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-receita-produto' ); ?>

		<section class="box-content">
			<div class="container">
				
				<div class="row">
					<div class="col-12">
						<div class="img-single">
							<a href="<?php echo $imagem[0]; ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
								<img src="<?php echo $imagem[0]; ?>">
							</a>
						</div>					

						<div class="content content-page">
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
											<div class="item-conteudo cont-list <?php the_sub_field('align_listagem_conteudo'); ?>">
								<?php

								if( have_rows('listagem_conteudo') ): ?>
									<ul class="listagem_conteudo">
										<?php while ( have_rows('listagem_conteudo') ) : the_row(); ?>

											<li>

												<i class="fas fa-plus"></i>
												<h3><?php the_sub_field('titulo'); ?></h3> 
												
												<p><?php the_sub_field('texto'); ?></p>

											</li>

										<?php endwhile; ?>
									</ul>
								<?php endif;

								?>

											</div>

										<?php endif; ?>

									<?php endwhile;
							endif; ?>

							<?php /*<div class="item-conteudo">
								<?php

								if( have_rows('itens_info_projetos') ):
									while ( have_rows('itens_info_projetos') ) : the_row(); ?>

										<p class="margin-mini">
											<strong class=""><?php the_sub_field('titulo'); ?></strong> 
											<?php the_sub_field('descricao'); ?>
										</p>

									<?php endwhile;
								endif;

								?>
							</div> */?>

						</div>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$('[data-fancybox="projeto_galeria"]').fancybox({

			transitionEffect: 'slide',
			infobar: true, // quantidade de slides
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
		});

	});
</script>