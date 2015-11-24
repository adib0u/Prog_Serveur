<?php
header("Content-type: text/html; charset=utf-8");
// vous ne devez rien modifier dans ce script qui vous permet de tester votre classe Dao

require_once("Panier.php");
require_once("../dao/Dao.php");


echo "on établie la connexion ";
$dao = new Dao();

$panier = new Panier();

echo "Test ajout d'article";
$panier->ajoutArticle($dao->getAlbum(1));
echo $panier->getArticles(1)->getTitre();

echo "Test montant";
echo $panier->getMontant();

echo "Test sup Article";
$panier->suppArticle($panier->getArticles(1));
echo $panier->getMontant();
?>