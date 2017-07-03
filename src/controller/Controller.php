<?php

namespace Lib\controller;

use Lib\controller\core\ControllerTrait;
// Add the ArticleManager namespace here.

class Controller extends ControllerTrait
{
	private $manager;
	
	public function __construct(ArticleManager $manager)
	{
		$this->manager = $manager;
	}
	
	public function indexAction()
	{
		echo $this->getTwig()->render('index.html.twig');
	}

	public function articlesAction()
	{
		$articles = $this->manager->getArticles()
			
		echo $this->getTwig()->render('articles.html.twig', [
		    'articles' => $articles
		]);
	}

	public function articleDetailAction()
	{
		echo $this->getTwig()->render('articleDetail.html.twig');
	}
}
