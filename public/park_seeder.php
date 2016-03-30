<?php
	$dbc = NEW PDO('mysql:host=127.0.0.1;dbname=parks_db', "parks_user", "parks");
	$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$parks = [
		["name" => "Great Smoky Mountains", "location" => "35°41′N 83°32′W", "date" => "1934-06-15", "area" => 522427, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Great+Smoky+Mountains/@35.5834603,-83.5257713,14z/data=!3m1!4b1!4m2!3m1!1s0x8859521e1372343d:0xa04eac8607697ce3"],

		["name" => "Grand Canyon", "location" => "36°06′N 112°06′W", "date" => "1906-11-28", "area" => 1217000, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Grand+Canyon+National+Park/@36.1069695,-112.1151912,17z/data=!3m1!4b1!4m2!3m1!1s0x873312ae759b4d15:0x1f38a9bec9912029"],

		["name" => "Yosemite", "location" => "37°51′N 119°33′W", "date" => "1890-10-01", "area" => 747956, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Yosemite+National+Park/@37.8651053,-119.5405234,17z/data=!3m1!4b1!4m2!3m1!1s0x8096f09df58aecc5:0x2d249c2ced8003fe"],

		["name" => "Yellowstone", "location" => "44°36′N 110°30′W", "date" => "1872-03-01", "area" => 2219791, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Yellowstone+National+Park,+WY+82190/@44.4279972,-110.6060067,14z/data=!3m1!4b1!4m2!3m1!1s0x534e1fa4815fb5c5:0x55626b0f59fce96b"],

		["name" => "Rocky Mountain", "location" => "40°20′00″N 105°42′32″W", "date" => "1915-01-26", "area" => 265761, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Rocky+Mountain+National+Park/@40.3427973,-105.6858329,17z/data=!3m1!4b1!4m2!3m1!1s0x876979e4455903e9:0xfa27ee43a78e8217"],

		["name" => "Olympic", "location" => "47°58′10″N 123°29′55″W", "date" => "1938-01-29", "area" => 922650, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Olympic+National+Park/@47.9690718,-123.5004447,17z/data=!3m1!4b1!4m2!3m1!1s0x548e8009cf0472d1:0x2087abb27d7951"],

		["name" => "Zion", "location" => "37°12′09″N 112°59′16″W", "date" => "1919-11-19", "area" => 146597, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Zion+National+Park/@37.2982064,-113.0284945,17z/data=!3m1!4b1!4m2!3m1!1s0x80caead08844f8d9:0x7c2e3a15aa3656f5"],

		["name" => "Grand Teton", "location" => "43°50′00″N 110°42′03″W", "date" => "1929-02-26", "area" => 310000, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Grand+Teton+National+Park/@43.7904321,-110.6839567,17z/data=!3m1!4b1!4m2!3m1!1s0x5352519ec95d1ba9:0xa5a0b88ecc91a337"],

		["name" => "Acadia", "location" => "44°21′N 68°13′W", "date" => "1916-07-08", "area" => 47452, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Acadia+National+Park/@44.3385597,-68.2755286,17z/data=!3m1!4b1!4m2!3m1!1s0x4caea3b20ea22925:0x62df220efc555584"],

		["name" => "Glacier", "location" => "48°41′48″N 113°43′6″W", "date" => "1910-05-11", "area" => 1013322, "description" => "Description goes here.", "url" => "https://www.google.com/maps/place/Glacier+National+Park/@48.7596163,-113.7892165,17z/data=!3m1!4b1!4m2!3m1!1s0x5368901555555555:0xaf16bc2215c55dec"]
	];
	$query = "truncate national_parks";
	$dbc->exec($query);
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description, park_url) VALUES (:name, :location, :date, :area, :description, :url)";
	$stmt = $dbc->prepare($query);
	foreach ($parks as $key => $value)
	{
		$stmt->bindValue(":name", $value["name"], PDO::PARAM_STR);
		$stmt->bindValue(":location", $value["location"], PDO::PARAM_STR);
		$stmt->bindValue(":date", $value["date"], PDO::PARAM_STR);
		$stmt->bindValue(":area", $value["area"], PDO::PARAM_INT);
		$stmt->bindValue(":description", $value["description"], PDO::PARAM_STR);
		$stmt->bindValue(":url", $value["url"], PDO::PARAM_STR);
		$stmt->execute();
		echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
	}
?>