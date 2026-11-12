<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
		// ===========================================================
		// Maak een lijst met bezoekers die in een achtbaan willen
		// Gebruik een loop om de achtbaan 3 keer te laten rijden
		// Elke ronde echo je "Rit X vertrekt!"
		// In elke ronde gebruik je een foreach loop om te echoën welke bezoekers in de attractie zitten:
		// Voeg een beetje leuke wiskunde toe: geef elke persoon een willekeurig "fun level" tussen 1-6 (Elke waarde heeft een andere betekenis) en echo dit naast hun naam. Bvb: "Alice is screaming!", "Bob is holding on tight!"
		// ===========================================================
	
		$bezoekers = array('Aaron','Elize','Dylan','Jabrane','Amo','Bryian');

		for ($i=0; $i <= 3 ; $i++) { 

        echo "Rit " . $i + 1 . " vertrekt! <br> " ;

        

		foreach ($bezoekers as $persoon) {
            $funlevel = rand(1,6);

			if (funlevel == 1) {
				$betenis = "is doodsbang!";
			}elseif (funlevel == 2) {
				$betenis = "is superongezond!";
			}elseif (funlevel == 3) {
				$betenis = "is gek!";
			}elseif (funlevel == 4) {
				$betenis = "is doodsblij!";
			}elseif (funlevel == 5) {
				$betenis = "is blij!";
			}else{
				$betenis = "is bang!";
			}
			echo "$persoon $betekenis <br>"
          }
		}


		  

		  

		

		// Time: 8-20 minutes
		// Record: 18:24 Jasper (BINF, 2025)
		// Ready? Upload to smartschool!
	?>

    <a href="11-foreach.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="12-functions.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>