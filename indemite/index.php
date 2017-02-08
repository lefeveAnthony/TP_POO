


<?php
	require "indemnisation.class.php";
	$calcul = new Indemnisation;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form class="" action="" method="post">
			Nombre de chevaux : <input type="number" name="cv" value="" required><br>
			Nombre de kilomètre : <input type="number" name="km" value="" required><br>
			<input type="submit" name="calculer" value="Calculer">
		</form>

		<?php
			if(isset($_POST['calculer'])){
					$calcul->setCV(trim($_POST['cv']));
					$calcul->setDistance(trim($_POST['km']));
					echo "le montant de d'indemnisation est de : " . $calcul->calcul() . " €";
			}

		 ?>
	</body>
</html>
