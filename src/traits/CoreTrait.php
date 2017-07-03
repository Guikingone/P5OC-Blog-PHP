<?php

namespace  Lib\traits;

// Add the DBFactory namespace.

/**
* Classe CoreTrait
*/ 

trait CoreTrait
{
	/** 
	* @var array
	*/
	private $data;

	Public function __construct()
	{
		$this->getData();
	}

	public function getData()
	{
		$this->data = require __DIR__ . './../../app/conf/confPath.php';
	}
	
	// Allow to use the DBFactory from the Trait into the controllers.
	// Once this is done, you can have access to the DB from every controller then
	// pass the instance like this :
	//
	// public function __construct()
	//{
		//$this->manager = new ArticleManager($this->getDB());
	//}
	
	public function getDB()
	{
		return new DBFactory($this->data));
	}

	public function getTwig()
	{
		$loader = new \Twig_Loader_Filesystem([$this->data['views_folder']]);
		return new \Twig_Environment($loader);
	}
}
