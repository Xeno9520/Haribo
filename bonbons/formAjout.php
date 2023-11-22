<?php
include('entete.php');
?>
<img src="Images/banniere.jpg" width="1500pxl">
<h1 align = 'center'> Ajout d'un produit </h1>
<?php
    include('config.php');
    //connexion à la BDD
    $bdd = connect();

        ?>
        <form method="POST" action="Ajout.php" enctype="multipart/form-data"> 
        <center>
            <br>
        Nom du produit<br><input type="text" name="nom"><br>
        Prix du produit<br><input type="text" name="prix"><br>
        Image du produit<br><input type="file" name="image" accept="image/png, image/jpg"><br><br>
        <input type="Submit">
        </center>


    </form>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>