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
				margin-top: 70px;
				font-size: 70px;
		}

		.list{
			color: #2E2E2E;
			font-size: 30px;
		}

		a{
			text-decoration: none;
			color: #2E2E2E;
			font-size: 50px;
		}

		input{
			border-radius: 3px;
			border-top-width: 1px;
			width: 300px;
			height: 20px;
		}

		textarea{
			border-radius: 3px;
			border-top-width: 1px;
			width: 300px;
			height: 100px;
		}

		.head{
			color: #2E2E2E;
			font-size: 30px;
		}

		.button{
			width: 100px;
			height: 30px;
			border-radius: 3px;
			background-color: #B0BEC5;
		}
	</style>
</head>
<body>

	<div class="container">
			<div class="content">
				<div class="title">Delete To do</div></br></div><br>

				<?php
						foreach ($results as $key) {
							echo '<div class="list">'.$key->id." : ".$key->title.'</div>';
						}
					?>

				</br>
				
				<form role ="form" accept-charset="utf-8" action="/test/public/deleteTodo" method="POST">

					<div class="head">Select the To Do to delete :</div>
					<div><input type="text" name="id"><div>
					<br>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<br>
					<div><input class="button" type="submit" value="Submit"></div>
				</form>
				<br>
				<br>
				<div class="list"><a href="/test/public/">Go back</a></div>
			</div>
		</div>


</body>
</html>
