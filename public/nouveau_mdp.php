<?php
$page = 'Mot_de_passe';
include('../app/model/database/db.php');
include("../app/view/_partials/_header.php");
include("../app/view/_partials/_navbar.php");
?>

<script language="javascript" type="text/javascript">
 var Password=false; var RePassword=false; 

 function enregistrer ()
{

  if(b_civilite==true && b_nom==true && b_prenom==true && b_mail==true && b_mdp==true )
document.getElementById("message").innerText = "Envoi serveur";
}

 else
 {
  document.getElementById("message").innerText = "Le formulaire n'est pas complet";
 } 
</script>

<?php
if(!empty($_POST)){
if(isset($_POST["Password"], $_POST["RePassword"])
&& !empty($_POST["Paseword"]) && !empty($_POST["RePassword"]) && !empty($_POST["enregistrer"])

){

}else{
    die("Le formulaire est incomplet");
}
}
?>
 


 <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Veuillez modifier votre mot de passe </h3>
                <!--  <p class="mb-0">Veuillez modifier votre mot de passe</p> -->
                </div>
                <form action="partenaires.php" method="post">
                <div class="card-body">
                  <form role="form">
                  <label><b>Nouveau mot de passe</b></label>
                    <div class="mb-3">
                <input type="password" class="form-control" placeholder="Nouveau mot de passe" aria-label="Password" aria-describedby="password-addon" required>
                    </div>
                    
                    <label><b>Confirmez le mot de passe</b></label>
                    <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirmer le mot de passe" aria-label="RePassword" aria-describedby="password-addon" required>
                </div>
                    <input type="submit" id='submit' name="submitPassword" class="btn bg-gradient-info w-100 mt-4 mb-0" value='Enregistrer'>
                   
                   <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
}
?>

</form>
                </div>
              </div>
            </div>  
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                style="background-image:url('../assets/img/curved-images/curved9.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>





<?php 
include("../app/view/_partials/_footer.php");
include("../app/view/_partials/_scripts.php");
?>