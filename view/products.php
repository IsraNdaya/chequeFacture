<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
  <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
          <a class="navbar-brand" href="index.php">
              <h1 class="tm-site-title mb-0">Facturation_Chèque</h1>
          </a>
          <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars tm-nav-icon"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto h-100">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">
                          <i class="fas fa-tachometer-alt"></i>
                          Tableau de bord
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li class="nav-item dropdown">

                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                          <i class="far fa-file-alt"></i>
                          <span>
                                    Facturation <i class="fas fa-angle-down"></i>
                                </span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="nouvelleFacture.php">Nouvelle Facture</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">

                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                          <i class="far fa-file"></i>
                          <span>
                                    Chéquier <i class="fas fa-angle-down"></i>
                                </span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="nouveauCheque.php">Nouveau Chèque</a>
                          <a class="dropdown-item" href="listeCheques.php">Liste des Chèques</a>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link active" href="products.php">
                          <i class="fas fa-shopping-cart"></i>
                          Produits
                      </a>
                  </li>
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link d-block" href="login.php">
                          <b>Quitter</b>
                      </a>
                  </li>
              </ul>
          </div>
      </div>

  </nav>

  <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
                <h2 class="tm-block-title">Liste des produits</h2>
                <a href="add-product.php"
                        class="btn btn-primary text-uppercase mb-3">Ajouter un produit</a>
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOM PRODUIT</th>
                    <th scope="col">PRIX DE VENTE UNITAIRE</th>
                    <th scope="col">EN STOCK</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                  //recover the class codes
                  require_once "../config/config.php";
                  require_once "../model/DAO/Connexion.class.php";
                  require_once "../model/DAO/ProduitDAO.class.php";
                  //call the method and recover the services list in the table
                  $listeProduits = ProduitDAO::getAllProduits();
                  $compteur=1;
                  foreach ($listeProduits as $line){
                      echo "<tr>";
                      echo "<td style=\"text-align: center;\">".$compteur."</td>";
                      echo "<td>".$line['libelle']."</td>";
                      echo "<td style='text-align: left'>"."CDF"." ".$line['pv']."</td>";
                      echo "<td style='text-align: left'>".$line['qteStock']." "."Pcs"."</td>";
                      $compteur++;
                  }
                  ?>
                  </tbody>
              </table>
            </div>
            <!-- table container -->

          </div>
        </div>
      </div>
    </div>
    <?php
    include_once "partial/footer.view.php";
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "";
        });
      });
    </script>
  </body>
</html>