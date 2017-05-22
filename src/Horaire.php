<?php
namespace ADD;

class Horaire {
	public static $minIncr = 15;
	public static $coursParIndex;
	public static $cours;

	public static function jours() {
		return [
			1 => 'Lundi',
			2 => 'Mardi',
			3 => 'Mercredi',
			4 => 'Jeudi',
			5 => 'Vendredi',
			6 => 'Samedi',
			7 => 'Dimanche'
		];
	}

	public static function heureDebut() {
		// @TODO dynamique?
		return 11;
	}

	public static function heureFin() {
		// @TODO dynamique?
		return 21;
	}

	public static function cours() {
		if(!self::$cours) {
			$coursData = [
				[
					'nom' => 'ADD Débutant',
					'type' => 'decouverte',
					'jour' => 1,
					'debut' => [18, 30],
					'fin' => [20, 0]
				],

				[
					'nom' => 'ADD Intermédiaire',
					'type' => 'vert',
					'jour' => 2,
					'debut' => [18, 30],
					'fin' => [20, 30]
				],

				[
					'nom' => 'ADD Intermédiaire',
					'type' => 'vert',
					'jour' => 4,
					'debut' => [18, 30],
					'fin' => [20, 30]
				],

				[
					'nom' => 'ADD Débutant',
					'type' => 'decouverte',
					'jour' => 5,
					'debut' => [16, 0],
					'fin' => [17, 30]
				],

				[
					'nom' => 'L\'entrainement du guerrier',
					'type' => 'force',
					'jour' => 6,
					'debut' => [11, 0],
					'fin' => [12, 00]
				],

				[
					'nom' => 'Entrainement libre en salle',
					'type' => 'jaune',
					'jour' => 6,
					'debut' => [13, 30],
					'fin' => [16, 0]
				],


				[
					'nom' => 'ADD 8 à 10ans',
					'type' => 'enfant',
					'jour' => 7,
					'debut' => [15, 0],
					'fin' => [16, 15]
				],

				[
					'nom' => 'ADD 11 à 15ans',
					'type' => 'enfant',
					'jour' => 7,
					'debut' => [16, 30],
					'fin' => [17, 45]
				],

				[
					'nom' => 'ADD Débutant',
					'type' => 'decouverte',
					'jour' => 7,
					'debut' => [17, 45],
					'fin' => [19, 15]
				],
				
				[
					'nom' => 'ADD 8 à 10ans',
					'type' => 'enfant',
					'jour' => 3,
					'debut' => [17, 0],
					'fin' => [18, 30]
				],
				
				[
					'nom' => 'ADD 11 à 15ans',
					'type' => 'enfant',
					'jour' => 3,
					'debut' => [19, 0],
					'fin' => [20, 30]
				]
			];

			self::$cours = array_map(function($data) {
				return new Cours($data);
			}, $coursData);
		}

		return self::$cours;
	}


	public static function coursDebutant($jour, $heure, $min) {
		$coursIndex = self::coursIndex($jour, $heure, $min);
		$coursParIndex = self::coursParIndex();
		if(!empty($coursParIndex[$coursIndex])) {
			return $coursParIndex[$coursIndex];
		}

		return null;
	}

	public static function coursParIndex() {
		if(!self::$coursParIndex) {
			self::$coursParIndex = [];
			foreach(self::cours() as $cours) {
				$coursIndex = self::coursIndex($cours->jour, $cours->debut[0], $cours->debut[1]);
				self::$coursParIndex[$coursIndex] = $cours;
			}
		}

		return self::$coursParIndex;
	}

	private static function coursIndex($jour, $heure, $minute) {
		return implode('-', [$jour, $heure, $minute]);
	}
}
