<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonbons</title>
</head>
<body style = "background-color:#0d6efd ">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="recherche.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="Nom_bonbon">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <h1 align = 'center' >Table bonbons </h1>
<?php
    $Nom_bonbon = strtolower($_POST["Nom_bonbon"]);
    include('config.php');
    //connexion à la BDD
    $bdd = connect();

    //requête
    $sql = "select nom,prix,photo from produit where lower(nom) like '%$Nom_bonbon%'";

    //execution de la requête
    $resultat = $bdd->query($sql);

    //affichage des résultats dans un objet
    
    while($produit = $resultat -> fetch(PDO::FETCH_OBJ))
        {
            ?>
            <div class="card" style="width: 9rem; background-color:#dc3545;display:inline-block; ">
                <img class="card-img-top" src='Images/<?php echo $produit->photo ?>'alt="Card image cap">
                <div class="card-body">
                    <center><h5 class="card-title"><?php echo $produit->nom ?></h5></center>
                    <center><p class="card-text"><?php echo $produit->prix ?>€</p></center>
                    <center><a href="#" class="btn btn-primary">Details</a></center>
                </div>
            </div>
        <?php
        }
        ?>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>