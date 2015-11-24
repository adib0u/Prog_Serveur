<?php

require_once 'controleurAuthentification.php';


class Routeur {

  private $ctrlAuthentification;
 

  public function __construct() {
  	if (isset($_GET['login']) && isset($_GET['password'])) {
  		$this->ctrlAuthentification= new ControleurAuthentification($_GET['login'],$_GET['password']);
  	}else{
  		$this->ctrlAuthentification= new ControleurAuthentification();
  	}

    
  }

  // Traite une requête entrante
  public function routerRequete() {
	$this->ctrlAuthentification->authentification();
          
  }

}

?>
