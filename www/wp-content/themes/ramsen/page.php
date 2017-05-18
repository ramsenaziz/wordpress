<?php get_header(); ?>

<section class="page-content">
	<div class="container">
		<?php while(have_posts()) : the_post() ?>
			<?php echo the_content() ?>
		<?php endwhile ?>
	</div> <!-- end container -->
</section> <!-- end Text-columns -->

<?php get_footer(); ?>