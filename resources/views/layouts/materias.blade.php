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
		<div id="main" class="container-fluid">
			<header class="col-sm-12 col-xs-12">
				@include('includes.header')
			</header>
		</div>

		<div id="materias" class="container-fluid text-center">
			@yield('content_materia')
		</div>

		<footer class="row">
			@include('includes.footer')
		</footer>

	</div>
	</body>
</html>