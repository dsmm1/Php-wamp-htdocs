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
	// 1. Make variables for: pizza price, topping price, delivery fee, number of pizzas ordered, number of toppings per pizza, and number of people at the table.
	// 2. Calculate the total price of the order, and how many slices each person gets if each pizza has 8 slices.
	// 3. Echo out the results in a user-friendly way.
	// ===========================================================

// price
	$pizzaPrice = 10;
	$toppingPrice = 5;
	$deliveryFee = 10;
//orders
	$numberOfPizzaOrdered = 5;
	$NumberToppingsPizza = 15;
	$NumberPeopleAtTable = 5;

// tekst
$tekst1 = "Rekening Pizza";


	//-----------total price berekening-----------
	$TotalPrice = 0;
	$TotalPrice = $numberOfPizzaOrdered * $pizzaPrice + $toppingPrice + $deliveryFee;
	//----------- total slices berekening ----------
	$totalSlices = 0;
	$totalSlices = $NumberPeopleAtTable/8;

	// --------- echo friendly way -----------

	echo "<h1>" .$tekst1. "</h1>";
	
	echo "<p> Dit is de totale prijs pizza's "   .$TotalPrice. "euro </p>";
	echo "<p> De total slides voor elk persoon "  . $totalSlices . "</p>";







	
	// Time: ?
	// Record: 6:59 Falco (2025)
	// Ready? Push to GIT!
	?>
	
    <a href="03-basic-operators.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04-arrays.php class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>