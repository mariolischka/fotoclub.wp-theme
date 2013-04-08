<?php get_header(); ?>
<div id="container">
	<?php if( is_home() && ! is_paged() && esplanade_get_option( 'slider' ) ) : ?>
	<?php get_template_part( 'slider' ); ?>
	<?php endif; ?>
	<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
	<div class="content-sidebar-wrap">
		<?php endif; ?>
		<section id="content">
			<?php
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
			?>
			<hgroup id="current-location">
				<h1 class="page-title">
					<?php echo $curauth->first_name; ?>
					<?php echo $curauth->last_name;?>
				</h1>
			</hgroup>
			<dl>
				<dt>Website</dt>
				<dd>
					<a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?>
					</a>
				</dd>
				<dt>Profile</dt>
				<dd>
					<?php echo $curauth->user_description; ?>
				</dd>
			</dl>

			<h2 class="page-title">
				Bilder und Gallerien von
				<?php echo $curauth->first_name; ?>
				:
			</h2>

			<?php if( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
			<?php if (has_post_format('image')||has_post_format('gallery')):

			 get_template_part( 'content', get_post_format() ); endif;?>

			<?php endwhile; ?>
			<div class="clear"></div>
			<?php esplanade_posts_nav(); ?>
			<?php else : ?>
			<?php esplanade_404(); ?>
			<?php endif; ?>
		</section>
		<!-- #content -->
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
		<?php get_sidebar( 'left' ); ?>
	</div>
	<!-- #content-sidebar-wrap -->
	<?php get_sidebar( 'right' ); ?>
	<?php elseif( ( 'no-sidebars' != esplanade_get_option( 'layout' ) ) && ( 'full-width' != esplanade_get_option( 'layout' ) ) ) : ?>
	<?php get_sidebar(); ?>
	<?php endif; ?>
</div>
<!-- #container -->
<?php get_footer(); ?>