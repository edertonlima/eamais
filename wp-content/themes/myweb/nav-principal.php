<nav class="nav nav-principal">
	
		<ul>
			<li class="<?php if ( (is_home()) or (is_category()) or (is_singular('post')) ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_permalink(get_page_by_path('projetos')); ?>" title="<?php the_field('titulo_menu',get_page_by_path('projetos')); ?>"><?php the_field('titulo_menu',get_page_by_path('projetos')); ?></a>
			</li>

			<li class="<?php if ( is_page('bim') ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_permalink(get_page_by_path('bim')); ?>" title="<?php the_field('titulo_menu',get_page_by_path('bim')); ?>"><?php the_field('titulo_menu',get_page_by_path('bim')); ?></a>
			</li>

			<li class="<?php if ( (is_post_type_archive('projetos')) or (is_tax('categoria_projetos')) or (is_singular('projetos')) ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_permalink(get_page_by_path('news')); ?>" title="<?php the_field('titulo_menu',get_page_by_path('news')); ?>"><?php the_field('titulo_menu',get_page_by_path('news')); ?></a>
			</li>

			<li class="<?php if ( is_page('studio') ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_permalink(get_page_by_path('studio')); ?>" title="<?php the_field('titulo_menu',get_page_by_path('studio')); ?>"><?php the_field('titulo_menu',get_page_by_path('studio')); ?></a>
			</li>

			<li class="<?php if ( is_page('contato') ) : echo 'ativo'; endif ?>">
				<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="<?php the_field('titulo_menu',get_page_by_path('contato')); ?>"><?php the_field('titulo_menu',get_page_by_path('contato')); ?></a>
			</li>
		</ul>

		<a href="javascript:" class="menu-mobile">
			<i class="fas fa-bars"></i>
			<i class="fas fa-times"></i>
		</a>
</nav>