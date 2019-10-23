<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagen.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><em>Entre y salga despacio S.A</em></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
            
            
          </ul>
          
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
    <h1>Se ha registrado con éxito</h1>
     
 
  <a href="HacerFacturar.php"></a>
 <?php

          date_default_timezone_set('America/Argentina/Buenos_Aires');
        
          $Patente = $_GET["patente"];
          $factura = $_GET['factura'];
          $HoraEntrada = $_GET['hora'];
          $salida = $_GET['salida'];

          echo "Vehiculo: ".$Patente."<br>";
          echo "Hora de ingreso: ".date("d-m-y H:i",$HoraEntrada)."<br>";
          echo "Hora de salida: ".date("d-m-y H:i",$salida)."<br>";
          echo "Cobrar: $".$factura."<br>";
        

          ?>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>
