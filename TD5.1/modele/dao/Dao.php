<?php

require_once("ConnexionException.php");
require_once("AccesTableException.php");
require_once("../bean/Album.php");



class Dao
{  
  
  private $connexion;

 
 
 // 	permet d'ouvrir une connexion avec le sgbd
 
 // il suffit de remplacer x par les informations qui vous concernent.
  public function connexion() 
  {
    try
      {
	//connection
	       $this->connexion = new PDO('mysql:host=localhost;charset=UTF8;dbname=E145646L','E145646L','E145646L');	//on se connecte au sgbd
	       $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	//on active la gestion des erreurs et d'exceptions
      }
    catch(PDOException $e)
      {
	       throw new ConnexionException("Erreur de connection");
      }
    //connection reussie

  }



/* méthode qui permet de récupérer la liste de tous les albums d'un genre donné de la base (avec toutes les infos disponibles)
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu

postconditions:
 
une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée: 

si le genre correspond à un genre dans la table album, un tableau d'objet de type Album est retourné
sinon null est retourné

*/
 
  public function getListeAlbum($genre) 
  {
    try
    {
      $this->connexion();
      try
      {
        $ret = $this->connexion->prepare("SELECT * FROM album WHERE genre=\"".$genre."\" ");
        $ret->execute();
      }
      catch(PDOException $e)
      {
        throw new AccesTableException("Error when access to the table");
        
      }
        $this->deconnexion();
        $liste = $ret->fetchAll(PDO::FETCH_CLASS,"Album");
        return $liste;
    }
    catch(PDOException $e)
    {
      throw new ConnexionException("Error of connection");
    }
   
  }


/* méthode qui permet de récupérer un album dans la base ayant un certain identifiant (avec toutes les infos disponibles)
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu

postconditions:

une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée:
 si l'identifiant en paramètre correspond à un album de la base, un objet de type Album est retourné
 sinon null est retourné
*/
  public function getAlbum($identifiant)  {
    try
    {
      $this->connexion();
      try
      {
        $ret = $this->connexion->prepare("SELECT * FROM album WHERE identifiant=\"".$identifiant."\" ");
        $ret->setFetchMode(PDO::FETCH_CLASS,"Album");
        $ret->execute();
        
      }
      catch(PDOException $e)
      {
        throw new AccesTableException("Error when access to the table");
      }
      $this->deconnexion();
      $liste = $ret->fetch();
        return $liste;
    }
    catch(PDOException $e)
    {
      throw new ConnexionException("Error of connection");
    }
   
}
        

/* méthode qui permet d'obtenir un mot de passe dans la base associé à un certain login
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu 

postconditions:
une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée:
si le login est associé à un mot de passe dans la table une chaine de caractère contenant le mot de passe est renvoyé
sinon null est renvoyé
*/
  public function getMotDePasse($login)  {
    try
    {
      $this->connexion();
      try
      {
        $ret = $this->connexion->prepare("SELECT password FROM identification WHERE login=\"".$login."\" ");
        $ret->execute();
        
      }
      catch(PDOException $e)
      {
        throw new AccesTableException("Error when access to the table");
      }
      $this->deconnexion();
      $liste = $ret->fetch();
        return $liste[0];
    }
    catch(PDOException $e)
    {
      throw new ConnexionException("Error of connection");
    }
    
  }
  
  

 /* méthode qui permet de vérifier si un login donné correspond bien au mot de passe passé en paramètre
  les mots de passe ont été cryptés dans la base avec crypt() en php.
 
 postconditions:
 
 une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée, 
si le login est associé à un mot de passe dans la table la valeur true est renvoyée, false sinon
*/
  public function verifieMotDePasse($login, $password)  {
    try
    {
      $this->connexion();
      try
      {
        $ret = $this->connexion->prepare("SELECT password FROM identification WHERE login=\"".$login."\" ");
        $ret->execute();
        
      }
      catch(PDOException $e)
      {
        throw new AccesTableException("Error when access to the table");
      }
      $this->deconnexion();
      $pass = $ret->fetch()[0];
      if ($pass == crypt($password,$pass)) {
        return true;
      }
      else{
        return false;
      }
    }
    catch(PDOException $e)
    {
      throw new ConnexionException("Error of connection");
    }
  }


  //méthode permettant la deconnexion du sgbd
  public function deconnexion()
  {
    $this->connexion = null;
  }
	


}

?>
