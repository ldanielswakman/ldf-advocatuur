<?php snippet('header') ?>
		<main id="diensten">
			<section id="diensten-heading">
				<h1><?php echo $page->title() ?></h1>
			</section>
			<section id="dienst-1">
				<?php echo $page->expertise_1()->kirbytext() ?>
			</section>
			<section id="dienst-2">
				<?php echo $page->expertise_2()->kirbytext() ?>
			</section>
			<section id="dienst-3">
				<?php echo $page->expertise_3()->kirbytext() ?>
			</section>
		</main>
<?php snippet('footer') ?>