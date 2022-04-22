<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/enregistrement.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">



    <title>Document</title>
</head>

<body>
    <div class="container-fluid tete">
        <div class="row teta">
            <div class=" col-md-3 offset-md-1 logo1">
                <img src="./Logo.png" alt="">
            </div>
            <div class=" col-md-8 texte">
                <h1>Gestion des abonnés</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid formu">
        <div class=" row fofo">
            <div class=" col-md-2 offset-md-4 log">
                <img src="./Logo.png" alt="">
            </div>
            <div class=" col-md-8 offset-md-2">
                <form action="abonne.php" method="post">
                    Nom<input type="text" name="Nom" id="" class="inputnom"><br>
                    Date_N <input type="date" name="Date_n" id="" class="inputdaten"><br>
                    Date_D_A <input type="date" name="Date_d_ab" id="" class="inputdated"><br>
                    Tel <input type="number" name="telephone" id="" class="inputtel"><br>
                    E-mail <input type="email" name="email" id="" class="inputmail"><br /><br>
                    <button type="submit" value="Annuler" name="annuler" id="annuler">Annuler</button>
                    <button type="submit" value="Valider" name="valider" id="Valider"> Valider</button>

                </form>
                <a href="liste.php"> <button value="Lister" name="lister" id="Lister"> Lister</button> </a>



            </div>
        </div>

    </div>



    <div class="container-fluid footer">
        <div class="row foot">
            <div class="col-md-1">
                <p class="p1">www.auf.org</p>
            </div>
            <div class=" col-md-6 offset-md-1">
                <p class="p2">2022 &copy; Tous droits réservés</p>

            </div>

        </div>
    </div>

</body>

</html>