 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/modif.css">
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
            
             <div class=" col-md-12 format">
                 <div class=" col-md-12 inser">
                     
                     <?php
                        include 'connect_db.php';
                        $nom = $_GET['nom'];
                        $date_n = $_GET['Date_n'];
                        $date_d_ab = $_GET['Date_d_ab'];
                        $telephone = $_GET['telephone'];
                        $email = $_GET['email'];
                        $id = $_GET['id'];
                        // $i=$_GET['i'];
                        if (isset($_POST['modifier']) && !empty($_POST['modifier'])) {
                            $nom = $_POST['nom'];
                            $date_n = $_POST['Date_n'];
                            $date_d_ab = $_POST['Date_d_ab'];
                            $telephone = $_POST['telephone'];
                            $email = $_POST['email'];

                            $req = $base->prepare('UPDATE abonnees SET nom = ?, date_n =?, date_d_ab =?, telephone =?, email =? WHERE Num =?');
                            $req->execute(array(
                                $nom,
                                $date_n,
                                $date_d_ab,
                                $telephone,
                                $email,
                                $id
                            ));
                            header('location:liste.php?modif=1');
                        }
                        if (isset($_POST['annuler']) && !empty($_POST['annuler'])) {
                            header('location:liste.php');
                        }


                        echo " <form class='form-group'  method='POST'>
                         <input value=' $nom 'class='inputnom'  name='nom'><br>
                         <input value=' $date_n ' class='inputdaten' name='Date_n'><br>
                         <input value=' $date_d_ab' class='inputdated' name='Date_d_ab'><br>
                         <input value='  $telephone ' class='inputtel' name='telephone'><br>
                         <input value='  $email' class='inputmail' name='email'><br /><br>
                          <button class='col-md-2' id='modifier' type='submit' value='Modifier' name='modifier' > Modifier </button>
                            <button class='col-md-2 offset-md-3' id='annuler' type='submit' value='Annuler' > Annuler </button>  </form>";



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