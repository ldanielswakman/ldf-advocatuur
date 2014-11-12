<?php snippet('header') ?>
		<main id="dank">
			<header>
				<h1><?php echo $page->titel() ?></h1>
			</header>
			<section>
				<div><?php echo $page->bericht()->kirbytext() ?></div>
			</section>
		</main>
<?php snippet('footer') ?>