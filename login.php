<?php
// Controlla se l'utente ha effettuato l'accesso
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  // Se l'utente ha già effettuato l'accesso, reindirizzalo alla dashboard
  header("Location: dashboard.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="it-it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syphora Antivirus</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="Logo.png">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    /* Stili personalizzati */
  </style>
</head>

<body monica-locale="it" monica-version="1.6.2" monica-id="ofpnmcalabcbjgholdjcjblkibolbppb">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">Caratteristiche</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pricing">Prezzi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contattami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="build.html">Build</a>
        </li>
      </ul>
    </div>
  </nav>

  <header id="home">
    <!-- Resto del codice HTML -->
  </header>

  <section id="features">
    <!-- Resto del codice HTML -->
  </section>

  <section id="pricing">
    <!-- Resto del codice HTML -->
  </section>

  <section id="contact">
    <!-- Resto del codice HTML -->
  </section>

  <footer>
    <!-- Resto del codice HTML -->
  </footer>

  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4y4gSlBnj9D8FbS2Mhxh" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom JavaScript -->
  <script src="script.js"></script>
</body>
</html>
