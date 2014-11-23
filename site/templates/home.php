<?php snippet('header') ?>
		<main id="home">
			<section id="home-intro">
				<h1><?php echo $page->ondertitel() ?></h1>
				<a href="#home-traject">
					<blockquote>
						<?php echo $page->intro()->kirbytext() ?>
					</blockquote>
					<button type="button" title="Traject">Traject</button>
				</a>
			</section>
			<section id="home-traject">
				<a href="<?php echo url('traject'); ?>">
					<blockquote>
						<?php echo $page->traject()->kirbytext() ?>
					</blockquote>
					<button type="button" title="Meer info">Meer info</button>
				</a>
			</section>
			<section id="home-diensten">
				<?php echo $page->diensten()->kirbytext() ?>
				<ul>
					<li>
						<?php echo $page->dienst_1()->kirbytext() ?>
					</li>
					<li>
						<?php echo $page->dienst_2()->kirbytext() ?>
					</li>
					<li>
						<?php echo $page->dienst_3()->kirbytext() ?>
					</li>
				</ul>
				<div class="row u-aligncenter u-pv20">
					<div class="col-md-12">
						<a href="<?php echo url('diensten'); ?>" class="btn btn-primary btn-lg">lees verder</a>
					</div>
				</div>
			</section>
			<section id="home-contact">
				<div>
					<a href="/contact"><?php echo $page->contact() ?></a>
					<a class="email" href="mailto:info@ldf-advocatuur.nl">Email: info@ldf-advocatuur.nl</a>
					<a class="phone" href="tel:+31207371447">Telefoon: 020-737-1447</a>
					<a class="linked-in" href="https://www.linkedin.com/profile/view?id=287560016">LinkedIn: Liane Foe</a>
				</div>
			</section>
		</main>
<?php snippet('footer') ?>