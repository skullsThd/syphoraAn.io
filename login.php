<?php
// Verifica se sono stati inviati i dati di login
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['Nome Utente'];
  $password = $_POST['Parola Ordine];

  // Esegui qui il codice per il controllo delle credenziali
  // Ad esempio, puoi confrontare i valori con un database di utenti

  // Esempio di controllo delle credenziali hardcoded per "admin" e "password"
  if ($username === 'admin' && $password === 'password') {
    // Login riuscito, reindirizza a una pagina successiva
    header('Location: dashboard.php');
    exit();
  } else {
    // Login fallito, reindirizza alla pagina di login con un messaggio di errore
    header('Location: login.php?error=1');
    exit();
  }
}
?>
