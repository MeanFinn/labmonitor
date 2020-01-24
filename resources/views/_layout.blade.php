<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Lab Monitoring</title>
	@include('_styles')
	@yield('styles')
</head>
<body>
	@yield('body')
</body>
</html>