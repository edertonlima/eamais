
<?php get_header(); ?>

<!-- slide --> 
<section class="box-content box-slide"> 
	<?php include 'slide.php'; ?>
</section>

<?php get_footer(); ?>

<!-- CAROUSEL -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">

	$('.slide-principal').owlCarousel({
		loop:false,
		margin:0,
		responsiveClass:true,
		autoplayHoverPause:false,
		autoplaySpeed:3000,
		fluidSpeed:1000,
		nav:false,
		autoplay:false,
		autoplayTimeout: 800000,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1,
				nav:true
			}
		}
	})
</script>