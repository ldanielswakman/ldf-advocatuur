<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title><?php echo $site->titel() ?> | <?php echo $page->titel() ?></title>
		<meta name="description" content="<?php echo $site->description()->html() ?>">
		<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
		<link rel="stylesheet" type="text/css" media="all" href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<?php echo css('assets/css/main.css') ?>
		<script src="<?php echo url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
		<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
		<script src="<?php echo url('assets/scripts/scripts.js'); ?>"></script>
	</head>
	<body>
		<header>
			<?php snippet('menu') ?>
			<script id="button-template" type="text/html">
				<button type="button"></button>
			</script>
			<script type="text/javascript">
				$(function() {
					$('body > header > nav')
						.append($($('#button-template').html()))
							.addClass('collapsed')
							.on('click', function() {
								$('header > nav').toggleClass('collapsed');
							});
				});
			</script>
		</header>