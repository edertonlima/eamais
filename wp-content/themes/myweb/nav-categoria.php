<nav class="nav nav-categoria">
	<ul>
		<?php
			$current_category = get_queried_object();
			$category = get_terms( array(
			    'taxonomy' => 'category',
			    'hide_empty' => false,
			) );

			if($category){
				foreach ($category as $key => $categoria) { ?>

					<li class="<?php if($current_category->term_id == $categoria->term_id){ echo 'ativo'; } ?>">
						<a href="<?php echo get_term_link($categoria->term_id); ?>">
							<?php echo $categoria->name; ?>
						</a>
					</li>

				<?php }
			}
		?>

		<li class="<?php if ( is_home() ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_permalink(get_page_by_path('projetos')); ?>" title="todos">
				todos
			</a>
		</li>
	</ul>
</div>