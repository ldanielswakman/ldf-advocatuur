<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<link rel="stylesheet" type="text/css" media="all" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
  <?php echo css('assets/css/main.css') ?>

  <script src="<?php echo url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
  <script src="<?php echo url('assets/scripts/scripts.js'); ?>"></script>

</head>
<body>

  <header>
		<div class="row">
			<div class="col-md-4">
		  	<a href="#">
		  		<img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
		  	</a>
			</div>
	  	<nav class="col-md-8">
	  		testje
	  	</nav>
		</div>
  </header>

  <main id="main">

  	<section>
      <div id="intro" class="slide">
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2">
    				<h1>Hello</h1>
    			</div>
    		</div>
      </div>
  	</section>

  	<section>
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2">
  				<p>
  					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  				</p>
  				<p>
  					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
  				</p>
  			</div>
  		</div>
  	</section>

  </main>

  <footer>
  </footer>

</body>
</html>