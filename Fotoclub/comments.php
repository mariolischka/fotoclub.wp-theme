<?php if ( have_comments() ) : ?>
<aside id="comments">
	<?php if ( post_password_required() ) : ?>
	<p class="nocomments">
		<?php _e( 'This post is password protected. Enter the password to view comments.', 'esplanade' ); ?>
	</p>
	<?php return; ?>
	<?php endif; ?>
	<h3 id="comments-title">
		<?php comments_number( __( 'No Responses to', 'esplanade' ), __( 'One Response to', 'esplanade' ), __( '% Responses to', 'esplanade' ) ); ?>
		&quot;
		<?php the_title(); ?>
		&quot;
	</h3>

	<div id="comments-nav-above" class="navigation">
		<div class="nav-prev">
			<?php previous_comments_link() ?>
		</div>
		<div class="nav-next">
			<?php next_comments_link() ?>
		</div>
		<div class="clear"></div>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments( array( 'style' => 'ol', 'avatar_size' => 64 ) ); ?>
	</ol>

	<div id="comments-nav-below" class="navigation">
		<div class="nav-prev">
			<?php previous_comments_link() ?>
		</div>
		<div class="nav-next">
			<?php next_comments_link() ?>
		</div>
		<div class="clear"></div>
	</div>
</aside>
<!-- #comments -->
<?php endif; ?>

<?php if ( have_comments() && ! comments_open() ) : ?>
<div id="respond">
	<p class="nocomments">
		<?php _e( 'Comments are closed.', 'esplanade' ) ?>
	</p>
</div>
<!-- #comments -->
<?php endif; ?>

<?php if (is_user_member_of_blog()):?>
<?php	comment_form() ?>
<?php else: ?>
<?php _e( 'Comments only by members.', 'esplanade' ) ?>
<?php endif; ?>

