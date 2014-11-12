<?php 
$contact_form = new contactform(array(
	'to' => 'John <john@yourdomain.com>',
	'from' => 'Contact Form <contact@yourdomain.com>',
	'subject' => 'New contact form request',
	'goto' => '/dank',
	'required' => array('email', 'text'),
	'keep' => array('name', 'phone', 'email', 'text'),
	'honeypot' => 'subject'
));

snippet('header');
?>
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
				<form action="#contactform" method="post">
					<?php if($contact_form->isError('send')): ?>
						<aside class="error send">
							<?php echo $page->excuses()->kirbytext() ?>
						</aside>
					<?php endif ?>
					<fieldset class="name">
						<label for="contact-name" class="<?php if($contact_form->isError('name')) echo ' error' ?>">
							<?php if($contact_form->isError('name')): ?><span class="error">Vul uw naam in</span><?php endif ?>
							<span class="text">Naam</span>
							<input id="contact-name" type="text" name="name" <?php if($contact_form->isRequired('email')): ?>required="required"<?php endif ?> value="<?php echo $contact_form->htmlValue('name') ?>" placeholder="Uw naam…" />
							<?php if($contact_form->isRequired('name')): ?><span class="required"></span><?php endif ?>
						</label>
					</fieldset>
					<fieldset class="details">
						<label for="contact-phone" class="<?php if($contact_form->isError('phone')) echo ' error' ?>">
							<?php if($contact_form->isError('phone')): ?><span class="error">Vul uw telefoonnummer in</span><?php endif ?>
							<span class="text">Telefoon</span>
							<input id="contact-phone" type="text" name="phone" <?php if($contact_form->isRequired('email')): ?>required="required"<?php endif ?> value="<?php echo $contact_form->htmlValue('phone') ?>" placeholder="Uw telefoonnummer…" />
							<?php if($contact_form->isRequired('phone')): ?><span class="required"></span><?php endif ?>
						</label>
						<label for="contact-email" class="<?php if($contact_form->isError('email')) echo ' error' ?>">
							<?php if($contact_form->isError('email')): ?><span class="error">Vul uw e-mailadres in</span><?php endif ?>
							<span class="text">E-mail</span>
							<input isd="contact-email" type="email" name="email" <?php if($contact_form->isRequired('email')): ?>required="required"<?php endif ?> value="<?php echo $contact_form->htmlValue('email') ?>" placeholder="Uw e-mailadres…" />
							<?php if($contact_form->isRequired('email')): ?><span class="required"></span><?php endif ?>
						</label>
					</fieldset>
					<fieldset class="subject">
						<label for="contact-subject" class="<?php if($contact_form->isError('subject')) echo ' error' ?>">
							<?php if($contact_form->isError('name')): ?><span class="error">Type uw onderwerp</span><?php endif ?>
							<span class="text">Onderwerp</span>
							<input isd="contact-email" name="subject" <?php if($contact_form->isRequired('email')): ?>required="required"<?php endif ?> value="<?php echo $contact_form->htmlValue('subject') ?>" placeholder="Het onderwerp van uw bericht…" />
							<?php if($contact_form->isRequired('email')): ?><span class="required"></span><?php endif ?>
					</fieldset>
					<fieldset class="text">
						<label for="contact-text" class="<?php if($contact_form->isError('text')) echo ' error' ?>">
							<?php if($contact_form->isError('text')): ?><span class="error">Type uw bericht</span><?php endif ?>
							<span class="text">Bericht</span>
							<textarea id="contact-message" name="text" rows="8" <?php if($contact_form->isRequired('email')): ?>required="required"<?php endif ?> placeholder="Uw bericht…"><?php echo $contact_form->htmlValue('text') ?></textarea>
							<?php if($contact_form->isRequired('text')): ?><span class="required"></span><?php endif ?>
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