<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div id="wrapper">
		<header id="header">
			<div id="login" style="float: right">
				<?php if ( function_exists('flexible_frontend_login_modal') ) :
				flexible_frontend_login(); endif; ?>
			</div>
			<<?php esplanade_title_tag( 'site' ); ?> id="site-title"><a
				href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
			</a></<?php esplanade_title_tag( 'site' ); ?>>
			<?php if( ! is_active_sidebar( 1 ) ) : ?>
			<br>			
			<<?php esplanade_title_tag( 'desc' ); ?> id="site-description">
			<?php bloginfo( 'description' ); ?>
			</<?php esplanade_title_tag( 'desc' ); ?>>
			<?php endif; ?>
			<?php get_sidebar( 'header' );  ?>

			<?php if ( ( '' != get_header_image() ) ||  ( false != get_header_image() ) ) : ?>
			<a href="<?php echo home_url( '/' ); ?>" rel="home"> <img
				style="float:right"
				id="header-image" src="<?php header_image(); ?>"
				alt="<?php bloginfo( 'name' ); ?>"
				width="<?php echo get_custom_header()->width; ?>"
				height="<?php echo get_custom_header()->height; ?>" /> 
			</a>
			<?php endif; ?>
		<div class="clear"></div>
			
			<nav id="access">
				<a class="nav-toggle" href="#">Navigation</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); 	 ?>
				
				<?php if (is_user_member_of_blog()):wp_nav_menu( array( 'theme_location' => 'internal' ) ); 	endif; ?>
			
				<div class="clear"></div>
			</nav>
			<!-- #access -->
		</header>
		<!-- #header -->