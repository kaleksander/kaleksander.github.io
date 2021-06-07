<!DOOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

	if (false !== strpos($_SERVER['REQUEST_URI'], '?')){
		
		$szukaj = htmlspecialchars($_GET["name"]);
		
		$miasta_json = file_get_contents("cities.json");
		$miasta_tablica = json_decode( $miasta_json, true);
		
		$znajdz_miasta = array();
		
		foreach($miasta_tablica as $miasto){
			if(stripos($miasto["name"], $szukaj) !== false){
				
				array_push($znajdz_miasta, $miasto);
				
			}
			if(count($znajdz_miasta) === 10 ){
				break;
			}
		}
		
		echo json_encode($znajdz_miasta);
	
	}
	
?>

</body>
</html>