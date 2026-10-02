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
		// Create a "Secret Agent Profile".
        // Assign variables for: code name, age, favorite gadget, and mission status (true/false). 
        // Then, echo them out as a dossier. 
        // Spare time? Style it with CSS!
	    // ===========================================================
        
        $secretProfile = 'Secret Agent profile'
        $naam = 'secret agent Dylan';
        $age = 45;
        $favouriteGadget = 'sniper';
        $MissionStatus = true;

        echo "<h1>" . $secretProfile . "</H1>";
        echo "<p>" . $naam . "</p>";
        echo "<p>" . $age . "</p>";
        echo "<p>" . $favouriteGadget . "</p>";
        echo "<p>" . $MissionStatus . "</p>";
// ik weet niet of ik in 1 echo meerdere variabelen kan zetten met puntje, want ik kan dat niet zien 


		// Time: 3-10 minutes
		// Ready? Push to GIT!
	?>

    <a href="02-vars-and-datatypes.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="03-basic-operators.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>