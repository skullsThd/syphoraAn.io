// Data di fine lavori (formato: mese/giorno/anno)
var endDate = new Date("07/06/2023");

// Aggiorna il countdown ogni secondo
var x = setInterval(function() {
  // Calcola la differenza di tempo tra la data attuale e quella di fine lavori
  var now = new Date().getTime();
  var timeLeft = endDate - now;
  
  // Calcola i giorni, le ore, i minuti e i secondi rimanenti
  var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
  
  // Visualizza il countdown
  document.getElementById("countdown").innerHTML = "Il sito sarà di nuovo disponibile in " + days + " giorni, " + hours + " ore, " + minutes + " minuti e " + seconds + " secondi.";
  
  // Se il countdown è terminato, visualizza il messaggio "Sito disponibile"
  if (timeLeft < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Sito disponibile!";
  }
}, 1000);
