<?php
ob_start();
include("../app/view/_partials/_header.php");
include("../app/view/_partials/_navbar.php");
?>
 

 <!-- Search box. -->
 <section>
 <div class="container mt-8">
    <div class="row">
<div class="col-sm-0 col-md-2 col-lg-3"></div>
<div class="col-sm-12 col-md-8 col-lg-6">
<div class="form-group">
<input class="form-control" type="text" id="search-partners" value="" placeholder="Rechercher des partenaires">
<input type="submit" id='submit' class="btn bg-gradient-info w-30 my-auto mt-3" value='Rechercher'>
</div>
</div>
    </div>
 </div>
    </div>
 </div>
 </section>





<!--BOUTONS ACTIVE-->
<div class="container-fluid">
<div class="btn-group btn-group-toggle w-70" data-toggle="buttons">
  <label class="btn btn-success active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off"> Inactive
  </label>
  <label class="btn bg-primary"> 
    <input type="radio" name="options" id="option3" autocomplete="off"> Tous
  </label>
</div>
</div>



<div class="container-fluid">
  <h4 class="col-md-12">LES STRUCTURES</h4>
</div>


 
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/9.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS ABLIS</h5>
  <p class="mt-3 ms-3">50 allée Galilée -  ABLIS</p>
  <p class="mt-3 ms-3">elite.fitness@gmail.com</p>
  <div class="form-check form-switch ps-0 mt-3 ms-3 mb-3">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault">
                  </div>
 </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title ms-5">Options</h5>
        <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault" checked>
                <!--    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked> -->
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Vendre des boissons</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault1">
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Vendre des équipements</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Gérer le planning d'équipe</label>
                  </div>
                </li>
                <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Envoyer newsletter</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault1">
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Modifier les paiements</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-5" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Gérer les factures</label>
                  </div>
                </li>
     <!--   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>-->
    </div>
 </div>
 </div>
 </div>
 </div>




<?php
ob_end_flush();
include("../app/view/_partials/_footer.php");
include("../app/view/_partials/_scripts.php");
?>

