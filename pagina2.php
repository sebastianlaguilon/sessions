<?php
session_start();

if($_SESSION){
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, .$nombre </h1>";

}else{
    echo "No has iniciado session";

}

echo '<br/>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
     <?php if($_SESSION): ?>
        <a href="cerrar.php">Cerrar Sesion</a>

    <?php else : ?>    
      <a href="index.php">Iniciar Sesion</a>
     <?php endif  ?>  
  
</body>
</html>