<!DOCTYPE html>
<html>
<head>
<?php //theme tutorial used: http://www.onextrapixel.com/2011/03/08/how-to-code-a-wordpress-3-0-theme-from-scratch/ ?>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
	<title><?php /*the_title() ." ".*/ bloginfo("name"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="<?php bloginfo('template_url'); ?>/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');  ?>/dcfavicon.png" />

	<?php wp_head(); ?>
</head>

