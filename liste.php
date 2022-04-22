<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/liste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">



    <title>List</title>
</head>

<body>
    <!-- le header  -->
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

    <!-- le tableau des abonnes  -->
    <div class="container-fluid tableau">

        <div class="row table">
            <div class="col-md-12 bordure">


                <?php

                include 'connect_db.php';

                $reponse = $base->query('SELECT * FROM abonnees');
                echo '<table class="table table-striped  ">
                    <thead>
                        <tr>
                            <th scope="col" class="compt">No</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Date de naissance</th>
                            <th scope="col">Date d\'abonnement</th>
                            <th scope="col">Numero de telephone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" class="compt">Action</th>
                        </tr>';
                $i = 1;
                while ($donnees = $reponse->fetch()) {

                    echo '<tr>
                          <td class="compt">' . $i . '</td> 
                        <td>' . $donnees['nom'] . '</td>
                        <td>' . $donnees['date_n'] . '</td>
                        <td>' . $donnees['date_d_ab'] . '</td>
                        <td>' . $donnees['telephone'] . '</td>
                        <td> <a href="mailto:' . $donnees['email'] . ' ">' . $donnees['email'] . '</a> </td>
                        <td class="compt"><a href="modifier.php?id=' . $donnees['Num'] . '"> <i class="fa-solid fa-pen xicon"></i> </a> <a href="supprimer.php?id=' . $donnees['Num'] . '"><i class="fa-solid fa-trash  xicon"></i></a></td>
                        </tr>';
                    $i++;
                };


                echo '</table>';


                ?>











            </div>

        </div>


    </div>

    </div>





    <!-- le footer  -->
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