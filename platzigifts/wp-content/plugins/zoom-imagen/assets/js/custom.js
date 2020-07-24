
//Como se carga jQuery en modo seguro no se reconocerá el "$" en Wordpress. 
//Para evitar conflictos con otras librerías
//Para ser usado en header

/*jQuery (document).ready(function($){

    $('.wp-post-image').hover(function()
    {
        $(this).addClass('transition');

    }, function()
    {
    
        $(this).removeClass('transition');
    
    });

});*/

//Para ser usado en footer
(function($) {

	$('.wp-post-image').hover(function()
    {
        $(this).addClass('transition');

    }, function()
    {
    
        $(this).removeClass('transition');
    
    });

})( jQuery );
