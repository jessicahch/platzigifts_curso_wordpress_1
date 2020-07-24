<?php get_header() ?>

<main class="container">
	<div class="pagina404 my-5 text-center">
		<img src="https://www.lancetalent.com/blog/wp-content/uploads/paginas_erro_404.png">
		<h1>404 PÁGINA NO ENCONTRADA</h1>
		<button type="button" class="btn btn-lg btn-block p-3 mb-2 bg-info text-white" onclick="window.location.href='<?php echo home_url(); ?>'">Haga click aquí para volver a la página principal</button>
		<!--<h2>Haga <a href="<?php //echo home_url(); ?>">click</a> aquí para volver a la página principal</h2>-->
	</div>
</main>

<?php get_footer() ?>