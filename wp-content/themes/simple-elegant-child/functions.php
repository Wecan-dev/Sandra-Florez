<?php 

add_action( 'wp_enqueue_scripts', 'wi_child_enqueue_styles');
function wi_child_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');
function translate_text($translated) {

	$translated = str_ireplace('Quick',  'Vista',  $translated);
	$translated = str_ireplace('¡Oferta!',  'Comprar',  $translated);
	$translated = str_ireplace('View',  'Rapida',  $translated);
	$translated = str_ireplace('Search',  'Buscar',  $translated);
	$translated = str_ireplace('results for',  '
Resultados de búsqueda de',  $translated);
	$translated = str_ireplace('More',  'Mas',  $translated);
	$translated = str_ireplace('Your cart is empty',  'Tu carrito esta vacío',  $translated);
	$translated = str_ireplace('Nothing Found',  'Nada Encontrado',  $translated);
	$translated = str_ireplace('Sorry, but nothing matched your Buscar terms. Please try again with some different keywords.',  'Lo sentimos, pero nada coincide con sus términos de búsqueda. Vuelva a intentarlo con algunas palabras clave diferentes.',  $translated);
	$translated = str_ireplace('Product added to cart',  'Producto agregado al carrito',  $translated);
	
return $translated;

}

add_filter ('woocommerce_order_button_text', function () {
     return 'Finalizar Compra';
});
?>