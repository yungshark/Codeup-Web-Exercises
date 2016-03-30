<?php

	function pageController() {
		if (isset($_GET["pageNum"])) {
			if($_GET["pageNum"] == 1){
				$prevPage = 1;
			} else if ($_GET["pageNum"] < 1){
				$pageNum = 1;
			} else {
				$prevPage = $_GET["pageNum"]-1;
			}
			$offset = ($_GET["pageNum"]-1) * 4;
			$nextPage = $_GET["pageNum"]+1;
		} else {
			$nextPage = 2;
			$prevPage = 1;
			$offset = 0;
		}
		$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', "parks_user", "parks");
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = 
			"SELECT name, 
			location,
			date_established,
			area_in_acres,
			description,
			park_url
			FROM national_parks
			ORDER BY name
			LIMIT :limit OFFSET :offset";
		$stmt = $dbc->prepare($query);
		$stmt->bindValue(":limit", 4, PDO::PARAM_INT);
		$stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
		$stmt->execute();

		$prev = "national_parks.php?pageNum={$prevPage}";
		$next = "national_parks.php?pageNum={$nextPage}";
		$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$data = ["parks" => $parks, "next" => $next, "prev" => $prev];
		return $data;

		
	}
	extract(pageController());	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>National Parks</title>
	</head>
	<style>
	body
	{
		background-color:lavender;
		font-family:"helvetica", georgia, serif;
	}
	h1{
		border: solid black 1px;
		background-color:lightgreen;
		
	}
	h2{
		margin: 30px;
	}
	h3, p{
		margin:20px;
	}

	.park {
		border: solid black 1px;
		background-color:lightgreen;
	}
	.nav{
		background-color:lightgreen;
	}
	</style>
	<body>
		<h1> National Parks </h1>
		<?php foreach ($parks as $park) : ?>
		<div class='park'>
			<h2><?= $park['name'] ?></h2>
			<h3>Location</h3>
			<p><a href="<?= $park['park_url'] ?>"><?= $park['location'] ?></a></p>
			<h3>Date Established</h3>
			<p><?= $park['date_established'] ?></a></p>
			<h3>Area in acres</h3>
			<p><?= $park['area_in_acres'] ?></a></p>
		</div>
		<?php endforeach ?>
    		
    		<a class='nav' href=<?=$prev?>>Prev</a>
    		<a class='nav' href=<?=$next?>>Next</a>

    	<form action="national_parks.php" method="post">
    		<br>
    		<label for="name">Park Name</label>
			<input name="name" type="text" placeholder="Park Name" required>
			<br>
			<label for="location">Location</label>
			<input name="location" type="text" placeholder="location" required>
			<br>
			<label for="date">Date Established</label>
			<input name="date" type="date" placeholder="date founded" required>
			<br>
			<label for="area">Area in acres</label>
			<input name="area" type="number" placeholder="Square Acres" required>
			<br>
			<label for="description">A short description</label>
			<input name="description" type="text" placeholder="Description" required>
			<br>
			<button type="submit">Add Park</button>
		</form>
	</body>
</html>