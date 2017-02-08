<?php
	session_start();
	require "Email.php";
	$form = new Email;
	if(isset($_POST['envoyer'])){

		$infos = $form->controle($_POST['destinataire'], $_POST['expediteur'], $_POST['sujet'], $_POST['contenu']);
		echo "Destinataire : " . $infos[0] . "<br>";
		echo "Expéditeur : " . $infos[1] . "<br>";
		echo "Sujet : " . $infos[2] . "<br>";
		echo "Contenu : " . $infos[3] . "<br>";
		$_SESSION['mail'] = $infos;

	}
 ?>

<form class="" action="" method="post">
	<input type="submit" name="oui" value="Confirmer l'envoi">
</form>

<?php
	if(isset($_POST['oui'])){
		$form->envoi($_SESSION['mail']);
	}


 ?>
