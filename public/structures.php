<?php
$page = 'Structures';
require("../app/view/_partials/_header.php");
require("../app/view/_partials/_navbar.php");
?>
 

 <section>
 <!-- Search box. -->
 <div class="container mt-8">
    <div class="row">
<div class="col-sm-0 col-md-2 col-lg-3"></div>
<div class="col-sm-12 col-md-8 col-lg-6  mt-2">
<div class="form-group">
  <form method="POST">
<input class="form-control" type="text" name="search" id="search-partners" value="" placeholder="Rechercher des partenaires">
</form>


<div class="form-check form-check-inline mt-3">
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


 <div class="container-fluid">
  <h4 class="col-md-12">LES STRUCTURES</h4>
</div>


 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/1.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS PARIS</h5>
  <p class="mt-3 ms-3">50 allée Galilée - 75010 PARIS</p>
  <p class="mt-3 ms-3">elite.fitness.paris@gmail.com</p>
  <div class="form-check form-switch ps-0 mt-3 ms-3 mb-3">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
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
 


  
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/9.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS ABLIS</h5>
  <p class="mt-3 ms-3">43 allée de jardin - 78660 ABLIS</p>
  <p class="mt-3 ms-3">elite.fitness.ablis@gmail.com</p>
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



 
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/11.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS SAINT TROPEZ</h5>
  <p class="mt-3 ms-3">12 allée du bureau </br> 83990 ST TROPEZ</p>
  <p class="mt-3 ms-3">elite.fitness.st.tropez@gmail.com</p>
  <div class="form-check form-switch ps-0 mt-3 ms-3 mb-3">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
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





  
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/4.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS CACHY</h5>
  <p class="mt-3 ms-3">24 rue du bac - 80800 CACHY</p>
  <p class="mt-3 ms-3">elite.fitness.cachy@gmail.com</p>
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





 
 
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/5.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS CHALAIS</h5>
  <p class="mt-3 ms-3">82 rue de Rivoli - 16210 CHALAIS</p>
  <p class="mt-3 ms-3">elite.fitness.chalais@gmail.com</p>
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


 
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/12.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS DIENNE</h5>
  <p class="mt-3 ms-3">11 allée de garage - 86410 DIENNE</p>
  <p class="mt-3 ms-3">elite.fitness.dienne@gmail.com</p>
  <div class="form-check form-switch ps-0 mt-3 ms-3 mb-3">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
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



 
 
 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/13.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS SABLET</h5>
  <p class="mt-3 ms-3">68 rue du commerce - 84110 SABLET</p>
  <p class="mt-3 ms-3">elite.fitness.sablet@gmail.com</p>
  <div class="form-check form-switch ps-0 mt-3 ms-3 mb-3">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
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


 

 <div class="container-fluid mt-5">
 <div class="card w-100">
 <div class="row no-gutters">
    <div class="col-md-4">
  <img class="card-img-top mt-3 ms-3" src="../assets/img/Fitness/7.jpg" alt="Card image cap">
  <h5 class="mt-3 ms-3">ELITE FITNESS UPIE</h5>
  <p class="mt-3 ms-3">7 allée maison - 26120 UPIE</p>
  <p class="mt-3 ms-3">elite.fitness.upie@gmail.com</p>
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
    </div>
 </div>
 </div>
 </div>
 </div>








          
<?php
require("../app/view/_partials/_footer.php");
require("../app/view/_partials/_scripts.php");
?>

