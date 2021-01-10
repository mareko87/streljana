<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Streljana Metak</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Administracija termina za gadjanje u streljani - pocetna strana" />
		<meta name="keywords" content="streljana, termin, gadjanje, pocetna" />
		<meta name="author" content="Marko Milosevic" />


		<link rel="shortcut icon" href="images/favicon.ico">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/superfish.css">
		<link rel="stylesheet" href="css/style1.css">

		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>

	<body>

		<div id="glavni-wrapper">
			<div id="glavni-page">
				<div id="glavni-header">

					<?php include 'header.php'; ?>

					<div id="glavni-work-section">
						<div class="container">

							<h1 class="naslov text-center"> Ponuda </h1>

							<div id="ponuda">
								<!--ponudjeni tipovi-->
							</div>

						</div>

					</div>

				</div>
			</div>

			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.js"></script>
			<script src="js/main.js"></script>

			<script>

				function vratiPodatke() {

					var zahtev = $.ajax({
						url: "kontroler.php",
						method: "GET",
						data: {
							opcija: 'termin'
						}
					});

					zahtev.done(function(json) {
						
						var nalepi = '<table class="table table-hover">';
						nalepi += '<thead>';
						nalepi += '<tr>';
						nalepi += '<th>Naziv tipa</th>';
						nalepi += '<th>Opis tipa</th>';
						nalepi += '</tr>';
						nalepi += '</thead>';
						nalepi += '<tbody>';

						$.each($.parseJSON(json), function(idx, obj) {

							nalepi += '<tr>';
							nalepi += '<td>' + obj.nazivTipa + '</td>';
							nalepi += '<td>' + obj.opisTipa + '</td>';
							nalepi += '</tr>';

						});

						nalepi += '</tbody>';
						nalepi += '</table>';

						$("#ponuda").html(nalepi);

					});

				}

			</script>
			
			<script>

				vratiPodatke();
				
			</script>

		</div>		

	</body>

</html>