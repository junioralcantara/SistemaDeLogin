<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Sistema de Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="card login">
            <div class="card-header">
              <h2>ACESSO RESTRITO</h2>
            </div>
            <div class="card-body">
              <form action="login.php" method="POST">
                <div class="mb-4">
                  <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                </div>
                <div class="mb-4">
                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div> 
                <div class="mb-4">
                  <p><a href="#">Esqueci minha senha</a></p>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>          
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
