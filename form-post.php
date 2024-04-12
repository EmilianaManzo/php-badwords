<?php 
$censored = $_POST["censored"];
$description =$_POST["description"];

$lunghezza_description = strlen($description);

$censored_description = str_replace($censored , "***", $description);

$lunghezza_censored_description = strlen($censored_description);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">

        <h1>Ciao</h1>

        <h5>Paragrafo originale</h5>
        <p><?php echo $description ?> </p>
        <p>Il paragrafo è lungo caratteri <?php echo $lunghezza_description?></p>

        <h5>Paragrafo censurato con lunghezza</h5>
        <p><?php echo $censored_description ?></p>
        <p>Il paragrafo censurato è lungo <?php echo $lunghezza_censored_description ?>  caratteri</p>

      </div>
    </div>
  </div>
</body>
</html>
