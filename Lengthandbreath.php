<!DOCTYPE>
<html>


<head>
<title>PHP practical for today</title>
</head>

	<body>
	<h1>Painting a house</h1>
	
		<?php
		
			$length=30;
			$width=40;
			$area=$length*$width;
			$cost1=30;
			$cost2=25;
			
			if($area> 50) {
				$price1= $cost1*$area;
					echo $price1;
			}
				else {
					$price2=$cost2*$area;
						echo $price2;
			}
		
		?>
		
		
</body>
</html>
			