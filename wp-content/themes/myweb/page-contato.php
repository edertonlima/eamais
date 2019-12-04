<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); 

		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'list-receita-produto' ); ?>

		<section class="box-content page-contato">
			<div class="container">
				
				<div class="row">
					<div class="col-12">
						<div class="img-single">
							<a href="<?php echo $imagem[0]; ?>" class="galeria_fotos" data-fancybox="projeto_galeria">
								<img src="<?php echo $imagem[0]; ?>">
							</a>
						</div>
					</div>

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

					<div class="col-m-3 col-6">
						<h2 class="center uppercase sub-title"><?php the_title(); ?></h2>
						<p class="center sub-title">Para mais informações, entre <br> em contato</p>

						<form action="javascript:" method="post">
							<fieldset>
								<input type="text" name="nome" placeholder="Nome">
							</fieldset>
							<fieldset>
								<input type="text" name="email" placeholder="E-mail">
							</fieldset>
							<fieldset>
								<input type="text" name="telefone" id="telefone" placeholder="Telefone">
							</fieldset>
							<fieldset>
								<input type="text" name="assunto" placeholder="Assunto">
							</fieldset>
							<fieldset>
								<textarea name="mensagem" placeholder="Mensagem"></textarea>
							</fieldset>
							<fieldset>
								<p class="msg-form right"></p><br>
								<button class="enviar">Enviar</button>
							</fieldset>
						</form>
					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function() {


	});
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function(jQuery){
	   jQuery("#telefone").mask("(99) 9999-9999?9");
	});
</script>