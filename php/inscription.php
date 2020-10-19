<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$bdd= new PDO('mysql:host=localhost;dbname=projet_chef_oeuvre', 'root', 'root');
//isset permet de verifier  que la donnée $_POST existe
if(isset($_POST['forminscription']))
{

  // securistaion de nos variables(champs)
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $email = htmlspecialchars($_POST['email']);
  $email2 = htmlspecialchars($_POST['email2']);
  $password = sha1($_POST['password']);
  $password2 = sha1($_POST['password2']);
  //si les cases ne sont pas vide
  if(
    !empty($_POST['pseudo']) 
    && !empty($_POST['email']) 
    && !empty($_POST['email2']) 
    && !empty($_POST['password'])
    && !empty($_POST['password2'])
  ) {
    

    $pseudolength = strlen($pseudo);
    if($pseudolength <= 255)
    {
      
      if($email == $email2)
      {
        // consiste à faire valider le mail avoir si pas de doublon
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          // permet de voir s'il y'a pas deux email identiques
          $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail= ?");
          $reqmail->execute(array($email));
          $mailexist = $reqmail->rowCount();
          if($mailexist == 0)
          {

          


       
        if($password == $password2){

          //requette pour inscription de membres

          $insertmbr = $bdd->prepare("INSERT INTO users(pseudo, email, password) VALUES(?, ?, ?)");
          $insertmbr->execute(array($pseudo, $email, $password));
          //$erreur ="votre compte à bien été crée !";
          $$_SESSION['comptecree'] = "votre compte à bien été crée ! <a href=\"connexion.php\">Me connecter<a/>";
          header('Location: ../php/connexion.php');
        }
        else{
          $erreur ="vos mots de passe ne correspondent pas !";
        }
      }
      else{
        $erreur = "Adresse mail dejà utilisée !";
      }
      }
      else{
        $erreur ="votre adresse mail n'est pas valide !";
      }
    }
      else{
        $erreur = "vos adresses mail ne correspondent pas !";
      }
    
    }
    else{
      $erreur = "votre pseudo ne doit pas depasser 255 caractères !"; 
    }

  } else {
    $erreur = "tous les champs doivent etre completés !";
  }
}

?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/styles.min.css " />
</head>

<body>

    <h2>inscription</h2>
    <div class="formbox">
        <form class="formbot" method="post" action="">
            <p>Pseudo:</p>
            <input type="text" placeholder="votre pseudo" id="pseudo" name="pseudo"
                value="<?php if(isset($pseudo)) { echo $pseudo; }?>" />
            <p>E-mail:</p>
            <input type="email" placeholder="votre E-mail" id="email" name="email"
                value="<?php if(isset($email)) { echo $email; }?>" />
            <p>Confirmer votre e-mail:</p>
            <input type="email" placeholder="Confirmer votre e-mail" id="email2" name="email2"
                value="<?php if(isset($email2)) { echo $email2; }?>" />
            <p>Mot de passe:</p>
            <input type="password" placeholder="votre mot de passe" id="mdp" name="password" />
            <p>Confimation du mot de passe:</p>
            <input type="password" placeholder="confirmation mot de passe" id="mdp2" name="password2" />
            <input class="connecting" type="submit" name="forminscription" value="submit" />
        </form>
        <?php
      if(isset($erreur))
      {
        echo $erreur;
      }
      ?>
    </div>

</body>

</html>