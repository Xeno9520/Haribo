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
$id = $_POST["id"];

$sql = "UPDATE produit SET nom = '$nom', prix= $prix, photo = '$photo' where id = $id";
echo $sql;
$resultat = $bdd->query($sql);
header("location:admin.php");
?>

</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>