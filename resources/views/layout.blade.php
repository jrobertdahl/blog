<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

<ul>
	<li><a href="/">home</a></li>
    <li><a href="/contact">contact</a></li>
    <li><a href="/about">about</a></li>
</ul>

	@yield('content')

</body>
</html>