<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Izmeni termin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Administracija termina za gadjanje u streljani - strana azuriranja" />
    <meta name="keywords" content="streljana, termin, gadjanje, azuriranje" />
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

              <h1 class="naslov text-center"> Izmeni cenu termina </h1>
              
              <form method="POST" action="update.php">

                <label for="id"></label>
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_GET['id']; ?>">

                <label for="cena">Osnovna cena</label>
                <input type="number" class="form-control" value="<?php echo $_GET['cena']; ?>" name="cena" id="cena">

                <label for="dugme"></label>
                <input type="submit" class="form-control btn-primary" name="izmeni" id="dugme" value="Izmeni">

              </form>

            </div>
          </div>

        </div>
      </div>
    </div>

  </body>

</html>