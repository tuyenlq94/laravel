<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $siteTitle;?></title>

</head>

<body class="antialiased">
	<h1>Hello {!! $name !!}</h1>
	@include('about.aboutUs',['alertType' => 'alert-warning'])
	<x-todo>
		@foreach ( $tasks as $task)
			<h3>{{$task['name']}}</h3>
		@endforeach
	</x-todo>
</body>

</html>
