<?php snippet('header') ?>
		<main id="diensten">
			<header>
				<h1><?php echo $page->title() ?></h1>
			</header>
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