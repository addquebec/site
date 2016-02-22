<?php
namespace ADD;

class Cours {
	public $nom;
	public $jour;
	public $type;

	// [hour(int), minute(int)]
	public $debut;

	// [hour(int), minute(int)]
	public $fin;

	function __construct($params) {
		$this->nom = $params['nom'];
		$this->type = $params['type'];
		$this->jour = $params['jour'];
		$this->debut = $params['debut'];
		$this->fin = $params['fin'];
	}


	public function duree() {
		return ($this->fin[0] - $this->debut[0]) * 60 +
			$this->fin[1] - $this->debut[1];
	}

	public function textHoraire() {
		return sprintf(
			'%s : %dh%02d-%dh%02d',
			$this->nom,
			$this->debut[0], $this->debut[1],
			$this->fin[0], $this->fin[1]
		);
	}
}
