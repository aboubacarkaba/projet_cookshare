<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body>



    <header>
        <nav>
            <div class="hamburg">
                <i class="fas fa-landmark"></i>
            </div>

            <div class="symbole">
                <a href="index.php"> <img class="wogo" src="assets/img/logo.png" alt="logo de cook&share" width="70"
                        height="128" /></a>
            </div>
            <div class="burg-menu">
                <ul>
                    <li> <a href="php/connexion.php" class="link-space"><i class="fas fa-paperclip"></i>se connecter</a></li>
                    <li><a href="php/inscription.php" class="link-space"><i class="far fa-envelope"></i>inscription</a></li>
                    <li><a href="" class="link-space"><i class="fas fa-question-circle"></i>aide</a></li>
                    <li><a href="" class="link-space"><i class="fas fa-cookie-bite"></i>spécialités</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <div>
        <script>

        $(document).ready(function() {
            $(".hamburg").on("click", function() {
                $("nav ul").toggleClass("burg-menu");
            });
        });



        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('scroll');
            } else {
                $('nav').removeClass('scroll');
            }
        })
        </script>
    </div>
</body>

</html>