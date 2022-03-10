<?php
// Connexion BDD
$pdoEntreprise = new PDO(
  'mysql:host=localhost;dbname=projetUn',
  'root',
  '',
  array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // afficher les erreurs SQL dans le navigateur
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // charset des échanges avec la BDD
  )
);

 $prenom=$_POST["prenom"];
 $age=$_POST["email"];
 $age=$_POST["mdp"];
 $age=$_POST["message"];
 $valider=$_POST["envoyer"];
 $erreur="";
 if(isset($valider)) {
   if(empty($prenom)) $erreur.= "Prénom vide !";
   if(empty($email)) $erreur.= "Email vide !";
   if(empty($mdp)) $erreur.= "mdp vide !";
   if(empty($message)) $erreur.= "Message vide !";
   if(empty($envoyer)) $erreur.= "Envoye vide !";
 }
?>

<!-- FORMULAIRE D'INSCRIPTION -->
<!-- <section>
  <form name="fo" method="post" action="form.php">
    <div class="label">Prénom</div>
    <div class="input">
      <input type="text" name="prenom" value="<?php echo $prenom?>">
    </div>

    <div class="label">Nom</div>
    <div class="input">
      <input type="text" name="nom" value="<?php echo $nom?>">
    </div>
    
    <div class="label">Âge</div>
    <div class="input">
      <input type="number" name="age" min="12" value="<?php echo $age?>">
    </div>
    <div class="input">
      <input type="submit" name="valider" value="M'inscrire">
    </div>
  </form>

  <?php if(!empty($erreur)){ ?>
  <div id="erreur"><?php echo $erreur ?></div>
  <?php } ?>
</section> -->