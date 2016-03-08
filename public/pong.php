<?php
	function pageController(){
		$count = 0;
		$data = [];
		$ball = null;
		$info = "new Game";
		if (isset($_GET['clicked'])){
			if ($_GET["ball"] == "hit"){
				$info = "hit";
				$count = $_GET["count"];
				$count++;
			} else{
				$info = "miss";
				$count = 0;
			}
		}
		$data["count"] = $count;
		$data["ping"] = "ping.php?clicked=up&count={$count}&ball=hit";
		$data["pong"] = "pong.php?clicked=down&count={$count}&ball=miss";
		$data["info"] = $info;
		return $data;

	}
	extract(pageController());
?>
<html>
<head>
	<title>Pong</title>
	<style>
		body{
			background-color:black;
			color:white;
			font-size:22px;
			font-family:"helvetica", georgia, serif;
		}



	</style>
</head>
<body>
	<center>
	<a href=<?=$ping?>>hit</a>
	<a href=<?=$pong?>>miss</a>
	<?=$info?> score: <?=$count?>

</body>
</html>