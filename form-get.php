<?php

$censored = $_GET['censored'];
$description = $_GET['description'];

$lunghezza_description = strlen($description);

$censored_description = str_replace($censored , '***' , $description );

$lunghezza_censored_description = strlen($censored_description);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container p-5">
    <div class="row">
      <div class="col">

      <h1>Ciao </h1>

      <h5>Paragrafo originale</h5>
      <p> <?php echo $description ?></p>
      <p>Il paragrafo è lungo <?php echo $lunghezza_description ?> caratteri </p>


      <h5>Paragrafo censurato con lunghezza </h5>
      <p><?php echo $censored_description ?> </p>
      <p>Il paragrafo censurato è lungo <?php echo $lunghezza_censored_description ?> caratteri </p>
      
      </div>
    </div>
  </div>
</body>
</html>