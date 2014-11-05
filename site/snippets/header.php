<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
		<meta name="description" content="<?php echo $site->description()->html() ?>">
		<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
		<link rel="stylesheet" type="text/css" media="all" href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<?php echo css('assets/css/main.css') ?>
		<script src="<?php echo url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
		<script src="<?php echo url('assets/scripts/scripts.js'); ?>"></script>
	</head>
	<body>
		<header>
			<nav title="<?php echo $site->title()->html() ?>">
				<a href="#" class="brand" title="<?php echo $site->title()->html() ?>">Home</a>
				<a href="#" class="current"><span class="text">Traject</span></a>
				<a href="#"><span class="text">Diensten</span></a>
				<a href="#"><span class="text">Praktijk</span></a>
				<a href="#"><span class="text">Contact</span></a>
			</div>
		</header>