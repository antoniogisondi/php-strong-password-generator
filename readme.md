Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1 Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2 Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS) Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS) Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

MILESTONE 1
1- Creo un file index.php che contiene il layout con Bootstrap e la logica;
2- Creo una funzione che mi genera una password casuale con:
    -2.1 creo una variabile che mi recupera il valore del campo input che servirà per la lunghezza della password;
    -2.2 creo una variabile che contiene una stringa con tutti i possibili caratteri ;
    -2.3 creo una variabile che ha come valore la funzione che mi randomizza i caratteri della variabile dei caratteri;
    -2.4 creo una variabile che ha come valore una funzione che, data una variabile con un determinato valore, e in questo caso la nostra è la variabile dei caratteri randomizzati che passandogli 2 parametri: 0 e il valore che metterò nel campo input, mi genererà una password con la lunghezza del numero messo nell'input.

MILESTONE 2
1- Ho creato un file function.php dove andrò a mettere la parte logica del programma, quindi la funzione,
2- Includo il file function.php nel file index.php in modo tale da riprendere la parte logica e far funzionare il programma;