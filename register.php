<?php 
  include('path.php');
  require(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/LoginRegister.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div id="main-container">
        <h1>Cadastre-se para acessar o sistema</h1>
        <form id="register-form" action="register.php" method="post">

          <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
          <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?= $email ?>" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate autocomplete="off">
          </div>
          <div class="full-box">
              <label for="name">Nome</label>
              <input type="text" name="name" id="name" value="<?= $name ?>" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
          </div>
          <div class="half-box spacing">
            <label for="lastname">Senha</label>
            <input type="password" name="password" id="password" value="<?= $password ?>" placeholder="Digite sua senha" data-password-validate data-required>
          </div>
          <div class="half-box">
            <label for="passconfirmation">Confirmação de senha</label>
            <input type="password" name="passconfirmation" id="passwordconfirmation" value="<?= $passconfirmation ?>" placeholder="Digite novamente sua senha" data-equal="password">
          </div>
          <div>
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
          </div>
          <div class="full-box">
            <input id="btn-submit" type="submit" name="register-btn" value="Registrar">
          </div>
        </form>
        <div id="register-container" style="text-align: center;">
            <p>Já possui uma conta?</p>
            <a href="login.html">Entrar</a>
        </div>
    </div>
</body>
</html>
