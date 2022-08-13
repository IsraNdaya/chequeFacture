<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
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
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Chèques Bancaire</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row" id="sectionAimprimer">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="" method="post" class="tm-edit-product-form">
                  <div class="form-group mb-3">

                      <table class="table table-striped table-responsive-sm">
                          <thead>
                          <tr style="text-align: left">
                              <th scope="col">
                                  <strong/><p style="text-color">John Adams</p>
                                  <p>1234 Avenue Principale
                                  <p>Lubumbashi, RDC</p>
                              </th>
                              <th scope="col">
                                <p>Août-022</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                              </th>
                              <th scope="col">
                                  <p>date : <u><?php echo $_GET['datecheque'] ?></u> </p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                              </th>
                              <th scope="col" style="text-align: left">
                                  <p>num chèque : <u><?php echo "CH000".$_GET['id'] ?></u></p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                              </th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr style="text-align: justify">
                              <th scope="row" colspan="3">
                              Bénéficiaire : <u><?php echo $_GET['nomBeneficiaire'] ?></u>
                              </th>
                              <td>
                                  <p>montant(CDF) : <u><?php echo $_GET['montantNum'] ?></u></p>
                              </td>
                          </tr>
                          <tr style="text-align: justify">
                              <th scope="row" colspan="3">
                                  <p>montant en toutes lettres : <u><?php echo $_GET['montantLettres'] ?></u></p>
                              </th>
                              <td>
                                  <p>CDF</p>
                              </td>
                          </tr>
                          <tr style="text-align: justify">
                              <th scope="row" colspan="4">
                                  <p>Banque Centrale du Congo</p>
                                  <p>Lubumbashi, Haut-Katanga</p>
                              </th>
                          </tr>
                          <tr style="text-align: justify">
                              <th scope="row" colspan="2">
                                  <p>observation : <u><?php echo $_GET['observation'] ?></u></p>
                              </th>
                              <th scope="row" colspan="2">
                                  <p>Signature : <u><?php echo "Isra Nd." ?></u></p>
                              </th>
                          </tr>
                          <tr style="text-align: justify">
                              <th scope="row" colspan="1">
                                  <p><u>@12346789@</u></p>
                              </th>
                              <th scope="row" colspan="1">
                                  <p><u><strong>@1234567899@</strong></u></u></p>
                              </th>
                              <th scope="row" colspan="2">
                                  <p><u><strong>@CH000@</strong></u></u></p>
                              </th>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
            </form>
            </div>
              <div class="col-12">
                  <button onclick="imprimer('sectionAimprimer')" type="submit" class="btn btn-primary btn-block text-uppercase">Imprimer</button>
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
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>
