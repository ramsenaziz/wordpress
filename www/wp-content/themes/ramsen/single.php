<?php get_header(); ?>

<section class="blog-section">
	<div class="container">
		<?php while(have_posts()) : the_post() ?>
			<div class="blog-post">
				<a style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="thumbnail" href="<?php the_permalink() ?>">			
				</a>

				<?php the_content() ?>

				<span class="date">
					<?php the_date() ?>,
				</span>
				<span class="author">
					<?php the_author() ?>
				</span>
			</div>
		<?php endwhile ?>
	</div> <!-- end container -->
</section> <!-- end blog-section -->

<section class="contact-section">
	<div class="container">
		<h4>Vill du komma i kontakt med mig?</h4>
		<a href="<?php echo get_permalink(get_option('contact_page')) ?>" class="button button-big">Kontakta mig</a>
	</div> <!-- end container -->
</section> <!-- end contact-section -->

<?php get_footer(); ?>