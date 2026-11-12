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
        //========== Loop through indexed array with foreach
        $kleuren = array('blauw','rood','geel','zwart');

        
        foreach ($kleuren as $kleur ) {
            echo "$kleur <br>";
          }


        //========== Loop through keyed array with foreach
        
        foreach ($kleuren as $key => $kleur) {
            echo "$key : $kleur <br>";
          }


	?>

    <a href="10-while-loops.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="11TASK-loop-o-loop.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>