<?php get_header(); ?>

<main class="container my-3">
	
	<?php 

		//Verifica si hay contenido
		if(have_posts())
		{
			while (have_posts()) 
			{

				//Va a instanciar si hay entrada, si es false saldrá del while
				the_post();

	?>			
				<!--Título de la entrada-->
				<h1 class="my-3"><?php the_title(); ?></h1>
				<div class="row">
					<div class="col-6">
						<!---Una imagen en Wordpress tiene varios tamaños-->
						<?php the_post_thumbnail('large'); ?>
					</div>
					<div class="col-6">
						<?php the_content(); ?>

						<button type="button" class="btn btn-primary">¡Lo Quiero YA!</button>
						
						<div class="form-check my-3">
					        <input class="form-check-input" type="checkbox" id="gridCheck1">
					        <label class="form-check-label" for="gridCheck1">
					          HC Jessica, o deseas guardarlo en tu lista de deseos
					        </label>
					    </div>

					</div>
				</div>
	<?php
			}
		}
	?>

</main>

<?php get_footer(); ?>