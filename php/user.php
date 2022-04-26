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
			<div class="col-md-6 col-xs-12 texte">
				<h1>Gestion des abonnés</h1>
			</div>
		</div>
		<div class="container bon">
			<div class="row jour">
				<div class="col-md-6  ">
					<form action="enregistrer.php" method="post">
						<label>Nom d'utilisateur:</label> <input type="text" name="username" id=""><br><br>

						<label>Mot de passe: </label> <input type="password" name="text" id="motdepasse"><br /><br>

						<input type="checkbox" onclick="Afficher()" id="aff"> Afficher le mot de passe<br><br>


					</form>
					<div class="ferm">
						<button class="btn1"><a href="./enregistrement.php">connexion</a></button>
						<button class="bago "><a href="../index.html">Fermer</a></button>
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
			function Afficher() {
				var input = document.getElementById("motdepasse");
				if (input.type == "password") {
					input.type = "text";
				} else {
					input.type = "password";
				}
			}
		</script>
		<!-- Code injected by live-server -->
		<script type="text/javascript">
			// <![CDATA[  <-- For SVG support
			if ('WebSocket' in window) {
				(function() {
					function refreshCSS() {
						var sheets = [].slice.call(document.getElementsByTagName("link"));
						var head = document.getElementsByTagName("head")[0];
						for (var i = 0; i < sheets.length; ++i) {
							var elem = sheets[i];
							var parent = elem.parentElement || head;
							parent.removeChild(elem);
							var rel = elem.rel;
							if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
								var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
								elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
							}
							parent.appendChild(elem);
						}
					}
					var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
					var address = protocol + window.location.host + window.location.pathname + '/ws';
					var socket = new WebSocket(address);
					socket.onmessage = function(msg) {
						if (msg.data == 'reload') window.location.reload();
						else if (msg.data == 'refreshcss') refreshCSS();
					};
					if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
						console.log('Live reload enabled.');
						sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
					}
				})();
			} else {
				console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
			}
			// ]]>
		</script>
</body>

</html>