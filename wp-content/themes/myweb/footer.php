
	<footer class="footer <?php if(is_page('contato')){ echo 'footer-page-contato'; } ?>">
		<div class="container">

			<?php

				// check if the repeater field has rows of data
				if( have_rows('redes_sociais','options') ): ?>

					<div class="redes-sociais">

						<?php // loop through the rows of data
						while ( have_rows('redes_sociais','options') ) : the_row(); ?>

							<a href="<?php the_sub_field('url','option'); ?>" title="">
								<?php the_sub_field('icone','option'); ?>
							</a>

						<?php endwhile; ?>

					</div>

				<?php else :

					// no rows found

				endif;

			?>

			<p class="copy">Todos os direitos reservados <?php echo date('Y'); ?></p>

		</div>

		<i class="far fa-caret-square-up" id="gotop"></i>
	</div>	

	<?php wp_footer(); ?>

	<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
	<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>-->

	<script type="text/javascript">

		$('#gotop').click(function(){
			$('html,body').animate({
				scrollTop: $('body').offset().top
			}, 1000);
		});


		/*$(document).ready(function(){	

			$('.menu-mobile').click(function(){
				if($(this).hasClass('ativo')){
					$('.nav-principal ul').css('top','-100vh');
					$(this).removeClass('ativo');
					$('.header').removeClass('ativo');
				}else{
					$('.nav-principal ul').css('top','0px');
					$(this).addClass('ativo');
					$('.header').addClass('ativo');
				}
			});

		});

*/
		$(window).scroll(function(){
			scroll_body = $(window).scrollTop();
			if(scroll_body > 200){
				$('#gotop').addClass('on');
				//$('body').addClass('scroll_body');
				//$('.header').addClass('scroll_menu');
			}else{
				$('#gotop').removeClass('on');
				//$('body').removeClass('scroll_body');
				//$('.header').removeClass('scroll_menu');
			}
		});
	</script>

</body>
</html>