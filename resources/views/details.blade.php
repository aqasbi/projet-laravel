<!DOCTYPE html>
<html>
<head>
	<title>Votre agenda</title>
	<style type="text/css">
		body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
		}
		.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
		}

		.content {
				text-align: center;
				display: inline-block;
		}

		.title {
				margin-top: 200px;
				font-size: 70px;
		}

		.list{
			color: #2E2E2E;
			font-size: 50px;
		}

		a{
			text-decoration: none;
			color: #2E2E2E;
			font-size: 50px;
		}
	</style>
</head>
<body>



<div class="container">
			<div class="content">
				<div class="title"><?php echo $result->title; ?> :</div></br>
				
				<div class="list"> 
				<?php 
					echo $result->details;				
				?>				
				</div>
				<div class="list"> 
				<?php 
					echo $result->date.' at '.$result->time;				
				?>				
				</div>
				<br>
				<br>
				<div class="list"><a href="/test/public/">Go back</a></div>
			</div>
		</div>

</body>
</html>
				
			
