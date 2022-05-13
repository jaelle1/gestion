<?php
    session_start();
    include('../abonnes_php/connect_db.php');
    
    $email=$_POST['email'];
    $passwords= md5($_POST['passwords']);
    $connecter=$_POST['connecter'];
    $error="";
    echo "$email $passwords";

    if(isset($connecter)){
        
        $verif=$base->prepare("SELECT * FROM administrateurs WHERE email=? and passwords=?");
        $verif->execute(array(
            $email,
            $passwords));
        $utilisateur=$verif->fetchAll();
        if(!$utilisateur){
            echo'<div class="alert alert-danger" style="font-weight:bold">!ERROR</div>';
             header("location: ./user.php?erreur=1");
        }
            else 
            {

            $_SESSION['nom']=$utilisateur['nom'];
            $_SESSION['connecter']=1;
            //echo'<div class="alert alert-danger" style="font-weight:bold">enregister avec succes</div>';
        
            header('location:../abonnes_php/enregistrement.php');
        }
    

        
        }


    




    ?>