<?php
  session_start();
  if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Administrativo</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema X</a>
        <?php
          print "Olá, ".$_SESSION["nome"];
          print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>
      </div>
    </nav>
  </body>
</html>