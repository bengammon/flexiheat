<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500," rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php include_once("analyticstracking.php") ?>
