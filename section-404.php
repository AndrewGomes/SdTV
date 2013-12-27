<?php
/**
 * The template for displaying content when posts are not found.
 * @since 1.6
 */
?>

<article id="post-0" class="article no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e('Erro 404 - Não encontrado', 'ar2') ?></h1>
	</header>
	<div class="entry-content clearfix">
		<p><strong><?php _e( "Pedimos desculpa, mas o artigo que procurou não foi encontrado no nosso site.", 'ar2' ) ?></strong></p>
		<p><img src="http://www.seriesdatv.pt/404.png"></p>
		<p><?php _e( "Porque não experimentas utilizar a caixa de pesquisa na barra lateral", 'ar2') ?></p>
		<?php get_search_form(); ?>
	</div>
</article>