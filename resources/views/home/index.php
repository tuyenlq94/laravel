<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $siteTitle;?></title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<style>
		body {
			font-family: 'Nunito';
		}
	</style>
</head>

<body class="antialiased">
	<h1><?= $body; ?></h1>
</body>

</html>
