<?php

function pageController(){
	$count = 0;
	$data = [];
	if (isset($_GET["clicked"]))
	{
		$count = $_GET["count"];
		if ($_GET["clicked"] == "up"){
			$count++;
		} else {

			$count--;

		}
	}
	$data["count"] = $count;
	$data["up"] = "counter.php?clicked=up&count={$count}";
	$data["down"] = "counter.php?clicked=down&count={$count}";
	return $data;
}
extract(pageController());
?>
<!doctype html>
<html>
<head>
	<title>Counter</title>
	<style>
		body{
			background-color:grey;
			color:darkred;
			font-size:22px;
			font-family:"helvetica", georgia, serif;
		}

	</style>

</head>

<body>
	<center>

	<a href=<?=$up?>>up</a>
	<a href=<?=$down?>>down</a>
	<h1><?= $count ?></h1>

</body>
</html>