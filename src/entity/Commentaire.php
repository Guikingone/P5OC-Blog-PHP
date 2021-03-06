<?php

/**
* Classe définissant un commentaire.
* @author Mickael B.
* @version 1.0
*/

class Article
{
	protected $id;
	private $_auteur;
	private $_dateCreation;
	private $_contenu;
	private $_articleId;


/**
* Constructeur
* @param $donnees array
* @return void
*/
	public function __construct(array $donnees)
	{
		$this->hydrate($donnees);
	}


/**
* Hydratation
* @param $commentaire array
* @return 
*/
	public function hydrate(array $commentaire)
	{
		foreach ($article as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}

// Getters

	public function getId()
	{
		return $this->id;
	}

	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function getDateCreation()
	{
		return $this->_dateCreation;
	}

	public function getContenu()
	{
		return $this->_contenu;
	}

	public function getArticleId()
	{
		return $this->_articleId;
	}



// Setters

	public function setId($id)
	{
		$this->id = (int) $id;
	}

	public function setAuteur($auteur)
	{
		if (is_string($auteur) && (strlen($ateur) <= 255)) {
			$this->_auteur = $auteur;
		}
	}

	public function setDateCreation($dateCreation)
	{
		$this->_dateCreation = $dateCreation;
	}

	public function setContenu($contenu)
	{
		if (is_string($contenu)) {
			$this->_contenu = $contenu;
		}
	}

	public function setArticleId()
	{
		return $this->_articleId = $articleId;
	}
}