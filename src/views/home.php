
<?php
use Esteban\Listadodeprofes\models\Profesores;
    $profes = Profesores::getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/views/resources/styles.css">
    <title>Document</title>
</head>
<body>
   
   <?php require_once 'resources/navbar.php' ?>

    <h1>HOME</h1>
</body>
</html>