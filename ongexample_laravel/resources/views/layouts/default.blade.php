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
		<header>
			@include('includes.header')
		</header>

		<div id="main">
			@yield('content')
		</div>

		<footer class="footer">
			@include('includes.footer')
		</footer>

	</div>
	</body>
</html>