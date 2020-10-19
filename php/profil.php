<?php
SESSION_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$bdd= new PDO('mysql:host=localhost;dbname=projet_chef_oeuvre', 'root', 'root');

if(isset($_GET['id']) && $_GET['id'] > 0)
{
  $getid = intval($_GET['id']);//convertir les valeurs en nombre
  $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
  $requser->execute(array($getid));
  $userinfo = $requser->fetch(); 


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
    <h2>Bienvenue <?php echo $userinfo['pseudo']; ?></h2>
    <!--<div class="connexion">
        <br />
        pseudo=...//<?php echo $userinfo['pseudo']; ?>
        <br /><br />
        mail=... <?php echo $userinfo['email']; ?>-->
    <br />
    <!--etre le seule personne à avoir accès à sa session-->
    <?php
      if(isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id'])
      { 
      
      ?>
    <a href="../index.php">Accueil</a>&emsp;&emsp;&emsp;&emsp;
    
    <a href=""><input type="button" value="Acceder au forum"/></a>
    <a href=""><input type="button" value="Partager une recette"/></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    
    <a href="deconnexion.php"><input type="button" value="Se deconnecter"/></a>
    <?php

      }
      ?>
    </div>
    <div class="w3-display-co"  >
        <img class="w3-image" src="../assets/img/pic2.jpeg" alt="ciel-image" width="90%" height="800">
        <div class="w3-display">
            <h1 class="w3-xxlarge">Le Catering</h1>
        </div>
    </div>
    

</body>

</html>

<?php
}
?>