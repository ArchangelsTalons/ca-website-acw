<html>
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>Adding Game</title>
	</head>

    <body>
		<h1>Video Games List</h1>
		
		<?php
			require_once('connection.php');
			
			$con = mysqli_connect($server, $username, $password, $database);
			
			$theGameName = $_POST["game_name"];
			$theGameAuthor = $_POST["game_author"];
			$theGameFormat = $_POST["game_format"];
			$theGameCost = $_POST["game_cost"];
			
			if	($con)	{
				$query = "INSERT INTO games_list (gameName, gameAuthor, gameFormat, gameCost) VALUES ('$theGameName', '$theGameAuthor', '$theGameFormat', '$theGameCost')";
				
				mysqli_query($con, $query);
				
				echo "<h3>New Game added</h3>";
				
				echo "<table class='table table-hover'>
						<thead>
							<tr>
								<th>Name of Game:</th>
								<th>Author of Game:</th>
								<th>Game Console:</th>
								<th>Cost:</th>
							</tr>
						</thead>";
				
				echo	"<tbody>
							<tr>
								<td> $theGameName</td>
								<td> $theGameAuthor</td>
								<td> $theGameFormat</td>
								<td> $theGameCost</td>
							</tr>
						</tbody>";
							
				echo	"</table>";
				
				mysqli_close($con);
			} else	{
				print "Error: Unable to find Database";
				mysql_close($con);
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