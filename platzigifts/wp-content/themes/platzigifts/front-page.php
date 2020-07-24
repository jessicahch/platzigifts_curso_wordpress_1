<?php get_header(); ?>

<main class="container">
	<?php 

		//Verificando si hay contenido
		if(have_posts())
		{

			while (have_posts())
			{
				the_post();

	?>
			
			<h1 class="my-3"><?php the_title(); ?>!!</h1>
			<?php the_content(); ?>
	<?php

			}
		}
	?>

	<div class="lista-productos my-5">
		<h3 class="text-center">PRODUCTOS</h3>
	</div>

	<div class="row">
	
	<?php

		$args = array(
			'post_type' => 'producto', //nombre del post type creado
			'post_per_page' => -1, //-1: muestra todas las entradas de productos. Por default, muestra lo configurado en Wordpress
			'order' => 'ASC', //la ordenación por default es en base a la fec. de creacíón
			'orderby' => 'title'

		);

		//consulta personalizada: en este caso todas las entradas de prod.
		$productos = new WP_QUERY($args);

		if($productos->have_posts())
		{
			while ($productos->have_posts())
			{
				$productos->the_post();

	?>

	<div class="col-4 text-center my-3">
		
		<figure>
			<?php the_post_thumbnail('large'); ?>
		</figure>
		<h4 class="my-3 text-center">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h4>
		<button type="button" class="btn btn-primary ">¡Lo Quiero YA!</button>

	</div>

	<?php

			}//end while
		}//end if

	?>
	
	</div>

</main>

<?php get_footer(); ?>
