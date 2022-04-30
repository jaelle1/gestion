<?php
    session_start();
    include('../abonnes_php/connect_db.php');
    
    $email=$_POST['email'];
    $passwords= md5($_POST['passwords']);
    $connecter=$_POST['connecter'];
    $error="";

    if(isset($connecter)){
        
        $verif=$base->prepare("SELECT * FROM administrateurs WHERE email=? and passwords=? limit 1");
        $verif->execute(array($email,$passwords));
        $utilisateur=$verif->fetchAll();
        if(count($utilisateur)>0){

            $_SESSION['nom']=$nom;
            $_SESSION['connecter']='yes';

            header('location:../abonnes_php/enregistrement.php');
        }

        
        }


    




    ?>