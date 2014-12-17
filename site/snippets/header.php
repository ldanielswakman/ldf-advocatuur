<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title><?php echo $site->titel() ?> | <?php echo $page->titel() ?></title>
		<meta name="description" content="<?php echo $site->description()->html() ?>">
		<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

		<?php
		// checks if not on localhost, then serves assets from CDN
		$local = strpos($_SERVER['SERVER_NAME'], 'localhost');
		if($local === false) : 
			echo css('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
			echo css('https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic');
			echo css('https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
			echo css('http://weloveiconfonts.com/api/?family=entypo');
			echo js('https://code.jquery.com/jquery-1.11.1.min.js');
			echo js('https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.2/fastclick.min.js');
		else :
			echo css('assets/css/lib/bootstrap.min.css');
			echo css('assets/css/lib/entypo.css');
			echo js('assets/scripts/lib/jquery.min.js');
			echo js('assets/scripts/lib/fastclick.min.js');
		endif;

		echo css('assets/css/main.css');
		echo js('assets/scripts/scripts.js');
		?>
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#menu-toggle').click(function(e) {
					e.preventDefault();
					$('nav').toggleClass('isExpanded');
				});
			});
		</script>

	</head>
	<body>
		<header>
			<div class="row">
				<a href="<?php echo $site->url() ?>" class="home" title="<?php echo $site->titel()->html() ?>">
					<span class="text">Home</span>
					<img src="<?php echo url('assets/images/logo.svg') ?>" alt="" />
				</a>
				<a href="javascript:void(0)" id="menu-toggle">
				<i class="entypo-menu"></i>
				</a>
				<?php snippet('menu') ?>
			</div>
		</header>