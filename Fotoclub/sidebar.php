<div id="sidebar">
	<?php get_sidebar( 'top' ); ?>
	<?php get_sidebar( 'left' ); ?>
	<?php get_sidebar( 'right' ); ?>
	<?php get_sidebar( 'bottom' ); ?>
	<?php if(is_home()):
	get_sidebar( 'home' );
	endif;
	?>
</div>
<!-- #sidebar -->
