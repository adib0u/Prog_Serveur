<?php
require_once __DIR__."/../vue/vueAuthentification.php";
require_once __DIR__."/../modele/Dao.php";


class ControleurAuthentification{
 
 private $vue;
 
 public function __construct(){
 	$this->vue=new VueAuthentification();
 }

 public function __construct($login, $pass){
 	$dao = new Dao();
 	if ($dao->verifieMotDePass($login, $pass)) {
 		$a = new ControlleurAlbum(); 
 	}else{
 		header("Location: index.php?action=tryagain");
 	}
 }
 

public function authentification(){
	$this->vue->genereVueAuthentification();
}




}
