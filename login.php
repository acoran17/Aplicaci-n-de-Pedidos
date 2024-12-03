<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de login</title>
</head>
<body>

<?php
  if (isset($_GET['usuario']) && isset($_GET['password'])) {
    session_start();
    $usuario = $_SESSION['usuario'] = $;
    $clave = $_SESSION['clave'];
  }
?>

  <form action="" method="POST">
    <label for="usuario">Usuario: </label>
    <input type="text" value="<?php if(isset($usuario)) echo $usuario?>" name="usuario" id="usuario">
    <label for="clave">Usuario: </label>
    <input type="password" name="clave" id="clave">
    <input type="submit">
  </form>
</body>
</html>