<?php
	class Indemnisation{

		private $cv;
		private $distance;

		public function __construct(){}

		public function getCV(){
			return $this->cv;

		}

		public function getDistance(){
			return $this->distance;

		}


		public function setCV($cv){
			$cv = (int) $cv;
			if($cv > 0){
				$this->cv  = $cv;
			}
		}

		public function setDistance($distance){
			$distance = (int) $distance;
			if($distance > 0){
				$this->distance = $distance;

			}
		}


		public function calcul(){
			$cv = $this->getCV();
			$distance = $this->getDistance();
			if($cv <= 3){
				if($distance <= 5000){
					return 0.41 * $distance;
				}elseif($distance >= 5001 && $distance <= 20000){
					return (0.245 * $distance) + 824;
				}else{
					return 0.285 * $distance;
				}

			}elseif($cv == 4){
				if($distance <= 5000){
					return 0.493 * $distance;
				}elseif($distance >= 5001 && $distance <= 20000){
					return (0.27 * $distance) + 1082;
				}else{
					return 0.332 * $distance;
				}
			}elseif($cv == 5){
				if($distance <= 5000){
					return 0.543 * $distance;
				}elseif($distance >= 5001 && $distance <= 20000){
					return (0.305 * $distance) + 1188;
				}else{
					return 0.364 * $distance;
				}

			}elseif($cv == 6){
				if($distance <= 5000){
					return 0.568 * $distance;
				}elseif($distance >= 5001 && $distance <= 20000){
					return (0.32 * $distance) + 1244;
				}else{
					return 0.382 * $distance;
				}

			}elseif($cv >= 7){
				if($distance <= 5000){
					return 0.595 * $distance;
				}elseif($distance >= 5001 && $distance <= 20000){
					return (0.337 * $distance) + 1288;
				}else{
					return 0.401 * $distance;
				}

			}

		}
	}




?>
