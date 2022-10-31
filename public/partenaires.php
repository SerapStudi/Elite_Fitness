<?php
$page = 'Partenaires';
include('../app/model/database/db.php');
include("../app/view/_partials/_header.php");
include("../app/view/_partials/_navbar.php");
?>


<section>
 <!-- Search box. -->
 <div class="container mt-8">
    <div class="row">
<div class="col-sm-0 col-md-2 col-lg-3"></div>
<div class="col-sm-12 col-md-8 col-lg-6">
<div class="form-group">
  <form method="POST">
<input class="form-control" type="text" name="search" id="search-partners" value="" placeholder="Rechercher des partenaires">
</form>


<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
  <label class="form-check-label" for="inlineRadio1">Actif</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Inactif</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Tous </label>
</div>
</div>
</div>
</div>
    </div>
 </div>



<div class="container-fluid py-4 mt-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Liste des Partenaires</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Partenaires</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date contrat</th>
                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th> 
                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th> 
                      <th class="text-secondary opacity-7"></th> 
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                      

<!-- <div class="container-fluid">
<div class="content-wrapper mt-7">
  <section class="content-header">
    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <form action="" method="post">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Partenaire</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> -->

          <form action="partenaires.php" method="POST">

            <div class="modal-body">

              <div class="form-group">
                <label> Titre </label>
                <input type="text" name="Saisissez votre nom" class="form-control" placeholder="Saisissez le nom de partenaire">
              </div>
              <div class="form-group">
                <label>Date de contrat</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez la date de début du contrat">
              </div>
              <div class="form-group">
                <label>Statut</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez le statut">
              </div>
        
            </div>
            <div class="modal-footer">
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addadminprofile">
              Ajouter un Partenaire
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Modifier</button>
              <button type="submit" name="registerbtn" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>



    <div class="container-fluid">
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/1.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Paris</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.paris@gmail.com</p>
                          </div>
                        </div>
                     
                        </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">23/04/2018</p>
                  
                      <td class="align-middle text-center text-sm"> 
      
                     <span class="badge badge-sm bg-gradient-success">Actif</span> 
                      </td>
            
                      <td class="align-middle">   <div class="ms-auto text-end">
                     <form action="" method="post">
                      <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                      <form action="" method="post">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td>  
                    </tr>
                    <tr> 
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/9.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Ablis</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.ablis@gmail.com</p>
                          </div>
                        </div>
                      </td>
                     <td>
                        <p class="text-xs font-weight-bold mb-0">11/01/2017</p>
                      </td> 
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Inactif</span>
                      </td>
                
                      <td class="align-middle">   <div class="ms-auto text-end">
                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </td> 
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/11.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Saint-Tropez</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.st.tropez@gmail.com</p>
                          </div>
                        </div>
                      </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">19/09/2016</p>
                      </td>  
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Actif</span>
                      </td>
                   <td class="align-middle">   <div class="ms-auto text-end">
                     <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>



                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/4.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Cachy</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.cachy@gmail.com</p>
                          </div>
                        </div>
                      </td>
                     <td>
                        <p class="text-xs font-weight-bold mb-0">18/02/2015</p>
                      </td> 
                      <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Inactif</span>
                      </td>
                      <td class="align-middle">   <div class="ms-auto text-end">
                   <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>



                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/5.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Chalais</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.chalais@gmail.com</p>
                          </div>
                        </div>
                      </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">23/04/2014</p>
                      </td>  
                      <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Inactif</span>
                      </td>
                      <td class="align-middle">   <div class="ms-auto text-end">
                      <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>


                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/fitness/12.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Dienne</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.dienne@gmail.com</p>
                          </div>
                        </div>
                      </td>
                     <td>
                     <p class="text-xs font-weight-bold mb-0">18/02/2012</p>
                      </td> 
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Actif</span>
                      </td>
                      <td class="align-middle">   <div class="ms-auto text-end">
                       <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>



                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <img src="../assets/img/fitness/13.jpg"  class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Sablet</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.sablet@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">14/05/2010</p>
                      </td>  
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Actif</span>
                      </td>
                      <td class="align-middle">   <div class="ms-auto text-end">
                       <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <img src="../assets/img/fitness/7.jpg"  class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Elite Fitness Upie</h6>
                            <p class="text-xs text-secondary mb-0">elite.fitness.upie@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">04/10/2011</p>
                      </td>  
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Inactif</span>
                      </td>
                      <td class="align-middle">   <div class="ms-auto text-end">
                       <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Modifier</a>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Supprimer</a>
                      </div>
                      </td> 
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>





    <script>
    $(document.ready(function(){
      $('search_partenaires').keyup(function()
      
      {


      }
    }):
    
    </script>


          
<?php
include("../app/view/_partials/_footer.php");
include("../app/view/_partials/_scripts.php");
?>


