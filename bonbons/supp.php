<?php
session_start();
include('entete.php');
extract($_POST);
  include('config.php');
  $bdd = connect();

  $id = $_GET["id"];

    $sql = "DELETE FROM produit where id = $id ";
    $resultat = $bdd->query($sql);
    //affichage des résultats dans un objet
    header("location:admin.php");
        ?>
    
</body>
</html>