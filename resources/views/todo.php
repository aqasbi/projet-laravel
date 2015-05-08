<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
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

		a.listTodo{
			text-decoration: none;
			color: #2E2E2E;
			font-size: 50px;
		}

		a.buttons{
			color: #b0bec5;
			font-size: 70px;
			text-decoration: none;
		}

		.add{
			background-color: #2e2e2e;
			padding-left: 7px;
			padding-bottom: 7px;
			padding-right: 10px;
			padding-left: 10px; 
			text-align: center;
			margin: 20px;
		}

		.delete{
			background-color: #2e2e2e;
			padding-left: 7px;
			padding-bottom: 10px;
			padding-right: 10px;
			padding-left: 10px; 
			text-align: center;
			margin: 20px;

		}
	</style>
</head>
<body>

<div class="add"><a class="buttons" href="/test/public/add">+</a></div><div class="delete"><a class="buttons" href="/test/public/delete">-</a></div>

<div class="container">
			<div class="content">
				<div class="title">Hello, your program is the following :</div></br>
				
					<?php
						foreach ($results as $key) {
							echo '<div class="list"><a class="listTodo" href="'.url().'/action/'.$key->id.'">'.$key->title.'</a></div>';
						}
					?>

			</div>
		</div>

</body>
</html>
				
				
