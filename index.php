<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mon site chef d'oeuvre</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/iconik.ico">
</head>

<body>
    <?php require_once('./php/headertest.php'); ?>



    <section class="given-1">
        <div class="add">
            <h1>cook&share</h1>
            <p>decouverte des nouvelles recettes smart</p>
        </div>

        <div class="given-2">
            <div class="low">
                <h1>CUISINE AFRICAINE</h1>
                <a href="afrik-food.php"><img src="assets/img/africa.jpg" alt="image repas" width="280" height="200"
                        title="repas urbain" /></a>
            </div>
            <div class="low">
                <h1>CUISINE ASIATIQUE</h1>
                <a href="asia-food.php"><img src="assets/img/asia.jpg" alt="image repas" width="280" height="200"
                        title="repas asiatique" /></a>
            </div>
            <div class="low">
                <h1>CUISINE EUROPEENNE</h1>
                <a href="europe-food.php"><img src="assets/img/euro.jpg" alt="image repas" width="280" height="200"
                        title="repas européen" /></a>
            </div>
            <!--<div class="gallery">
  <a target="_blank" href="">
    <img src="assets/img/asia.jpg" alt="Cinque Terre" width="280" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div> -->
        </div>

    </section>





    <section id="slider">
        <button class="prev sliderbutton">&lt;</button>
        <button class="next sliderbutton">&gt;</button>
        <div class="slide">
            <img src="assets/img/pic1.jpeg" alt="Une belle image" />
            <!-- <h1>Bienvenue sur mon slide !</h1>
                
                    C'est moi qui l'ai fait tout seul, avec mes p'tits doigts et mon
                    gros cerveau…
                </p>-->
        </div>
        <div class="slide">
            <img src="assets/img/pic2.jpeg" alt="Une belle image aussi" />
            <!--<h2>Vous trouvez pas qu'il est hyper classe ?</h2>
               <p>
                    Non sans dec', vous trouvez pas ? Parce que moi, je le trouve
                    vraiment hyper classe.
                </p>-->
        </div>
        <div class="slide">
            <img src="assets/img/pic3.jpeg" alt="Une image moins belle mais pas mal quand même" />
            <!-- <h2>Ou classe ? Ou pas ? Hein ?</h2>
             <p>
                    Bah, vous y connaissez rien toute façon. Faisez-en des diaporamas,
                    on verra bien…
                </p>-->
        </div>




        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="assets/js/diapo.js"></script>
        <script src="assets/js/app.js" charset="utf-8"></script>

    </section>


    <?php require_once('./php/footer.php'); ?>


</body>

</html>