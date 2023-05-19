<?php
// Verifica se l'utente è autenticato, ad esempio controllando una sessione o un cookie
// Se l'utente non è autenticato, reindirizza alla pagina di login
// Includi questa verifica in ogni pagina che richiede l'autenticazione

// Esempio di verifica di autenticazione basica
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <!-- Collega il foglio di stile CSS per la formattazione della dashboard -->
  <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
  <h1>Dashboard</h1>
  <!-- Includi il contenuto della dashboard dal file index.html -->
  <?php include 'index.html'; ?>
</body>
</html>
