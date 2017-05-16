<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/assets/bootstrap/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
	@yield('content')
</div>

@yield('body')
<script type="text/javascript" src="{{ asset('/dashboard/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/dashboard/assets/js/bootstrap.min.js') }}"></script>


</body>
</html>