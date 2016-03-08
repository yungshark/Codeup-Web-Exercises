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
		$data["pong"] = "pong.php?clicked=down&count={$count}&ball=hit";
		$data["ping"] = "ping.php?clicked=up&count={$count}&ball=miss";
		$data["info"] = $info;
		return $data;

	}
	extract(pageController());
?>
<html>
<head>
	<title>Ping</title>
	<style>
		body{
			background-color:white;
			color:black;
			font-size:22px;
			font-family:"helvetica", georgia, serif;
		}



	</style>
</head>
<body>
	<center>
	<a href=<?=$pong?>>hit</a>
	<a href=<?=$ping?>>miss</a>
	<?=$info?> score: <?=$count?>

</body>
</html>