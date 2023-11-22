<?php
session_start();

include('entete.php');
?>
    <h1 align = 'center'> Modification d'un produit </h1>
<?php
include('config.php');
//connexion à la BDD
$bdd = connect();
extract($_POST);
$id = $_GET["id"];
$sql = "SELECT id,nom,prix,photo FROM produit where id = $id ";
$resultat = $bdd->query($sql);
$produit = $resultat -> fetch(PDO::FETCH_OBJ);
$row = [$produit -> id, $produit -> nom, $produit -> prix, $produit-> photo ];

//affichage des résultats dans un objet
    ?>
    <form method="POST" action="modif2.php" enctype="multipart/form-data"> 
    <center>
        <br><br><br><br>
    <input type="text" name = "nom" value=<?php echo $row[1]; ?>>
    <input type="text" name = "prix" value=<?php echo $row[2]; ?>>
    <input type="text" name = "photo" value=<?php echo $row[3]; ?>><br><br>
    <input type="hidden" name = "id" value=<?php echo $row[0]; ?>><br>
    <input type="Submit" value="Validez les modifications">
    </center>


</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>