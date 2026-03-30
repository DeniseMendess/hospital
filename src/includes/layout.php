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
  <div class="wrapper">
    <?php require_once __DIR__ . '../partials/sidebar_admin.php'; ?>

    <div class="main">
      <?php require_once __DIR__ . '../partials/navbar.php'; ?>

      <main class="content px-3 py-4">
        <?php require $view?>
      </main>
    </div>
  </div>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- apexchart -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <!-- script.js -->
  <script src="<?= URL ?>/assets/js/script.js"></script>
</body>

</html>