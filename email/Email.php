<?php
	class Email{

		private $destinataire;
		private $expediteur;
		private $sujet;
		private $contenu;

		public function __construct(){}

		public function getDestinataire(){
			return $this->destinataire;

		}

		public function getExpediteur(){
			return $this->expediteur;

		}

		public function getSujet(){
			return $this->sujet;

		}

		public function getContenu(){
			return $this->contenu;

		}

		public function setDestinataire($destinataire){
			$this->destinataire  = $destinataire;

		}

		public function setExpediteur($expediteur){
			$this->expediteur  = $expediteur;

		}

		public function setSujet($sujet){
			$this->sujet  = $sujet;

		}

		public function setContenu($contenu){
			$this->contenu  = $contenu;

		}

		public function form(){
			$html = "<form action='confirmation.php' method='POST'>";
			$html .= "<input type='email' name='destinataire' placeholder='Destinataire' required/><br>";
			$html .= "<input type='email' name='expediteur' placeholder='Expediteur' required/><br>";
			$html .= "<input type='text' name='sujet' placeholder='Sujet' required/><br>";
			$html .= "<textarea cols='30' rows='10' name='contenu'></textarea><br>";
			$html .= "<input type='submit' name='envoyer' value='Envoyer'/></form>";
			return $html;

		}

		public function controle($destinataire, $expediteur, $sujet, $contenu){
			if(empty($destinataire) || empty($expediteur) || empty($sujet) || empty($contenu)){
				return "Votre contenu est vide";
			}else{
				return array($destinataire, $expediteur, $sujet, $contenu);
			}

		}

		public function envoi(array $infos){
			if(is_array($infos)){
				$tabImplode = implode(",",$infos);
				$tabExplode = explode(",",$tabImplode);
				$header = "From : " . $tabExplode[1];
				@mail($tabExplode[0], $tabExplode[2], $tabExplode[3], $header);
			}

		}


	}






 ?>
