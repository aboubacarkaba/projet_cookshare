<?php
    var_dump($_POST);

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
    <div>
        <h1>ajouter une recette</h1>

        <br />
        <br />
        <p>NB: recette pour une personne multiplier la quantité des ingrédients par le nombre de personne....</p>
    </div>
    <br />
    <br />
    <br />
    <div class="recip_box">
        <form action="" method="POST" class="form_recip">

            <label for="recip" class="label">titre de votre recette : </label>
            <input type="text" name="recip" id="name" required>


            <label for="europa" class="label">Recette Européenne</label>
            <input type="radio" id="scales" name="europa">



            <label for="africa" class="label">Recette Africaine</label>
            <input type="radio" id="horns" name="africa">


            <label for="asia" class="label">Recette Asiatique</label>
            <input type="radio" id="horns" name="asia">




            <label for="com" class="label">Ajouter ingredients: </label>
            <textarea type="email" name="com" rows="5" cols="60"></textarea>



            <label for="rows" class="label">préparation: </label>
            <textarea type="aria" name="rows" rows="5" cols="60" placeholder="Mode de Cuisson"> </textarea>




            <label for="photo" class="label">
                Ajoutez des photos(formats supportes : .png, .jpeg, .jpg, .gif
                | taille maximale : 400 Mo) :</label>
            <input type="file" id="photo" name="photo" />


            <label for="name" class="label">veuillez valider: </label>
            <input type="submit" name="name" value="valider">
        </form>
    </div>
</body>

</html>