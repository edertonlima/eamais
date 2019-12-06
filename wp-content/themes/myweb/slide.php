
<?php if( have_rows('slide-principal') ): 
	if(is_front_page()){

		$slide_home = get_field('slide-principal');
		shuffle( $slide_home );
		//echo '<br><br><br><br><br>'; var_dump($slide_home);
		//echo '<br><br><br><br><br>' . $slide_home[0]['imagem']; ?>

		<div class="owl-carousel slide-principal carousel-itens-produtos owl-theme owl-loaded">

		 	<?php
		        $slide_elem = $slide_elem+1;
		        $img_slide = wp_get_attachment_image_src( $slide_home[0]['imagem'], 'image-slide' );
		    ?>

		    <div class="item-slide" style="background-image: url('<?php echo $img_slide[0]; ?>');"></div>

		</div>

	<?php }else{

		$slide_count = count(get_field('slide-principal')); ?>

		<div class="owl-carousel slide-principal carousel-itens-produtos owl-theme owl-loaded">

		 	<?php
		    while ( have_rows('slide-principal') ) : the_row();

		        $slide_elem = $slide_elem+1;
		        $img_slide = wp_get_attachment_image_src( get_sub_field('imagem'), 'image-slide' ); ?>

		        <div class="item-slide" style="background-image: url('<?php echo $img_slide[0] ?>');"></div>

		    <?php endwhile; ?>

		</div>

	<?php }
endif; ?>