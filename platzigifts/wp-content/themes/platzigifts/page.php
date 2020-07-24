<?php get_header(); ?>

<main class="container">
	
	<?php 

		if(have_posts())
		{//Si hay contenido de página, lo mostrará

			while(have_posts())
			{
				//Va a instanciar si hay página, si es false saldrá del while
				the_post(); 

	?>			
				<!--Muestra el título de la página con un margen arriba y abajo de Bootstrap-->
				<h1 class="my-3"><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
	<?php



			}

		}	

	?>

</main>

<?php get_footer(); ?>


