<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)

$query = "SELECT producto.codigo AS codigo_producto, " .
            "producto.nombre AS nombre_producto, " .
            "producto.precio, producto.codigo_fabricante, " .
			"fabricante.nombre AS nombre_fabricante, " .
			"producto.imagen " .
            "FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo";
$result = mysqli_query($mysqli, $query); 


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>proyecto IAW</title>


    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
    <strong class="navbar-brand d-flex align-items-center">Tienda</strong> 
      <a href="login.php" class="navbar-brand d-flex align-items-center">
        <strong>LOGIN</strong>
      </a>
    
    </div>
  </div>
</header>

<main role="main">


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <!-- inicio de la tarjeta -->

	<?php
	while($row = mysqli_fetch_array($result)) {

  ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo $row['imagen'];?>">
            <div class="card-body">
              <p class="card-text"> <?php echo utf8_encode($row['nombre_producto'])?></p>
              <p class="card-text"><?php echo $row['precio']." € "?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="view_producto.php?codigo_producto=<?php echo $row['codigo_producto']; ?>" class="btn btn-sm btn-outline-secondary">Ver</a>
                </div>
                <small class="text-muted">fabricante</small>
                </div>
                </div>
                </div>
                </div>
                
  <?php 
  }
  mysqli_close($mysqli);
	

	?>

      <!-- fin de la tarjeta -->
  

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
