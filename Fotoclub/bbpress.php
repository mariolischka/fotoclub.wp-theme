<?php 
/*
 Template Name: Nur f&uuml;r Mitglieder
*/
?>
<?php get_header(); ?>
<div id="container">
	<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
	<div class="content-sidebar-wrap">
		<?php endif; ?>
		<?php if (is_user_member_of_blog()):?>
		<section id="content">
			<?php if( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="entry">
					<header class="entry-header">
						<<?php esplanade_title_tag( 'post' ); ?> class="entry-title">
						<?php the_title(); ?>
						</<?php esplanade_title_tag( 'post' ); ?>>
					</header>
					<!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
						<div class="clear"></div>
					</div>
					<!-- .entry-content -->
					<?php wp_link_pages( array( 'before' => '<footer class="entry-utility"><p class="post-pagination">' . __( 'Pages:', 'esplanade' ), 'after' => '</p></footer><!-- .entry-utility -->' ) ); ?>
				</div>
				<!-- .entry -->
				<?php comments_template(); ?>
			</article>
			<!-- .post -->
			<?php else : ?>
			<?php esplanade_404(); ?>
			<?php endif; ?>
		</section>
		<!-- #content -->
		<?php else : ?>
		<section id="content">
			<h1>Interner Bereich</h1>
			<p>Die Foren steht nur Mitgliedern des Clubs zur Verf&uuml;gung.</p>
			<p>Sollten Sie ein Mitglied sein <a
				href="<?php echo site_url(); ?>/wp-login.php">melden Sie sich an</a>, um auf die Foren zugreifen zu k&ouml;nnen.</p>

		</section>
		<!-- #non_member -->

		<?php endif; ?>

		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
		<?php get_sidebar( 'left' ); ?>
	</div>
	<!-- #content-sidebar-wrap -->
	<?php get_sidebar( 'right' ); ?>
	<?php elseif( ( 'no-sidebars' != esplanade_get_option( 'layout' ) ) && ( 'full-width' != esplanade_get_option( 'layout' ) ) ) : ?>
	<?php if (is_user_member_of_blog()): get_sidebar('forum'); ?>
	<?php endif; ?>
	<?php endif; ?>
</div>
<!-- #container -->
<?php get_footer(); ?>