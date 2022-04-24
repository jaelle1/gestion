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



     <div class="container-fluid formu">
         <div class=" row fofo">
             <div class=" col-md-8 offset-md-2  log">
                 <h1>Ajout Effectué !!</h1>
             </div>
             <div class=" col-md-12 format">
                 <div class="inser">
                     <?php
                        $nom = $_GET['Nom'];
                        $date_n = $_GET['Date_n'];
                        $date_d_ab = $_GET['Date_d_ab'];
                        $telephone = $_GET['telephone'];
                        $email = $_GET['email'];


                        " <input value=' echo $nom 'class='inputnom'><br>
                         <input value=' echo $date_n ' class='inputdaten'><br>
                         <input value=' echo $date_d_ab' class='inputdated'><br>
                         <input value=' echo $telephone ' class='inputtel'><br>
                         <input value=' echo $email' class='inputmail'><br /><br>"
                        ?>

                 </div>
                 <div class="forma1">
                     <div class=" col-md-1 offset-md-4 coca1"><img src="./im1.jpg"></div>
                     <div class="coca">
                         <div class="spa"> <span> <a href="modification.php"> <button type="submit" value="Valider" name="valider" id="Lister"> Enregistrer</button></a></span> <span><a href="liste.php"> <button type="submit" value="Annuler" name="annuler" id="annuler">Annuler</button></a></span></div>
                     </div>
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