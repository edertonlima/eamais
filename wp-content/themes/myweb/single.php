<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 

		$current_category = wp_get_post_terms( $post->ID, 'category' )[0]; 
		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-receita-produto' ); ?>

		<section class="box-content">
			<div class="container">
				
				<div class="row">
					<div class="col-10 col-m-1">
						<div class="img-single">
							<a href="<?php echo $imagem[0]; ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
								<img src="<?php echo $imagem[0]; ?>">
							</a>
						</div>

						<h2><?php the_title(); ?></h2>						

						<div class="content">
							<?php if( have_rows('conteudo_projeto') ):
									while( have_rows('conteudo_projeto') ): the_row(); ?>

										<?php if( get_row_layout() == 'imagem' ): ?>
											<div class="item-conteudo img-single">
												<a href="<?php the_sub_field('imagem_conteudo_projeto'); ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
													<img src="<?php the_sub_field('imagem_conteudo_projeto'); ?>">
												</a>
											</div>
											

										<?php elseif( get_row_layout() == 'texto' ): ?>
											<div class="item-conteudo">
												<?php the_sub_field('texto_conteudo_projeto'); ?>
											</div>

										<?php endif; ?>

									<?php endwhile;
							endif; ?>

							<div class="item-conteudo">
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
							</div>

							<div class="item-conteudo center">
								<a href="<?php echo get_term_link($current_category->term_id); ?>" title="<?php echo $current_category->name; ?>"><?php echo $current_category->name; ?></a>
							</div>
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