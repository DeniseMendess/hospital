<?php

$dados = $_SESSION['login_erro'] ?? [];

$dados['email'] = $dados['email'] ?? '';
$dados['email_erro'] = $dados['email_erro'] ?? '';
$dados['senha_erro'] = $dados['senha_erro'] ?? '';
$dados['login_erro'] = $dados['login_erro'] ?? '';

unset($_SESSION['login_erro']);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- --------------- favicon --------------- -->
  <link rel="shortcut icon" href="<?= URL ?>/assets/img/favicon.ico" type="image/x-icon">
  <!-- --------------- link bootstrap --------------- -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- --------------- link remix icon --------------- -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.min.css" rel="stylesheet">
  <!-- --------------- link css --------------- -->
  <link rel="stylesheet" href="<?= URL ?>/assets/css/pages/login.css">
  <title><?= APP_NAME ?></title>
</head>

<body>
  <div class="container-fluid" id="bg-login">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="col-11 col-sm-8 col-md-5 col-lg-4">
        <div class="card shadow" id="card-login">
          <div class="card-body p-lg-5">
            <div class="d-flex align-content-center justify-content-center mb-3">
              <img src="<?= URL ?>/assets/img/logo.webp" alt="Logotipo do Centro" style="height: 7.5rem;">
            </div>

            <div class="text-center mb-4">
              <h2 class="mb-3">Centro Médico Reviver</h2>
              <p class="text-muted fs-4">Acessar ao Sistema</p>
            </div>

            <form action="<?= BASE_URL ?>logar" method="post" class="mt-lg-5">
              <div class="input-group mb-4">
                <span class="input-group-text p-3">
                  <i class="ri-at-line"></i>
                </span>

                <input type="text" name="email" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['email'] ?>" placeholder="Seu email" autocomplete="on">

                <div class="invalid-feedback fs-5 mt-3">
                  <?= $dados['email_erro'] ?>
                </div>
              </div>

              <div class="input-group mb-4">
                <span class="input-group-text p-3">
                  <i class="ri-lock-line"></i>
                </span>

                <input type="password" name="senha" class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>" placeholder="Sua senha">

                <div class="invalid-feedback fs-5 mt-3">
                  <?= $dados['senha_erro'] ?>
                </div>
              </div>

              <?php if (!empty($dados['login_erro'])) { ?>
                <h3 id="loginErro" class="text-danger mb-3">
                  <?= $dados['login_erro'] ?>
                </h3>
              <?php  } ?>

              <div class="d-grid mb-4">
                <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                  Entrar
                </button>
              </div>

              <div class="text-center">
                <a href="<?= BASE_URL ?>admin/dashboard" class="link text-decoration-underline fs-6">Esqueceu a Senha?</a>

                <a href="<?= BASE_URL ?>funcionario/dashboard" class="link text-decoration-underline fs-6">Dashboard</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>