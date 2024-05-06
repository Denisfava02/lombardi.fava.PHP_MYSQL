Il Gruppo � composto da: LOMBARDI COSIMO - FAVA DENIS
LINK GIT REPOSITORY: https://github.com/CosimoLombo02/lombardi.fava.PHP_MYSQL
https://github.com/Denisfava02/cosimo.lombardi.fava.denis.XHTML_CSS //aggiungi il tuo link
Sulla base del primo homework sono state introdotte varie funzionalità con php e mysql,
il db è semplicemente composto da due tabelle, una per gli utenti ed una per le recensioni.
Ci sono due tipi di utenti, admin(con ruolo 1) e utenti normali(ruolo 2). Gli utenti per poter
lasciare recensioni devono registrarsi attraverso l'apposito form, dove vengono fatte alcune richieste precise, 
come quella sulla password che deve essere lunga almeno 8 caratteri, deve avere almeno un numero,almeno un carattere speciale
ed almeno un carattere maiuscolo, dopo fatto ciò possono scrivere ed inviare recensioni. Le recensioni hanno una valutazione(da 1 a 5 stelle), un
contenuto ed una data(aggiunta automaticamente dal sistema). L'admin attraverso la sua sezione dedicata puo' controllare l'andamento delle recensioni
ed anche eliminarle(anche se non è molto "fair"). Le recensioni con valutazione <= 2 non sono visibili a tutti, solo all'admin. Per poter utilizzare il db è necessario impostare nome utente e password nel file AccountSettings.php, poi è possibile far partire install.php.
I file AccountSettings.php einstall.php è incaricato dell'inizializzazione del db, mentre connection.php viene richiamato ogni qual volta si tenta di connettere
il sito al db. L'utente admin ha username: admin password: admin. 
