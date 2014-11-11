<?php snippet('header') ?>
		<main id="contact">
			<header>
				<h1><?php echo $page->titel() ?></h1>
			</header>
			<section id="contact-details">
				<div>
					<?php echo $page->gegevens()->kirbytext() ?>
				</div>
			</section>
			<section id="contact-form">
				<aside>
					<?php echo $page->commentaar()->kirbytext() ?>
				</aside>
				<form>
					<fieldset class="name">
						<label for="contact-name">
							<span>Naam</span>
							<input id="contact-name" type="text" name="name" placeholder="Uw naam…" />
						</label>
					</fieldset>
					<fieldset class="details">
						<label for="contact-phone">
							<span>Telefoon</span>
							<input id="contact-phone" type="text" name="phone" placeholder="Uw telefoonnummer…" />
						</label>
						<label for="contact-email">
							<span>Email</span>
							<input id="contact-email" type="email" name="email" required="required" placeholder="Uw e-mailadres…" />
							<span class="required"></span>
						</label>
					</fieldset>
					<fieldset class="message">
						<label for="contact-message">
							<span>Bericht</span>
							<textarea id="contact-message" name="message" rows="8" required="required" placeholder="Uw bericht…"></textarea>
							<span class="required"></span>
						</label>
					</fieldset>
					<fieldset class="controls">
						<label for="contact-submit">
							<button id="contact-submit" type="submit">Versturen</button>
						</label>
					</fieldset>
				</form>
			</section>
		</main>
<?php snippet('footer') ?>