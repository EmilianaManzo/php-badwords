Title: PHP Badwords
===
## Consegna:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

### Descrizione:
- creo due fogli uno .html e uno . php
- nel primo foglio creo un form dove l'utente inserirà i dati, collego il form al secondo foglio
- nel secondo foglio dichiaro le variabili e stampo in pagina il paragrafo e la lunghezza, sostituisco una delle parole con gli asterischi con il metodo str_replace