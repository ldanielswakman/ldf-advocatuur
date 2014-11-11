<?php snippet('header') ?>
		<main id="traject">
			<section id="traject-heading">
				<h1><?php echo $page->title()->html() ?></h1>
			</section>
			<section class="slide" id="traject-intro">
				<span><?php echo $page->intro()->html() ?></span>
			</section>
			<section class="slide" id="traject-herstel">
				<span><?php echo $page->herstel()->html() ?></span>
			</section>
			<section class="slide" id="traject-overleg">
				<span><?php echo $page->overleg()->html() ?></span>
			</section>
			<section class="slide" id="traject-specialisten">
				<span><?php echo $page->specialisten()->html() ?></span>
			</section>
			<section class="slide" id="traject-eind">
				<span><?php echo $page->eind_1()->html() ?></span>
				<span><?php echo $page->eind_2()->html() ?></span>
			</section>
			<section id="traject-contact">
				<a href="/contact"><?php echo $page->contact()->html() ?></a>
			</section>
		</main>
<?php snippet('footer') ?>