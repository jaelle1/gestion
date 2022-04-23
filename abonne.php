 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/abonne.css">
     <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">



     <title>abonnee</title>
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




     <?php
        $nom = $_POST['Nom'];
        $date_n = $_POST['Date_n'];
        $date_d_ab = $_POST['Date_d_ab'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        // $annuler = $_POST['annuler'];
        // $valider = $_POST['valider'];
        // $lister = $_POST['lister'];
        include 'connect_db.php';
        if (isset($_POST['valider'])) {
            $req = $base->prepare('INSERT INTO abonnees (nom,date_n,date_d_ab,telephone,email) VALUES(:Nom,:Date_n,:Date_d_ab,:telephone,:email)');
            // $req1 = $base->prepare('SELECT * FROM abonnees ORDER BY Num  DESC LIMIT 1');
            if (empty($nom) || empty($date_n) || empty($date_d_ab) || empty($telephone) || empty($email)) {
                echo '<div class="alert alert-danger">
                    <strong>Erreur!</strong> Veuillez remplir tous les champs.
                    </div>';
            } else {
                $req->execute(array(
                    'Nom' => $nom,
                    'Date_n' => $date_n,
                    'Date_d_ab' => $date_d_ab,
                    'telephone' => $telephone,
                    'email' => $email
                ));
            }
        }


        ?>

     <div class="container-fluid formu">
         <div class=" row fofo">
             <div class=" col-md-8 offset-md-2  log">
                 <h1>Ajout Effectué !!</h1>
             </div>
             <div class=" col-md-12 format">
                 <div class="inser">
                     <form action="" method="">
                         <input value="<?php echo "$nom" ?>" class="inputnom"><br>
                         <input value="<?php echo "$date_n" ?>" class="inputdaten"><br>
                         <input value="<?php echo "$date_d_ab" ?>" class="inputdated"><br>
                         <input value="<?php echo "$telephone" ?>" class="inputtel"><br>
                         <input value="<?php echo "$email" ?>" class="inputmail"><br /><br>

                     </form>
                 </div>
                 <div class="forma1">
                     <div class=" col-md-1 offset-md-4 coca1"><img src="./im1.jpg"></div>
                     <div class="coca">
                         <div class="spa"> <span> <a href="liste.php"> <button type="submit" value="Valider" name="valider" id="Lister"> Modifier</button></a></span> <span><a href="liste.php"> <button type="submit" value="Annuler" name="annuler" id="annuler">Fermer</button></a></span></div>
                     </div>
                     <a href="liste.php" class="list"> <button type="submit" value="Lister" name="lister" id="lister">Lister</button></a>
                 </div>

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