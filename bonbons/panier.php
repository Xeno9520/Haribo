<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="panier.php">Panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accueil-admin.php">Admin</a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="recherche.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="Nom_bonbon">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 align='center'>Panier</h1>
<body style = "background-color:#0d6efd ">
<table class="table">
  <thead>
    <tr>
      <th>Produit</th>
      <th>Taille</th>
      <th>Quantité</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody id="panier">
  </tbody>
</table>
</div>
      
</nav>
</body>
<footer>
<div style="text-align: center;">
  <a class = "btn btn-info" href = "index.php">Commander</a>
  <a class = "btn btn-info" href = "#">Payer</a>
  </div>
</footer>