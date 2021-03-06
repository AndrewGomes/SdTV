<?php
?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />


<?php if ( is_search() || is_author() ) : ?>
<meta name="robots" content="noindex, nofollow" />
<?php endif ?>

<title><?php ar2_document_title() ?></title>

<meta property='og:url' content='http://www.seriesdatv.pt/'/>
<meta property="og:type" content="website"/>
<link rel="canonical" href="http://www.seriesdatv.pt/" />
<meta property="og:site_name" content="Séries da TV"/>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
<meta name="keywords" content="series, series da tv, SdTV, tv, cinema, televisao, sdtv, spoiler, cancelada, renovada, estreia, novidade, noticia, tv, rtp, sic, tvi, audiencias"/>

<?php
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.min.js', null, '2012-07-08' );
wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array( 'jquery' ), '2012-08-02' );

if ( is_singular() ) :
wp_enqueue_style( 'colorbox_css', get_template_directory_uri() . '/css/colorbox.css', null, '2012-08-04' );
wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/js/jquery.colorbox.min.js', array( 'jquery' ), '2012-08-04' );
endif;

if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
?>

<?php wp_head() ?>
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44710380-1', 'seriesdatv.pt');
  ga('send', 'pageview');

</script>
<!--Google Analytics-->
</head>

<body <?php body_class() ?>>
<?php ar2_body() ?>

<div id="wrapper">

<nav id="top-menu" class="clearfix" role="navigation">
<?php ar2_above_top_menu() ?>
	<?php 
	wp_nav_menu( array( 
		'sort_column'		=> 'menu_order', 
		'menu_class' 		=> 'menu clearfix', 
		'theme_location' 	=> 'top-menu',
		'container'			=> false,
		'fallback_cb' 		=> ''
	) );
	?>
<?php ar2_below_top_menu() ?>
</nav><!-- #top-menu -->

<header id="header" role="banner">
	<div id="branding" class="clearfix">
		<?php if ( is_home() || is_front_page() ) : ?>
		<hgroup class="logo">
			<h1 class="blog-name"><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 class="blog-description"><?php bloginfo('description'); ?></h2>	
		</hgroup>
		<?php else: ?>
		<div class="logo">
			<span class="blog-name"><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></span>
			<span class="blog-description"><?php bloginfo('description'); ?></span>
		</div>
		<?php endif ?>
		
		<div class="banner">
		<?php /* Place a 728 x 90 leaderboard banner here? */ ?>
		</div>
		
	</div><!-- #branding -->
</header><!-- #header -->

<?php ar2_above_nav() ?>
<nav id="main-nav" role="navigation">
	<?php 
	wp_nav_menu( array( 
		'sort_column'	=> 'menu_order', 
		'menu_class' 	=> 'menu clearfix', 
		'theme_location'=> 'main-menu',
		'container'		=> false,
		'fallback_cb'	=> 'ar2_nav_fallback_cb' 
	) );
	?>
</nav><!-- #nav -->
<?php ar2_below_nav() ?>

<?php ar2_above_main() ?>
 
<div id="main" class="clearfix">
   <div id="container" class="clearfix">
