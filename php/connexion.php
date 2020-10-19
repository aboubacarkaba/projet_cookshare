<?php
SESSION_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$bdd= new PDO('mysql:host=localhost;dbname=projet_chef_oeuvre', 'root', 'root');
//si la variable formconnexion existe on peut continuer
if(isset($_POST['formconnexion']))
{
    $emailconnect = htmlspecialchars($_POST['emailconnect']);
    $passwordconnect = sha1($_POST['passwordconnect']);
    if(!empty($emailconnect) && !empty($passwordconnect))
    {
      $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? && password = ?");
      $requser->execute(array($emailconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1)
      {
        //permet de verifier si les id des users sont stockés dans la session correspondante
        $userinfo = $requser->fetch();

        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['email'] = $userinfo['email'];
       // echo $_SESSION['id'];
       header("Location: profil.php?id= ".$_SESSION['id']);

      }
      else{
        $erreur = "vos identifiants sont pas correctes !!!";
      }

    }
          else{
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

    <div class="intoer">
        <h2>Je me connecte à Cook & Share</h2>
        <P>J'ai pas de compte </P>
        <a href="../php/inscription.php">
            <P>Je m'inscris</P>
        </a>
        <form method="post" action="">
            <div class="row">
                <div class="col-30">
                    <label for="fname">E-mail:</label>
                </div>
                <div class="col-80">
                    <input type="email" id="email" name="emailconnect" placeholder="votre E-mail">
                </div>

                <div class="row">
                    <div class="col-30">
                        <label for="mdp">Mot de passe:</label>
                    </div>
                    <div class="col-80">
                        <input type="password" id="mdp" name="passwordconnect" placeholder="votre mot de passe">
                    </div>
                    <div class="row">
                        <input type="submit" value="se connecter" name="formconnexion">
                    </div>
                </div>
            </div>
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