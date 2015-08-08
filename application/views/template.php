<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Steve West">
	<!--link rel="icon" href="../../favicon.ico"-->

	<title>Kent Pet Stats - <?php echo $title ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Custom styles for this template -->
	<?php echo Asset::css('dashboard.css'); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Kent Pet Stats</a>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<?php echo $navigation; ?>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header"><?php echo $title ?></h1>

			<?php echo $messages; ?>

			<?php echo $content; ?>
		</div>
	</div>
</div>

<footer class="footer">
	<div class="container pull-right">
		<p class="text-muted">
			&copy 2015 Steve "uru" West, released under <a href="https://github.com/stevewest/kentpetstats/blob/master/COPYING">MIT license</a>.
			<a href="https://github.com/stevewest/kentpetstats">
				<?php echo \Asset::img('GitHub-Mark-32px.png', ['title' => 'GitHub', 'alt' => 'GitHub']); ?>
			</a>
		</p>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		var url = document.location.toString();
		if (url.match('#')) {
			$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show');
		}
		$('.nav-tabs a').on('shown.bs.tab', function (e) {
			window.location.hash = e.target.hash;
			window.scrollTo(0, 0);
		})
	});
</script>

</body>
</html>
