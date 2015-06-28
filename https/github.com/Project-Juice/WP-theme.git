<!DOCTYPE HTML>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css"
	href="<?php bloginfo('stylesheet_url');?>" />
<?php wp_head();?>
</head>
<body>
	<header id="top">
<!-- Nagłówek szablonu składający się z prostej nazwy, opisu i wyszukiwarki  -->
		<h1>
			<a href="<?php bloginfo('url') ?>"><?php bloginfo('name');?></a>	
			</h1>
		<p id="description">
				<?php bloginfo('description');?>
			</p>
		<p>
				<?php get_search_form();?>
			</p>
	</header>
	<!--Proste poziome menu -->
	<nav id="main-nav">
			<?php
			
wp_nav_menu ( array (
					'top-menu' => 'Menu główne' 
			) );
			?>
		</nav>
