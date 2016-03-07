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
	<div class="container-fluid">
		<header class="row">
			@include('includes.header')
		</header>

		<div id="main" class="row">
			@yield('content')
		</div>

		<footer class="footer">
			@include('includes.footer')
		</footer>

	</div>
	</body>
</html>