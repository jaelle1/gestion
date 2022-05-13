<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/user.css">
	<title>Username</title>
</head>

<body>
	<div class="container">
		<div class=" row tete">

			<div class=" col-md-10 logo1">
				<img src="../image/logo_auf_2020_.jpg" alt="">
			</div>
			<div class="col-md-10 offset-md-2 col-xs-12 texte">
				<h1>Gestion des administrateurs</h1>
			</div>

			<?php
			if(isset($_GET["erreur"])){
				if($_GET["erreur"]==1){
					echo'<div class="alert alert-danger" style="font-weight:bold;color:red;margin: top 10px;text-align:center;margin: right 10px;">!ERROR</div>';
				}
			}
			
			
			?>
		</div>
		<div class="container bon">
			<div class="row jour">
				<div class="col-md-10   ">
					<form action="./connect_admin.php" method="post">
		                <label>E-mail: </label> <input type="text" name="email" id=""><br><br>

						<label>Mot de passe: </label> <input type="password" name="passwords" id="motdepasse"><br /><br>

						<input type="checkbox" onclick="Afficher()" id="aff"> Afficher le mot de passe<br><br>

					<div class="ferm">
						<button class="btn1" type="submit" name="connecter"> connexion</button>
						
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid foot">
			<div class="row www ">
				<div class="col-md-1 col-xs-10">
					<p class="pa">www.auf.org</p>
				</div>
				<div class=" col-md-4 offset-md-7 col-xs-12">
					<p class="pa1">copyrigth.auf.2022 Tous droits réservés</p>
				</div>
			</div>
		</div>
		<script>
			function Afficher() {
				var input = document.getElementById("motdepasse");
				if (input.type == "password") {
					input.type = "text";
				} else {
					input.type = "password";
				}
			}

		</script>
</body>

</html>