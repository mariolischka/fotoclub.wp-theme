<?php if( is_user_member_of_blog()) : ?>
<?php if( is_active_sidebar( 11 ) ) : ?>
<div id="footer-area" class="widget-area" role="complementary">
	<?php dynamic_sidebar(11); ?>
	<div class="clear"></div>
</div>
<!-- #internal footer-area -->
<?php endif; 
else:
if( is_active_sidebar( 6 ) ) : ?>
<div id="footer-area" class="widget-area" role="complementary">
	<?php dynamic_sidebar(6); ?>
	<div class="clear"></div>
</div>
<!-- #footer-area -->
<?php endif; 
 endif; ?>