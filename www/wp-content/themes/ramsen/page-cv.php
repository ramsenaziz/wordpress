<?php  /* Template Name: CV */?>

<?php get_header(); ?>

<?php $sections = get_field('sections'); ?>

<section class="cv-section">
	<div class="container">
		<ul class="accordion">
			<?php foreach ($sections as $section): ?>
				<li>
					<span class="accordion-title">
						<?php echo $section['title'] ?>
					</span>

					<div class="accordion-content">
						<?php echo $section['content'] ?>
					</div>
				</li>
			<?php endforeach ?>			
		</ul>
	</div> <!-- end container -->
</section> <!-- end countdown-section -->

<section class="contact-section">
	<div class="container">
		<h4>Vill du komma i kontakt med mig?</h4>
		<a href="<?php echo get_field('link_to_contact') ?>" class="button button-big">Kontakta mig</a>
	</div> <!-- end container -->
</section> <!-- end contact-section -->



<?php get_footer(); ?>