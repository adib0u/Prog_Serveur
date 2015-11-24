<?php 



class Album
{
private $auteur;
private $titre;
private $genre;
private $prix;
private $image;
private $identifiant;

public function getAuteur(){
	return $this->auteur;
}

public function setAuteur($aut){
	$this->auteur = $aut;
}

public function getTitre(){
	return $this->titre;
}

public function setTitre($aut){
	$this->titre = $aut;
}

public function getGenre(){
	return $this->genre;
}

public function setGenre($aut){
	$this->genre = $aut;
}

public function getPrix(){
	return $this->prix;
}

public function setPrix($aut){
	$this->prix = $aut;
}

public function getImage(){
	return $this->image;
}

public function setImage($aut){
	$this->image = $aut;
}

public function getIdentifiant(){
	return $this->identifiant;
}

public function setIdentifiant($aut){
	$this->identifiant = $aut;
}


}
?>
