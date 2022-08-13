<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Exercice didactique</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
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
  <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ajouter Produit</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="../control/createProduit.controller.php" class="tm-edit-product-form" method="get">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Code produit
                    </label>
                    <input id="name" name="codeProduit" type="text" class="form-control validate" required/>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Nom produit</label
                    >
                      <input id="name" name="libelle" type="text" class="form-control validate" required/>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label
                            for="prixa"
                            >Prix d'achat (CDF)
                          </label>
                          <input id="prixa" name="pa" type="number" class="form-control validate" data-large-mode="true"/>
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label
                            for="prixv"
                            >Prix de vente (CDF)
                          </label>
                          <input id="prixv" name="pv" type="number" class="form-control validate" required/>
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label
                            for="stock"
                            >Qté en stock
                          </label>
                          <input id="stock" name="qteStock" type="number" class="form-control validate" required/>
                        </div>
                  </div>
                  
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Ajouter Maintenant </button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  include_once "partial/footer.view.php";
  ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
