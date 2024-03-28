<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Azrou Sani
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Azrou Sani</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Azrou/App/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Accuil</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/Azrou/App/Factures.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Factures</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="http://localhost/Azrou/App/Commandes.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Commands</span>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/Azrou/App/Clients.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Clients</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/Azrou/App/Deconnexion.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Déconnexion</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Accuil</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="http://localhost/Azrou/App/Profil.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <!-- ##################### container ###############################  -->
      
      <div class="row">
        <div class="col-12">
            <div class="card mb-4">
              
            <div class="card-header pb-0">
              <h5>Nouvel Commande</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                  <form id="From" action="">
                    <!-- #### Client info #### -->
                    <h6 class="card-header text-success">Client Info</h6>
                    <table class="table align-items-center mb-0">
                        <tbody>
                            <tr class="d-flex justify-content-around">
                            <td class="col-3">
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex col-12 flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Nom Complet De Client *</h6>
                                    <input id="Nom" name="Nom" type="text" class="form-control">
                                </div>
                                </div>
                            </td>
                            
                            <td class="col-3">
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex col-12 flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Tele *</h6>
                                    <input id="Tel" name="Tel" type="text" class="form-control">
                                </div>
                                </div>
                            </td>
                            <td class="col-3">
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex col-12 flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Cliant Exist</h6>
                                    <select class="form-select col-12" name="Cliant_Exist" id="Cliant_Exist">
                                        <option disabled selected>Cliant Exist </option>
                                        <!-- Code php poure recupere les Client -->
                                    </select>
                                </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- #### Livraison info #### -->
                    <h6 class="card-header text-success">Livraison Info</h6>
                    <table class="table align-items-center mb-0">
                        <tbody>
                            <tr class="d-flex justify-content-around">
                                <td class="col-3">
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex col-12 flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Ville *</h6>
                                        <input id="Ville" name="Ville" type="text" class="form-control">
                                    </div>
                                    </div>
                                </td>
                                <td class="col-3">
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex col-12 flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Prix de Livraison *</h6>
                                        <input id="PrixLiv" name="PrixLiv" type="text" class="form-control">
                                    </div>
                                    </div>
                                </td>
                                <td class="col-3">
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex col-12 flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Date de Livraison *</h6>
                                        <input id="DateLiv" name="DateLiv" type="date" class="form-control">
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- #### Chambres info #### -->
                    <h6 class="card-header text-success">Chambres Info</h6>
                    <table class="table align-items-center mb-0">
                        <tbody>
                            <tr class="d-flex justify-content-around">
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Nombre Des Chambres</h6>
                                        <input id="NbChambres" name="NbChambres" type="text" class="form-control">
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Ajouter</h6>
                                        <i id="Ajouterchambres" class="btn btn-primary">Ajoute Chambres</i>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Donne des Chambres -->
                    <table class="table align-items-center mb-0">
                        <tbody id="tableChambre">
                            
                        </tbody>
                    </table>
                    <div id="Calculer" class="btn btn-primary ms-4">Calculer</div>
                    <h6 id="Tres" class="card-header  text-success">Resultat</h6>
                    <table class="table align-items-center mb-0">
                        <tbody id="tableResultat"></tbody>
                    </table>
                    <input id="submit" class="btn btn-dark col-4 mx-auto mx-auto" type="submit" value="Ajouter Commande">
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ######################################################################### -->
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <script src="./script/Commande.js"></script>
</body>

</html>