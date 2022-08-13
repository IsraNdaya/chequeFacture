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
    <style type="text/css" media="print">
        .dontprint{display: none;}
    </style>
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
      <script>
          function imprimer(divName) {
              var printContents = document.getElementById(divName).innerHTML;
              var originalContents = document.body.innerHTML;
              document.body.innerHTML = printContents;
              window.print();
              document.body.innerHTML = originalContents;
          }
      </script>
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

                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
                      <a class="nav-link " href="products.php">
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
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mx-auto">
          <div id="sectionAimprimer" class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row" >
              <div class="col-12" >
               <center><h2 class="tm-block-title d-inline-block">Nouveau Chèques</h2></center>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12" >
                <form action="../control/createCheque.controller.php" class="tm-edit-product-form" >
                    <div class="row">
                        <div class="col-8 tm-block-col">
                            <p class="text-white">Nom du bénéficiaire</p>
                            <input name="nomBeneficiaire" type="text" class="form-control validate"/>
                        </div>
                        <div class="col-4 tm-block-col">
                            <p class="text-white">Date</p>
                            <input id="expire_date" name="dateCheque" type="text" class="form-control validate" value=""/>
                        </div>
                        <div class="col-8 tm-block-col">
                            <p class="text-white">Montant en lettres</p>
                            <input name="montantLettres" type="text" class="form-control validate"/>
                        </div>
                        <div class="col-4 tm-block-col">
                            <p class="text-white">Montant numérique</p>
                            <input name="montantNum" type="number" class="form-control validate"/>
                        </div>
                        <div class="col-12 tm-block-col">
                            <p class="text-white">Observation</p>
                            <input name="observation" type="text" class="form-control validate"/>
                        </div>
                    </div>
                <div class="row mb-4">
                </div>
            </div>
                <div class="col-12" >
                    <button align="center" type="submit" class="dontprint btn btn-primary btn-block text-uppercase">enregistrer</button>
                </div>
          </div>
        </div>
            </form>
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
          document.getElementById("date").innerHTML= Date();
      </script>
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script >
    <script  type="text/javascript">
        $(document).ready(function() {
            $(".add").click(function() {
                var libelle = $("#libelle").val();
                var Qte = $("#Qte").val();
                var compteur = $("#compteur").val();
                var ligne = "<tr><td><input type='checkbox' name='select'></td><td>" + compteur + "</td><td>" + libelle + "</td><td>" + Qte + "</td></tr>";
                $("table.table").append(ligne);

            });
            $(".delete").click(function() {
                $("table.table").find('input[name="select"]').each(function() {
                    if ($(this).is(":checked")) {
                        $(this).parents("table.table tr").remove();
                    }
                });
            });
        });
    </script>
  </body>
</html>
