<?php
/**
* Theme Name: NewTheme
* Theme URI: http://www.AQUALAWSITENAME.com
* Description: AquaLaw Site
* Version: 1.0
* Author: Page Bowers
* Author URI: http://pagebowersdesigns.com
* Tags: powerful, cheat, sheet
**/
?>

<html lang="en"><head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>AquaLaw</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- Styles-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!--Javascript-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js">
		</script>
		<script type="text/javascript"> updatepage(); </script>
		<script scr="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
		<script scr="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		</head>    
<div id="container">
	<div id="header">
		<div id="header-wrapper">
			<div id="wrap">
				<h1 id="logo"><a class="brand" href="<?php bloginfo('url'); ?>"><img src='<?php bloginfo('template_directory'); ?>/images/Logo.png'/></a></h1>
				<div id="menu">
					<ul id="navigation">
							<?php wp_nav_menu( array('menu' => 'Project Nav')); ?>	
					</ul>
				</div> <!--Close menu-->
			</div><!--Close wrap-->
		</div><!--Close header-wrapper-->
	</div> <!--Close Header -->
	<div id="main">