<?php
include('entete.php');
session_start();
if(isset($_SESSION["autorisation"]) and  $_SESSION["autorisation"] == "OK"){
    

?>
<form action="logout.php" method="POST">

    <h1 align = 'center'> Vous êtes dans la page admin  </h1>
    <center><img src="Images/logo_haribo.png"></center>
     <br><br>
    <center>Bienvenue sur la page admin !<br>
    <br>
    <input type="submit" name = "deconnection" value="Se deconnecter"></center>

</form>

<?php

    include('config.php');
    //connexion à la BDD
    $bdd = connect();

    $sql = "SELECT nom,prix,photo FROM produit";
    $resultat = $bdd->query($sql);
    ?>
    
   
    
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php
}else{
    echo "acces interdit";
    header("Location:admin.php");
}
?>