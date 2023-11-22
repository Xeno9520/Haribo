<?php
session_start();
include('entete.php');

include('config.php');
//connexion à la BDD
$bdd = connect();
extract($_POST);
$id = $_GET["id"];
echo $id;

$sql = "SELECT id,nom,prix,photo FROM produit where id = $id";
$resultat = $bdd->query($sql);
//affichage des résultats dans un objet

if (isset($id)){
   
    if (!isset($_SESSION['panier'])){
 echo 'ok';
    $_SESSION['panier']=array();//création de la variable session

    }

if (isset($_SESSION['panier'][$id]))
{
    $_SESSION['panier'][$id]++;//ajoute 1 à la quantité
}
else{
    $_SESSION['panier'][$id]=1; // sinon met un dans la quantité
}

$_SESSION['succes']="le produit a été ajouté au panier !";
header("location:index.php");

}
?>
</html>