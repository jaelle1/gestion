<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/liste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">



    <title>List</title>
</head>

<body>
    <!-- le header  -->
    <div class="row teta">
        <div class=" col-md-3 offset-md-1 col-sm-3 logo1">
            <img src="../image/Logo.png" alt="">
        </div>
        <div class=" col-md-5 col-sm-3 texte">
            <h1>Gestion des abonnés</h1>
        </div>

    </div>
    <div class="row titi">
        <?php
        include 'connect_db.php';
        if (isset($_GET['modif'])) {
            echo "<div class='col-md-6 offset-md-3 alert-success bg-primary text-light text-center fofofo'><h4> Modifiée avec Succès!</h4></div>";
        }
        if (isset($_GET['supp'])) {
            echo "<div class='col-md-6 offset-md-3 alert-success bg-primary text-light text-center fofofo'><h4> Supprimée avec Succès</h4></div>";
        }

        ?>


    </div>


    </div>


    <!-- le tableau des abonnes  -->

    <div class="container-fluid tableau d-flex justify-content-center">


        <div class=" col-md-12 d-flex moov  justify-content-between">

            <div class="compteur col-md-1 col-sm-2 ms-3  text-center text-light bg-primary">
                <?php
                include 'connect_db.php';
                $rea = $base->prepare('SELECT COUNT(*) FROM abonnees');
                $rea->execute();
                $nb = $rea->fetchColumn();
                echo $nb . " Abonnés";

                ?>
            </div>
            <div class="compteur col-md-1 col-sm-2 me-3  text-center text-light bg-success">

                <a href="./enregistrement.php" class=" col-md-1 col-sm-2  text-center text-light">Ajouter</a>
            </div>
            <div class="compteur col-md-1 col-sm-2 me-3  text-center text-light bg-danger">

                <a href="../index.php" class=" col-md-1 col-sm-2  text-center text-light">Fermer</a>
            </div>

        </div>



        <div class="row table">
            <div class="col-md-12 bordure">


                <?php

                include 'connect_db.php';

                $reponse = $base->query('SELECT * FROM abonnees');
                echo '<table class="table table-striped-row">
                  
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

                    echo "<tr id=ligne$i>
                          <td class='compt'> $i </td> 
                        <td> $donnees[nom] </td>
                        <td> $donnees[date_n]  </td>
                        <td> $donnees[date_d_ab] </td>
                        <td> $donnees[telephone]  </td>
                        <td> <a href='mailto: $donnees[email]   '>  $donnees[email]  </a> </td>
                        <td class='compt'><a href='modifier.php?nom=$donnees[nom]&Date_n=$donnees[date_n]&Date_d_ab=$donnees[date_d_ab]&telephone=$donnees[telephone]&email=$donnees[email]&id=$donnees[Num]'> <i class='fa-solid fa-pen xicon'></i> </a> <a href='supprimer.php?id=$donnees[Num]'><i class='fa-solid fa-trash  xicon'></i></a></td>
                        </tr>";
                    $i++;
                };


                echo '</table>';


                ?>











            </div>

        </div>


    </div>

    </div>





    <!-- le footer ok -->
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