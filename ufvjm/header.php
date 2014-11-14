<!DOCTYPE html>
<html <?php \language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?></title>
		<?php \wp_head(); ?>
	</head>
	<body <?php \body_class( 'template default' ); ?> id="<?php echo \basename( get_permalink() ); ?>">
		<?php
		\get_header( 'site' );

		
