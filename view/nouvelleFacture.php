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

                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
          <div id="sectionAimprimer" class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row" >
              <div class="col-12" >
               <center><h2 class="tm-block-title d-inline-block">Fiche Facture</h2></center>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12" >
                  <div class="dontprint row mb-4">
                      <div class="col-4">
                          <p class="text-white">Produits</p>
                          <select id="libelle" class="custom-select">
                              <option selected></option>
                              <?php
                              require_once "../config/config.php";
                              require_once "../model/DAO/Connexion.class.php";
                              require_once "../model/DAO/ProduitDAO.class.php";
                              try{
                                  $compteur = 1;
                                  foreach(ProduitDAO::getAllProduits() as $produit){
                                      echo"<option value='".$produit['libelle']."' data-pv='".$produit['pv']."'>".$produit['libelle']."</option>";
                                  }
                                  $compteur++;
                              }catch(Exception $ex){

                                  echo "Message = ".$ex->getMessage()." Line = ".$ex->getLine();

                              }
                              ?>
                          </select>
                      </div>
                      <div class="col-2">
                          <p class="text-white">Prix Unitaire</p>
                          <input id="pv" name="pv" type="text" class="form-control validate" required/>
                      </div>
                      <div class="col-2">
                          <p class="text-white">Qté</p>
                          <input id="Qte" name="qteSorite" type="number" class="form-control validate" value="1" required/>
                      </div>
                      <div class="col-2">
                          <p class="text-white">&nbsp;</p>
                          <button type="submit" class="add btn btn-primary btn-block text-uppercase" value="Ajouter">Ajouter</button>
                      </div>
                      <div class="col-2">
                          <p class="text-white">&nbsp;</p>
                          <button type="submit" class="delete btn btn-primary btn-block text-uppercase">Supprimer</button>
                      </div>
                  </div>
                  <div class="row">
                  <div class="col-8 tm-block-col">
                          <p class="text-white">Nom Client</p>
                          <input name="nomClient" type="text" class="form-control validate" value="Client habituel" />
                  </div>
                  <div class="col-4 tm-block-col">
                          <p class="text-white">Date</p>
                          <input id="date"  name="date" type="date" class="form-control validate" value="<?php echo date('Y-m-d'); ?>"/>
                  </div>
                  </div>
                <form action="" class="tm-edit-product-form" >
                    <table class="table table-stripped tm-table-small tm-product-table">
                        <thead>
                        <tr>


                            <th scope="col">#</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Qté</th>
                            <th scope="col">Prix Unitaire</th>
                            <th scope="col">Total HT</th>

                        </tr>
                        </thead>
                        <tbody id="row_container">
                        </tbody>
                         <tr>
                            <td colspan="2">Total en CDF</td>
                            <td id="total_price" class="row_total"></td>
                         </tr>
                    </table>
                    <div class="row">
                        <div class="col-8 tm-block-col">
                        </div>
                    </div>

                </form>
            </div>
                <div class="col-12 tm-block-col">
                    <button onclick="imprimer('sectionAimprimer')" type="submit" class="dontprint btn btn-primary btn-block text-uppercase">imprimer</button>
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
          date = new Date();
          year = date.getFullYear();
          month = date.getMonth();
          day = date.getDate();
          document.getElementById("date").innerHTML= month + "/" + day + "/" + year;
      </script>
      <script>
      $(function() {
        $("#expire_date").datepicker();
      });
      </script >

<!-- mon code debut -->
      <script  type="text/javascript">
        $(document).ready(function() {
            $(".add").click(function() {
                var libelle = $("#libelle").val();
                var quantity = $("#Qte").val();
                var price = $("#pv").val();
                var rowPrice = quantity*price;
                var ligne = "<tr id='row' class='isra'><td><input type='checkbox' name='select'></td><td>"
                        + libelle + "</td><td class ='refresh_prices row_quantity'>"
                        + quantity + "</td><td class ='refresh_prices row_price'>"
                        + price + "</td><td class='row_total'>"
                        + rowPrice + "</td></tr>";
            $("#row_container").append(ligne);
            });

            $(".delete").click(function() {
                $("table.table").find('input[name="select"]').each(function() {
                    if ($(this).is(":checked")) {
                        $(this).parents("table.table tr").remove();
                    }
                });
            });
        });

        $(document).change(function() {
            refreshPrices();
        });
        function refreshPrices() {
            var totalPrice = 0;
            $('.isra').each(function(){
                totalPrice +=  refreshRowPrice($(this));
            });
            $('#total_price').text(totalPrice);
        }
        function refreshRowPrice($ligne) {
                price = $row.find('.row_price').val();
                quantity = $row.find('.row_quantity').val();
                rowPrice = price * quantity;
                rowPrice = $ligne.find('.row_total').val();
                 return rowPrice;
        }

      </script>
<!-- mon code fin-->

      <script>
          $('#libelle').change(function () {
              var pv = $('#libelle option:selected').attr('data-pv');
              $('#pv').val(pv);
          });
      </script>
  </body>
</html>
