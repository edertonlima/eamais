<?php get_header(); ?>

<section class="box-content"> 
	<div class="container">
		
		<div class="grid news clean">

				<?php
					while ( have_posts() ) : the_post();
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($prod_categoria->ID), 'list-news' ); ?>
							
						<a href="<?php the_permalink(); ?>" class="grid-item">

							<?php 
								if($imagem[0]){ 
									$categoria = wp_get_post_terms( $post->ID, 'category' )[0]; ?>
										
									<div class="cont-mask">
										<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
										<div class="mask-hover">
											<i class="fas fa-plus"></i>
										</div>
									</div>

									<span class="date-news"><?php the_date(); ?></span>
									<div class="resumo"><?php the_excerpt() ?></div>
									<!--<h4><?php the_title(); ?></h4>-->

								<?php }	
							?>

						</a>

					<?php endwhile;
				?>

				<?php paginacao(); ?>

			</div>
		</div>
	</div>
</section>

<section class="box-content no-padding"> </section>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		

	});
</script>