<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="wrap"></div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/art/logo-icon-white.png" width="130" height="130" alt="logo" />
			<h1>CRABTREE</h1>
			<h2>Liqource Licence</h2>
		</div>
		<div class="contact">
			<p>Phone: 0439 527 245</p>
			<p>Email: info@crabtreeconsulting.com.au</p>
		</div>
		<div class="wrap-one">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/art/brb.png" width="450" height="358" alt="brb" />
		</div>
		<div class="wrap-two">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/art/busy.png" width="450" height="358" alt="brb" />
		</div>
		<nav>
			<button>Contact Us</button>
		</nav>
		<div class="popup">
			<button>X</button>
			<?php the_content(); // Dynamic Content ?>
		</div>

	<?php endwhile; ?>
	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

<?php get_footer(); ?>
