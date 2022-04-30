<?php
session_start();
include '../abonnes_php/connect_db.php';

$valider= $_POST["valider"];
     $nom=$_POST["nom"];
     $prenom=$_POST["prenom"];
     $email=$_POST["email"];
     $passwords=md5($_POST["passwords"]);
     $pconf=$_POST["pconf"];
    $_SESSION['nom']=$nom;
    $_SESSION['email']=$email;
     $req = $base->prepare('INSERT INTO administrateurs(nom,prenom,email,passwords)
                        VALUES (:nom,:prenom,:email,:passwords)');

  $req->execute(array('nom'=>$nom, 'prenom'=>$prenom,'email'=>$email,'passwords'=>$passwords));
            
if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($password)  && !empty($password_repeat))
                        {


                        }else{
                        

                    echo '<b>Veuillez remplir tous les champs</b>';
                        
                        ?>

                        <?php
                        }

                        if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($password))
                        
                        {


                        }else{


                        session_start();
                        $_SESSION['nom'] = $_POST['nom'];
                        $_SESSION['prenom'] = $_POST['prenom'];
                        header('Location:../index.php');


                        }


                        

                           ?>