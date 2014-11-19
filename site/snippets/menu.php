<nav>
	<a href="<?php echo $site->url() ?>" class="home" title="<?php echo $site->titel()->html() ?>">Home</a>
	<ul>
	<?php foreach($pages->visible() as $p): ?>
		<li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->titel()->html() ?></a></li>
	<?php endforeach ?>
	</ul>
</nav>