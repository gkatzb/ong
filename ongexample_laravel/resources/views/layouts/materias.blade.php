<?php
/**
* Created by PhpStorm.
* User: Gabriela Katz
* Date: 26/02/2016
*/
?>
<html>
	<head>
		@include('includes.head')
	</head>
	<body>
	<div class="container">
		<header class="row">
			@include('includes.header')
		</header>

		<div id="main" class="row">
			@yield('content_materia')
		</div>

		<footer class="row">
			@include('includes.footer')
		</footer>

	</div>
	</body>
</html>