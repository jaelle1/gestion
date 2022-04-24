<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Username</title>
</head>
<body>
<div class="container">
<div class=" row tete">

        <div class=" col-md-10 logo1">
           <img src="../image/logo_auf_2020_.jpg" alt="">
       </div>
<div class="col-md-6 col-xs-12 texte">
    <h1>Gestion des abonnés</h1>
</div>
</div>
<div class="container bon">
    <div class="row jour">
      <div class="col-md-6  ">
        <form action="enregistrer.php" method="post">
    <label>Nom d'utilisateur:</label>   <input type="text" name="username" id=""><br><br>

    <label>Mot de passe: </label>     <input type="password" name="text" id="motdepasse"><br/><br>

    <input type="checkbox" onclick="Afficher()" id="aff"> Afficher le mot de passe<br><br>
    
    
    </form>
    <div class="ferm">
        <span class="btn"><a href="./enregistrer.php">connexion</a></span>
    <span class="btnn"><a href="../index.html">Fermer</a></span>
    </div>
     </div>
   </div>
</div>
<div class="container-fluid foot">
            <div class="row www ">
                <div class="col-md-1 col-xs-10">
                  <p class="pa">www.auf.org</p>
            </div>
               <div class=" col-md-8 col-xs-12">
                  <p class="pa1">copyrigth.auf.2022 Tous droits réservés</p>
            </div>
        </div>
    </div>
<script>
function Afficher()
{ 
var input = document.getElementById("motdepasse"); 
if (input.type == "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
}
} 
</script>
</body>
</html>