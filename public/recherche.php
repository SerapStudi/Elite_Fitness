<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include('../app/model/database/db.php');



$recherche = htmlspecialchars($_POST['recherche']);
$choix = htmlspecialchars($_POST['choix']);

if(!empty($recherche) && $choix==1){
$requete = "SELECT * FROM recherche_partners WHERE actif LIKE :choix";
$resultat =$db ->prepare($requete);
$resultat ->bindValue(":recherche",'%'.$recherche.'%');
$resultat ->execute();
}else if(!empty($recherche) && $choix==2){
    $requete = "SELECT * FROM recherche_partners WHERE inactif LIKE :choix";
    $resultat =$db ->prepare($requete);
    $resultat ->bindValue(":recherche",'%'.$recherche.'%');
    $resultat ->execute();
}else if(!empty($recherche) && $choix==3){
    $requete = "SELECT * FROM recherche_partners WHERE r_partners LIKE :choix";
    $resultat =$db ->prepare($requete);
    $resultat ->bindValue(":recherche",'%'.$recherche.'%');
    $resultat ->execute();
}
if($resultat->rowCount()!=0){
    echo '<div class="alert alert-primary" role="alert">' .$resultat->rowCount().' Resultat trouvé.</div>';
    foreach ($resultat as $key){
        echo '<div class="container-fluid"><div class="card my-3 mt-3"><div class="card-body">';
        echo $key['actif'];
        echo '</div><div class="alert alert-primary" role="alert">';
        echo $key['inactif'];
        echo '<p class="card-text">';
        echo $key['tous'];
        echo '<p/></div></div>';
}
else{
    echo'<div class="alert alert-warning" role="alert"> aucun resultat!</div>';
}
?>