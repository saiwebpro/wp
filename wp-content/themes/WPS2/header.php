<!doctype html>







<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->







<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->







<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->







<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->







<!--[if (gt IE 9)]><!-->







<html class="no-js" lang="en"><!--<![endif]-->







<head >







    <meta charset="utf-8">







    <title>DEV-Your Organization Name</title>


    <meta name="Author" content="State of California" />


    <meta name="Description" content="State of California" />

    <meta name="Keywords" content="California, government" />



<?php

	wp_head(); 


 if (strpos(get_page_template_slug( $post->ID ), 'v4') !== False)
	$ver = 'v4';



?>



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/cagov.<?php echo $ver; ?>core.css">



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/colorscheme-<?php echo $ver; ?>oceanside.css">	 	







<?php	



	require_once(get_stylesheet_directory() . '/ssi/head-css-js.html');







?>















</head>	











