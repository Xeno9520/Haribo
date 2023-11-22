<?php
session_start();


include('entete.php');


?>
    <img src="Images/banniere.jpg" width="1500pxl">
    <h1 align = 'center'> Suppression d'un produit </h1>
<?php
    include('config.php');
    //connexion à la BDD
    $bdd = connect();

    $sql = "SELECT id,nom,prix,photo FROM produit";
    $resultat = $bdd->query($sql);
    //affichage des résultats dans un objet
    
    while($produit = $resultat -> fetch(PDO::FETCH_OBJ))
        {
            ?>
            <div class="card " style="width: 9rem;display:inline-block; ">
                <img class="card-img-top" src='Images/<?php echo $produit->photo ?>'alt="Card image cap">
                <div class="card-body">
                <center><h5 class="card-title"><?php echo $produit->nom ?></h5></center>
                    <center><p class="card-text"><?php echo $produit->prix ?>€</p></center>
                    <center><a href="supp.php?id=<?php echo $produit->id ?>" class="btn btn-danger"onclick = "return confirm('Attention ! vous vous appretez à le supprimer definitivement?')">Supprimer </a></center>
                </div>
            </div>
        <?php
        }
        ?>
    </form>
    

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>