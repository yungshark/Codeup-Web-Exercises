<?php

$title = "Server Name Generator!";
$nouns = ['finger', 'macintosh', 'zebra', 'shark', 'window', 'eyeball', 'bear', 'horndorn', 'alien', 'sauce'];
$adjectives = ['foreign', 'pale', 'weird', 'dark', 'liquid', 'legless', 'invalid', 'blind', 'annoying', 'hornless'];

function gerRandom($array) {
	$key = array_rand($array);
	$value = $array($key);
	return $value;
};
$randAdj = array_rand($adjectives);
$randNoun = array_rand($nouns);
$serverName = $adjectives[$randAdj] . ' ' . $nouns[$randNoun];


function getRandom(){

};
?>
<!doctype HTML>
<html>
<head>
	<title><?php echo $serverName; ?></title>
	<style>
		body {
			background-color: grey;
			color:SlateBlue;
			font-size:25px;
			font-family:"Helvetica", Georgia, Serif;
		}
	</style>
</head>
<body>
	<center>
		<strong>
	Welcome to the <?php echo $serverName; ?>
</center>

</body>
</html>