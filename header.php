<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php bloginfo('name') ?>
			<?php if ( is_404() ) : ?>
				&raquo; 
				<?php _e('Not Found') ?>
			<?php elseif ( is_home() ) : ?>
				&raquo;
				<?php bloginfo('description') ?>
			<?php else : ?>
				<?php wp_title() ?>
			<?php endif ?>
		</title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<!-- leave this for stats -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php //comments_popup_script(); <?php wp_head(); ?>
	</head>
		<body>
			<div id="page">
				<div id="header">
					<?php if ( has_header_image() ) { ?>
					<img style="position: fixed; z-index: -2;" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
					<?php }else{ ?>
						<img style="position: fixed; z-index: -2;" src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-988.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
					<?php }?>

					<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</div>
			</div>
