// Importa l'icona di verifica da FontAwesome
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faCheckCircle } from '@fortawesome/free-solid-svg-icons';

// Aggiungi l'icona di verifica alla libreria
library.add(faCheckCircle);

// Abilita il rendering delle icone
dom.watch();
