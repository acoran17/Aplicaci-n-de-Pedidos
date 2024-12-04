<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de login</title>
</head>
<body>

<?php
	require_once 'bd.php';


  if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if($usu=== false) {
      $err = TRUE;
      $usuario = $_POST['usuario'];
    }else{
      session_start();
      $_SESSION['usuario'] = $usu;
      $_SESSION['correo'] = [];
      header("Location: categorias.php");
      return;
    }
  }else{
    echo "Escribe bien la contraseña";
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