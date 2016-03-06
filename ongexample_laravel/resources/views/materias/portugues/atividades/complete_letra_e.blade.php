<?php
	header ('Content-type: text/html; charset=UTF-8');
	/*require_once("includes/db/config.php");
	require_once("includes/db/mysql.php");
	require_once('includes/db/functions.php');*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Exemplo ONG</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!--<script src="https://fonts.googleapis.com/css"></script>-->
		<script type="text/javascript" src="js/functions.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
	<body>
		<?php
			if (!empty($_POST)) {
				//call db functions
			}
		?>
		<span class="header"></span>
		<div class="task_body container">
			<div class="col-sm-6">
				<div class="col-sm-4">
					<img src="images/abacaxi.png">
				</div>
				<div class="col-sm-6 task text-uppercase">
					<div class="tbl_complete">
						<table>
							<tr>
								<td class="text-center">
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="B" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="C" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="X" disabled />
								</td>
								<td>
									<input type="text" class="task_input" value="I" disabled />
								</td>
							</tr>
						</table>
					</div>
					<div class="tbl_copy">
						<table>
							<tr>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-4">
					<img src="images/abacate.png">
				</div>
				<div class="col-sm-6 task text-uppercase">
					<div class="tbl_complete">
						<table>
							<tr>
								<td class="text-center">
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="B" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="C" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="T" disabled />
								</td>
								<td>
									<input type="text" class="task_input" value="E" disabled />
								</td>
							</tr>
						</table>
					</div>
					<div class="tbl_copy">
						<table>
							<tr>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-4">
					<img src="images/anel.png">
				</div>
				<div class="col-sm-6 task text-uppercase">
					<div class="tbl_complete">
						<table>
							<tr>
								<td class="text-center">
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="N" disabled />
								<td>
									<input type="text" class="task_input" value="E" disabled />
								</td>
								<td>
									<input type="text" class="task_input" value="L" disabled />
								</td>
							</tr>
						</table>
					</div>
					<div class="tbl_copy">
						<table>
							<tr>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-4">
					<img src="images/abelha.png">
				</div>
				<div class="col-sm-6 task text-uppercase">
					<div class="tbl_complete">
						<table>
							<tr>
								<td class="text-center">
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="B" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" value="L" disabled />
								</td>
								<td>
									<input type="text" class="task_input" value="H" disabled />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
							</tr>
						</table>
					</div>
					<div class="tbl_copy">
						<table>
							<tr>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
								<td>
									<input type="text" class="task_input" />
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
				
		</div>
	</body>
</html>
<script>
	load_template('.header', 'app/templates/header.html', false);
	jQuery(document).ready(function(){
		max_length('.task_input', 1);
		jQuery('.task_input').on('keyup', function(e){
			alert('hi');
			blur_e(e, 1);
		});
	});
</script>