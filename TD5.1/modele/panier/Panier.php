<?php

require_once("../bean/Album.php");

class Panier
{
  private $montant;
  private $articles;

  public function __contruct(){
  	$this->articles = array();
  	$this->montant = 0;
  }

  public function ajoutArticle($album){
  	$this->articles[$album->getIdentifiant()] = $album ;
  	$this->setMontant($this->getMontant() + $album->getPrix());
  }

  public function getArticles($id){
  	return $this->articles[$id];
  }

  public function suppArticle($album){
  	unset($this->articles[$album->getIdentifiant()]);
  	$this->setMontant($this->getMontant() - $album->getPrix());
  }

  public function getMontant(){
  	return $this->montant;
  }

  public function setMontant($m){
  	$this->montant = $m;
  }
}

?>
