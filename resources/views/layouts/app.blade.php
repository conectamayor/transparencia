<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal de Transparencia de la Fundación Conecta Mayor</title>
	<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500;600&family=Raleway:wght@800&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/000828be08.js" crossorigin="anonymous"></script>

	<link href="{{ mix('css/app.css') }}" rel="stylesheet">


</head>

<body>
	<div id="app">
		<menu-component></menu-component>
        @yield('content')
	</div>
</body>