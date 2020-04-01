<?php get_header(); ?>

<section class="box-content"> 
	<div class="container">
		<?php include 'nav-categoria.php'; ?>
	</div>
</section>

<section class="box-content no-padding-top" style=""> 
	<div class="container">		
		<div class="grid clean" style="opacity: 0;">

				<?php
					while ( have_posts() ) : the_post();
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($prod_categoria->ID), '' ); ?>
							
						<a href="<?php the_permalink(); ?>" class="grid-item <?php if($imagem[1] < $imagem[2]){ echo 'grid-item-retrato'; } ?>">

							<?php 
								if($imagem[0]){ 
									$categoria = wp_get_post_terms( $post->ID, 'category' )[0]; ?>
										
									<div class="cont-mask">
										<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
										<div class="mask-hover">
											<h2><?php the_title(); ?> <?php echo get_the_date('Y'); ?></h2>
											<i class="fas fa-plus"></i>
											<h2 class="categoria"><?php echo $categoria->name; ?></h2>
										</div>
									</div>

								<?php }	
							?>

						</a>

					<?php endwhile;
				?>

				<?php paginacao(); ?>

		</div>
	</div>
</section>

<section class="box-content no-padding"> </section>

<?php get_footer(); ?>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry/masonry.pkgd.min.js"></script>

<script type="text/javascript">
	var $grid;
	//$(window).load(function(){
	$(document).ready(function(){
		
		/*$grid = $('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: 80,
			//fitWidth: true,
			//gutter: 10
			horizontalOrder: true,
			originTop: false,
			originLeft: true,
			percentPosition: true
		});*/

		setTimeout(function(){ 
			//alert("Hello");
				$grid = $('.grid').masonry({
					itemSelector: '.grid-item',
					columnWidth: 80,
					//fitWidth: true,
					//gutter: 10
					horizontalOrder: true,
					originTop: true,
					originLeft: true,
					percentPosition: true
				});

				$('.grid').css('opacity',1);
		}, 800);

		/*$grid.imagesLoaded().progress( function() {
			$grid.masonry('layout');
		});*/

		//$grid.masonry('reloadItems');

	});
</script>