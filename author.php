<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<section class="author-information">
				<h2><?php echo get_the_author_meta('nickname') ?></h2>

				<div class="row">
				<p class="col-lg-2 col-md-3"><?php echo get_avatar(get_author_meta('ID')); ?></p>

				<ul class="col-md-9">
				<li><span class="bold">Email:</span> <a href="mailto:<?php echo get_the_author_meta
				('user_mail'); ?>"><?php echo get_the_author_meta('user_email'); ?></a></li>
		
				<li><a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">Website</a></li>

				<li><span class="bold">Registered Since:</span> <?php echo get_author_meta
				('user_registered'); ?></li>
				</ul>
				</div>

				<div class="author-bio">
				<h3>Bio</h3>
				<p><<?php echo get_the_author_meta('description'); ?></p>
				</div>
				</section>

				<hr>

				<section class="author-post">
						<h3>Posts written by <?php echo get_the_author_meta('user-nickname'); ?> </h3>
				</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>