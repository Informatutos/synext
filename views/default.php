<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Synext-Framework</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= "/templates/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Synext-Framework</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>
  <!-- Page Content -->
    <?= $contents ?? '';?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?="/templates/jquery/jquery.slim.min.js"?>"></script>
  <script src="<?="/templates/bootstrap/js/bootstrap.bundle.min.js"?>"></script>

</body>

</html>
    