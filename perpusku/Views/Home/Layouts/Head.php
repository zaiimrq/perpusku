<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Perpusku | <?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= BASEURL ?>/public/assets/css/sb-admin-2.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/assets/css/mdb.min.css" />
    <link rel="shortcut icon" href="<?= BASEURL ?>/assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
  <header>
    <?php include_once __DIR__ . "/../Components/Navbar.php"; ?>
  </header>
  <div class="toast-container position-fixed end-0" style="top: 5.5rem;" >
    <div id="AdminToast" class="toast shadow" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true" style="transform: translateX(100%);" >
        <div class="toast-header bg-warning text-white">
          <img src="<?= BASEURL ?>/assets/img/favicon.ico" class="rounded me-2" alt="...">
          <strong class="me-auto">Warning !</strong>
          <small>Just Now</small>
          <button id="ToastClose" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          You Are Admin, Create Anggota Account To Borrow The Book !
        </div>
    </div>
  </div>
