<!DOCTYPE>
<html>


<head>
<title>PHP practical for today</title>
</head>

	<body>
	<h1>Tax & Shipping fees</h1>
	
		<?php
			$item_name="Food";
			$price=0.10;
			$quantity= 2;
			$shipping=5;
			$tax_rate= 0.10;
			$subtotal= $price*$quantity;
			$taxtotal=$subtotal*$tax_rate;
			$totalcost=$subtotal+$tax_rate+$shipping;
			
			
			
			echo "Item: $item_name\n";
			number_format($price, 2) . "\n" . "<br>";
			
			echo "Item: $quantity\n";
			number_format($subtotal, 2) . "\n" . "<br>";
			
			echo "Item: $taxtotal\n";
			number_format($taxtotal, 2) . "\n" . "<br>";
			
			echo "Item: $shipping\n";
			number_format($shipping, 2) . "\n" . "<br>";
			
			echo "Item: $totalcost\n";
			number_format($totalcost, 2) . "\n" . "<br>";
			
			
			echo "Total price: $" . number_format($price, 2) . "\n";
			
			
		
		
		
		?>
		
</body>
</html>