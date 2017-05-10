<?php get_header(); ?>

<section class="text-columns">
	<div class="container">
		<div class="column">
			<?php echo get_field('left_content') ?>
		</div>

		<div class="column">
			<?php echo get_field('right_content') ?>
		</div>
	</div> <!-- end container -->
</section> <!-- end Text-columns -->

<section class="countdown-section">
	<div class="container">
		<div class="countdown lia">
			<span class="countdown-title">LIA</span>
			<time>00:00:00</time>
		</div>

		<div class="countdown graduation">
			<span class="countdown-title">Examen</span>
			<time>00:00:00</time>
		</div>
	</div> <!-- end container -->
</section> <!-- end countdown-section -->

<section class="contact-section">
	<div class="container">
		<h4>Vill du komma i kontakt med mig?</h4>
		<a href="?nav=kontakt" class="button button-big">Kontakta mig</a>
	</div> <!-- end container -->
</section> <!-- end contact-section -->



<?php get_footer(); ?>