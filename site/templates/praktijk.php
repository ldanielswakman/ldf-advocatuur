<?php snippet('header') ?>
		<main id="praktijk">
			<header>
				<h1><?php echo $page->titel() ?></h1>
				<?php echo $page->intro()->kirbytext() ?>
			</header>
			<section>
				<?php echo $page->eerste()->kirbytext() ?>
			</section>
			<section>
				<?php echo $page->tweede()->kirbytext() ?>
			</section>
			<section>
				<?php echo $page->derde()->kirbytext() ?>
			</section>
		</main>
<?php snippet('footer') ?>