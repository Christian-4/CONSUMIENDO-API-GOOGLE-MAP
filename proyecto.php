<?php if (isset($_GET['sitio'])){

                $sitio = $_GET['sitio'];
                $url = "https://maps.googleapis.com/maps/api/geocode/json?address=". $sitio ."&key=AIzaSyD4t5cq-6lgmBoY6Myx-dWP5nQ4nBKDCf4";
                $get = file_get_contents($url);
                $decode = json_decode($get, true);
}?>

<html>
        <head>
                <title>TPMarzo01</title>
        </head>
        <body>
                <form action="" method="GET">
                        <p>Ingresa un sitio y te daré sus coordenadas.</p>
                        <input type="text" name="sitio">
                        <input type="submit" value="Enviar">
                </form>

		<?php if (isset($_GET['sitio'])){

			echo "Las coordenadas de " . $sitio . " son: </br>"; 

		}

		foreach ($decode["results"] as $clave => $valor) {

			echo $valor["geometry"]["location"]["lat"] . "</br>";
			echo $valor["geometry"]["location"]["lng"] . "</br>";

		}?>

        </body>
</html>

