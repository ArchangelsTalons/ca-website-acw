<!DOCTYPE html>
<html>
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>All Games</title>
	</head>

    <body>
		<div class="container">
		
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
				<div class="container">
					<a class="navbar-brand" href="index.html">Database Hub</a>
				</div>
			</nav>
		
		<h3>All Games</h3>

		<br />
		
		<?php
			require_once('connection.php');
		
			$con = mysqli_connect ($server, $username, $password, $database);
		
			if ($con)	{
			$query = "SELECT * FROM games_list";
			
			$result = mysqli_query($con, $query);
			
			echo "<table class='table table-hover'>
						<thead>
							<tr>
								<th>Name of Game:</th>
								<th>Author of Game:</th>
								<th>Game Console:</th>
								<th>Cost:</th>
							</tr>
						</thead>";
						
			while ($db_field = mysqli_fetch_assoc($result))	{
				echo	"<tbody>";
				echo		"<tr>";
				echo			"<td>" . $db_field['gameName'] . "</td>";
				echo			"<td>" . $db_field['gameAuthor'] . "</td>";
				echo			"<td>" . $db_field['gameFormat'] . "</td>";
				echo			"<td>" . $db_field['gameCost'] . "</td>";
				echo		"</tr>";
				echo	"</tbody>";
			}
			echo "</table>";
			
			mysqli_close($con);

			} else {
				print "Error: Unable to find database";
				mysqli_close($con);
			}
		?>
		
		<br />
		
		<footer class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
			<div class="container">
				<a class="navbar-brand" href="index.html">Database Hub</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Return to top</a>
					</li>
				</ul>
			</div>
		</footer>
	</body>
</html>	