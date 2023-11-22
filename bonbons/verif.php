<?php
session_start();
$login = $_POST["login"];
$mdp = sha1($_POST["mdp"]);

include('config.php');
//connexion à la BDD
$bdd = connect();
$sql = "select login,mdp from admin where login = '$login' and mdp = '$mdp' ";
echo $sql;

$resultat = $bdd->query($sql);
$rep = $resultat->fetch(PDO::FETCH_OBJ);
$nb_lignes = $resultat -> rowCount();


if ($nb_lignes == 0){
    header("location:admin.php");
}else{
    $_SESSION["admin"] = $rep ->login;
    $_SESSION["autorisation"]="OK";
    header("location:accueil-admin.php");
}
