<!doctype html>
<html>
<head>

	<title>@yield('title','GoodSounds')</title>
	
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/lumen/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/styles.css" type="text/css">
	
	
	 @yield('header')
	
</head>

<body>


	@yield('content')
	
	@yield('body')

    @yield('list')

		
</body>

</html>