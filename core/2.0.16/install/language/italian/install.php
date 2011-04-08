<?php
// -------------------------------------------------------------------------------- //
// Italian translation by Marco Ragogna alias blueangel (m.ragogna@xoopsit.net)     //
// webmaster of XOOPS Official Italian Support Site (http://www.xoopsit.net)        //
// -------------------------------------------------------------------------------- //
// $Id: install.php,v 1.8 2003/10/08 10:23:22 okazu Exp $
define("_INSTALL_L0","Guida d'installazione di XOOPS 2.0.13.2");
define("_INSTALL_L70","Modifica i permessi del file mainfile.php sul server in modo da renderlo scrivibile (CHMOD 777). Ricarica questa pagina una volta modificati i permessi.");
//define("_INSTALL_L71","Clicca sul pulsante qui sotto per iniziare l'installazione.");
define("_INSTALL_L1","Apri il file mainfile.php con un editor di testo qualsiasi e cerca il seguente codice alla linea 31:");
define("_INSTALL_L2","Adesso, modifica questa linea come segue:");
define("_INSTALL_L3","Poi alla linea 35 modifica <b>%s</b> in <b>%s</b>");
define("_INSTALL_L4","OK, ho impostato i seguenti parametri, lasciami provare ancora!");
define("_INSTALL_L5","ATTENZIONE!");
define("_INSTALL_L6","C'è un incongruenza tra il parametro XOOPS_ROOT_PATH alla linea 31 del file mainfile.php e il percorso che è stato trovato.");
define("_INSTALL_L7","Le tue impostazioni: ");
define("_INSTALL_L8","Abbiamo scoperto: ");
define("_INSTALL_L9","(Su piattaforme Microsoft, potresti ricevere questo messaggio anche quando le impostazioni sono corrette. In questo caso, premi il pulsante che segue, per continuare l'installazione).");
define("_INSTALL_L10","Se ti sembra tutto corretto premi il pulsante qui sotto per continuare.");
define("_INSTALL_L11","Il percorso della cartella di base, sul tuo server: ");
define("_INSTALL_L12","L'indirizzo della tua cartella di XOOPS: ");
define("_INSTALL_L13","Se tutte le impostazioni ti sembrano corrette, premi il pulsante 'Invia' per continuare.<br />(Questo non creerà ancore le tabelle)");
define("_INSTALL_L14","Avanti");
define("_INSTALL_L15","Apri il file mainfile.php e inserisci le necessarie impostazioni per il database");
define("_INSTALL_L16","<b>%s</b> è il nome del tuo server di database.");
define("_INSTALL_L17","<b>%s</b> è il nome utente che usi per accedere al database.");
define("_INSTALL_L18","<b>%s</b> è la password di accesso al database.");
define("_INSTALL_L19","<b>%s</b> è il nome del database nel quale verranno create le tabelle di XOOPS.");
define("_INSTALL_L20","<b>%s</b> è il prefisso per le tabelle che verrano create durante la procedura di installazione.");
define("_INSTALL_L21","Il seguente database non è stato trovato sul server: ");
define("_INSTALL_L22","Vuoi provare a crearlo?");
define("_INSTALL_L23","Sì");
define("_INSTALL_L24","No");
define("_INSTALL_L25","Abbiamo ricavato le seguenti informazioni sul database dal file mainfile.php. Prego modificale se non sono corrette.");
define("_INSTALL_L26","Configurazione Database");
define("_INSTALL_L51","<b>Database</b>");
define("_INSTALL_L66","Scegli il tipo di database da utilizzare");
define("_INSTALL_L27","<b>Nome del server di database</b>");
define("_INSTALL_L67","E' il nome del server di database. Se non ne sei certo, 'localhost' funziona nella maggior parte dei casi.");
define("_INSTALL_L28","<b>Nome dell'utente del database</b>");
define("_INSTALL_L65","E' il nome utente per accedere al database sul server.");
define("_INSTALL_L29","<b>Nome del database</b>");
define("_INSTALL_L64","E' il nome del database sul server. La procedura di installazione tenterà di creare il database se questi non esiste già.");
define("_INSTALL_L52","<b>Password del database</b>");
define("_INSTALL_L68","E' la password per accedere al tuo database.");
define("_INSTALL_L30","<b>Prefisso delle tabelle</b>");
define("_INSTALL_L63","Questo prefisso verrà aggiunto a tutte le nuove tabelle create per evitare conflitti di nome nel database. Se non hai esigenze particolari, utilizza 'xoops' di default.");
define("_INSTALL_L54","<b>Usa connessioni persistenti?</b>");
define("_INSTALL_L69","'No' di default. Scegli 'No' se non hai esigenze particolari.");
define("_INSTALL_L55","<b>Percorso fisico di XOOPS</b>");
define("_INSTALL_L59","E' il percorso fisico della cartella principale di XOOPS.");
define("_INSTALL_L56","<b>Percorso virtuale di XOOPS (URL)</b>");
define("_INSTALL_L58","E' il percorso virtuale della cartella principale XOOPS.");

define("_INSTALL_L31","Impossibile creare il database. Contatta l'amminstratore del server per ulteriori dettagli.");
define("_INSTALL_L32","Installazione completata!");
define("_INSTALL_L33","Clicca <a href='../index.php'>qui</a> per vedere l'home page del tuo sito.");
define("_INSTALL_L35","Se hai incontrato qualche errore, prego contatta il team di sviluppo su <a href='http://www.xoops.org/'>XOOPS.org</a>");
define("_INSTALL_L36","Scegli il nome e la password di amministratore e clicca il pulsante 'Invia' per iniziare la creazione delle tabelle del database.");
define("_INSTALL_L37","Nome dell'amministratore");
define("_INSTALL_L38","Email dell'amministratore");
define("_INSTALL_L39","Password dell'amministratore");
define("_INSTALL_L74","Password di conferma");
define("_INSTALL_L40","Crea le tabelle");
define("_INSTALL_L41","Prego torna indietro e inserisci tutte le informazioni necessarie.");
define("_INSTALL_L42","Indietro");
define("_INSTALL_L57","Inserisci <b>%s</b>");

// <b>%s</b> is database name
define("_INSTALL_L43","Il database <b>%s</b> è stato creato con successo!");

// <b>%s</b> is table name
define("_INSTALL_L44","Impossibile creare <b>%s</b>");
define("_INSTALL_L45","La tabella <b>%s</b> è stata creata");

define("_INSTALL_L46","Affinchè i moduli inclusi nel pacchetto funzionino correttamente, i seguenti file devono essere impostati in scrittura. Cambia i permessi di questi file: ");
define("_INSTALL_L47","Invia");

define("_INSTALL_L53","Conferma i seguenti dati: ");

define("_INSTALL_L60","Impossibile aprire il file mainfile.php. Prego controlla i permessi e prova ancora.");
define("_INSTALL_L61","Impossibile scrivere sul file mainfile.php. Contatta l'amministratore del server per ulteriori dettagli.");
define("_INSTALL_L62","I dati di configurazione sono stati salvati con successo. Clicca il pulsante 'Invia' per continuare.");
define("_INSTALL_L72","Alle seguenti cartelle devono essere attribuiti permessi di scrittura sul server (chmod 777)");
define("_INSTALL_L73","Indirizzo email non valido");

// add by haruki
define("_INSTALL_L80","introduzione");
define("_INSTALL_L81","controllo permessi dei file");
define("_INSTALL_L82","Controllo dei permessi di file e cartelle in corso..");
define("_INSTALL_L82a","<br>
<b>Installazione Locale</b><br />
Sotto Win, non ci dovrebbero essere problemi per i permessi sui file, se si è amministratore del PC. In caso contrario chiedere all'amministratore di impostarvi
in lettura/scrittura i file elencati qui sotto. 
<br /><br /><b>Installazione Remota</b>
<br >Su un <i>server remoto linux</i>, via FTP, dovete impostare i permessi ai file. Solitamente basta cliccare sulla cartella->tasto destro->CHMOD o permessi...e impostare
 files e cartelle a 777.
<br />Su un <i>server remoto windows</i>, se non si ha la possibilità di cambiare i permessi (usando la stessa tecnica  di prima) con un tool FTP, chiedere al provider</lI>
 ");
define("_INSTALL_L83","Il file <b><b>%s</b></b> non è scrivibile.");
define("_INSTALL_L84","Il file <b><b>%s</b></b> è scrivibile.");
define("_INSTALL_L85","La cartella <b><b>%s</b></b> non è scrivibile.");
define("_INSTALL_L86","La cartella <b><b>%s</b></b> è scrivibile.");
define("_INSTALL_L87","Nessun errore riscontrato. Clicca 'Invia' per continuare.");
define("_INSTALL_L89","Impostazioni generali");
define("_INSTALL_L90","Impostazioni generali");
define("_INSTALL_L90a","<br />
<b>Installazione Locale</b><br />
Il procedimento è semplificato. Infatti non bisogna chiedere permessi a nessuno, ma, se avete installato un
application server apache/MySQL/php, la compilazione di questi dati è molto semplice.<br>
<ul>
<li><b>Nome del server di database:</b> lasciate localhost</li>
<li><b>Nome dell'utente del database:</b> inserite root, che è l'utente principale di mysql</li>
<li><b>Password del database:</b> non inserite password, lasciate vuoto</li>
<li><b>Nome del database:</b> scegliete il nome che volete</li>
<li><b>Prefisso delle tabelle:</b> scegliete un prefisso breve ma diverso da <b>xoops</b></li>
<li><b>Usa connessioni persistenti? </b>Inserite SI</li>
<li><b>Percorso fisico di XOOPS:</b> lo inserisce automaticamente</li>
<li><b>Percorso virtuale di XOOPS (URL):</b> dovrebbe avere inserito http://localhost/nomecartellaxoops. Se inserite il portale in una intranet e volete che altri
PC raggiungano il portale, sostituite http://localhost/nomecartellaxoops con http://nomecomputer/nomecartellaxoops. Se non conoscete il nome del vostro PC fate
quanto segue: desktop, tasto destro sull'icona <i>\"Risorse computer\"->\"Proprietà\"->\"Nome computer\".</i></li>
</ul>
<b>Installazione Remoto</b><br />
Il procedimento è più impegnativo. Infatti è probabile che bisogna chiedere permessi al provider, a seconda che il server web
è un linux p un windows. In linea di massima, non dovrebbero nascere problemi, ma questo dipende dalle politiche dei permessi adottate dal provider stesso.<br>
<ul>
<li><b>Nome del server di database:</b> lasciate localhost</li>
<li><b>Nome dell'utente del database:</b> inserite il nome utente del database mysql usato</li>
<li><b>Password del database:</b>Inserite password del database mysql usato</li>
<li><b>Nome del database:</b> scegliete il nome che volete</li>
<li><b>Prefisso delle tabelle:</b> scegliete un prefisso breve ma diverso da <b>xoops</b></li>
<li><b>Usa connessioni persistenti? </b>Inserite SI</li>
<li><b>Percorso fisico di XOOPS:</b> lo inserisce automaticamente</li>
<li><b>Percorso virtuale di XOOPS (URL):</b> lo inserisce automaticamente</li>
</ul>");
define("_INSTALL_L91","conferma");
define("_INSTALL_L92","salva impostazioni");
define("_INSTALL_L93","modifica impostazioni");
define("_INSTALL_L88","Salvataggio dei dati in corso..");
define("_INSTALL_L94","Controllo percorso e URL");
define("_INSTALL_L94a","<br>
");
define("_INSTALL_L127","Controllo delle impostazioni del percorso e dell'URL in corso..");
define("_INSTALL_L95","Non è stato possibile rilevare il percorso fisico della tua directory di XOOPS");
define("_INSTALL_L96","E' stato riconosciuto un conflitto tra il percorso fisico da te inserito e quello rilevato.");
define("_INSTALL_L97","Il <b>percorso fisico</b> è corretto.");

define("_INSTALL_L99","Il <b>percorso fisico</b> deve essere una cartella.");
define("_INSTALL_L100","Il <b>percorso virtuale</b> è un indirizzo valido.");
define("_INSTALL_L101","Il <b>percorso virtuale</b> non è un indirizzo valido.");
define("_INSTALL_L102","Conferma impostazioni database");
define("_INSTALL_L103","Torna all'inizio");
define("_INSTALL_L104","Controllo database");
define("_INSTALL_L104b","<br />
<b>Installazione Locale</b><br />
Se ricevete una segnalazione di errore nella connessione al server di database, tornate indietro e controllate di avere inserito nome utente di database e password corretta 
(cioè avete lasciato il campo vuoto per la password)<br><br>
<b>Installazione Remota</b><br />
<b>E' necessario</b> avere già creato il database e impostato un utente e password per lo stesso. Se, nonostante tutto, ricevete una segnalazione di errore nella connessione al server di database, tornate indietro e controllate di avere inserito nome utente di database e password corretta.");
define("_INSTALL_L105","Tentativo di creare un database");
define("_INSTALL_L106","Non è stato possibile connettersi al server di database.");
define("_INSTALL_L107","Si prega di verificare la configurazione del server di database.");
define("_INSTALL_L108","Connessione al server di database OK.");
define("_INSTALL_L109","Il database <b>%s</b> non esiste.");
define("_INSTALL_L110","Il database <b>%s</b> esiste e vi si può connettere.");
define("_INSTALL_L111","La connessione al database è OK.<br />Premi il pulsante 'Invia' per creare le tabelle del database.");
define("_INSTALL_L112","impostazioni amministratore");
define("_INSTALL_L113","La tabella <b>%s</b> è stata cancellata.");
define("_INSTALL_L114","Tentativo di creazione delle tabelle fallito.");
define("_INSTALL_L115","Tabelle del database create con successo!");
define("_INSTALL_L116","inserimento dati");
define("_INSTALL_L117","finito");

define("_INSTALL_L118","Tentativo di creazione della tabella <b>%s</b> fallito.");
define("_INSTALL_L119","%d elementi inseriti nella tabella <b>%s</b>.");
define("_INSTALL_L120","Tentativo di inserire %d elementi nella tabella <b>%s</b> fallito.");

define("_INSTALL_L121","La costante <b>%s</b> è stata impostata a <b>%s</b>.");
define("_INSTALL_L122","Tentativo di impostare la costante <b>%s</b> fallito.");

define("_INSTALL_L123","Il file <b>%s</b> è stato salvato nella cartella cache/.");
define("_INSTALL_L124","Tentativo di salvare il file <b>%s</b> nella cartella cache/ fallito.");

define("_INSTALL_L125","Il file <b>%s</b> è stato sovrascritto da <b>%s</b>.");
define("_INSTALL_L126","Non è stato possibile scrivere sul file <b>%s</b>.");

define("_INSTALL_L130","La procedura di installazione ha riconosciuto delle tabelle di XOOPS 1.3.x nel tuo database.<br />Il programma tenterà ora di aggiornare il database a XOOPS 2.");
define("_INSTALL_L131","Le tabelle di XOOPS 2 esistono già nel tuo database.");
define("_INSTALL_L132","aggiornamento tabelle");
define("_INSTALL_L133","La tabella <b>%s</b> è stata aggiornata.");
define("_INSTALL_L134","Tentativo di aggiornare la tabella <b>%s</b> fallito.");
define("_INSTALL_L135","Tentativo di aggiornare le tabelle del database fallito.");
define("_INSTALL_L136","Tabelle del database aggiornate.");
define("_INSTALL_L137","aggiornamento moduli");
define("_INSTALL_L138","aggiornamento commenti");
define("_INSTALL_L139","aggiornamento avatars");
define("_INSTALL_L140","aggiornamento faccine");
define("_INSTALL_L141","La procedura d'installazione aggiornerà ora ogni modulo per lavorare con XOOPS 2.<br />Assicurati di aver caricato tutti i file del pacchetto di XOOPS2 sul tuo server.<br />L'operazione richiederà qualche secondo.");
define("_INSTALL_L142","Aggiornamento moduli in corso..");
define("_INSTALL_L143","La procedura d'installazione aggiornerà ora i dati delle impostazioni di XOOPS 1.3.x per essere utilizzati con XOOPS2.");
define("_INSTALL_L144","aggiornamento impostazioni");
define("_INSTALL_L145","Commento (ID: <b>%s</b>) inserito nel database.");
define("_INSTALL_L146","Non è stato possibile inserire il commento (ID: <b>%s</b>) nel database.");
define("_INSTALL_L147","Aggiornamento commenti in corso..");
define("_INSTALL_L148","Aggiornamento completato.");
define("_INSTALL_L149","La procedura d'installazione aggiornerà ora i commenti in XOOPS 1.3.x per essere utilizzati con XOOPS2.<br />L'operazione richiederà qualche secondo.");
define("_INSTALL_L150","La procedura d'installazione aggiornerà ora le faccine e i livelli degli utenti per essere utilizzati con XOOPS2.<br />L'operazione richiederà qualche secondo.");
define("_INSTALL_L151","La procedura d'installazione aggiornerà ora gli avatar degli utenti per essere utilizzati con XOOPS2.<br />L'operazione richiederà qualche secondo.");
define("_INSTALL_L155","Aggiornamento faccine/livelli in corso..");
define("_INSTALL_L156","Aggiornamento avatar in corso..");
define("_INSTALL_L157","Scegli il gruppo di default per ogni tipo di gruppo.");
define("_INSTALL_L158","Gruppi in 1.3.x");
define("_INSTALL_L159","Webmaster");
define("_INSTALL_L160","Utenti registrati");
define("_INSTALL_L161","Utenti anonimi");
define("_INSTALL_L162","Devi scegliere un gruppo di default per ogni tipo di gruppo.");
define("_INSTALL_L163","Tabella <b>%s</b> cancellata.");
define("_INSTALL_L164","Tentativo di eliminazione della tabella <b>%s</b> fallito.");
define("_INSTALL_L165","Il sito è momentaneamente chiuso per manutenzione. Si prega di passare più tardi.");

// <b>%s</b> is filename
define("_INSTALL_L152","Non è stato possibile aprire <b>%s</b>.");
define("_INSTALL_L153","Non è stato possibile aggiornare <b>%s</b>.");
define("_INSTALL_L154","<b>%s</b> aggiornato.");

define('_INSTALL_L128', 'Scegli la lingua che vuoi utilizzare durante il processo di installazione.');
define('_INSTALL_L200', 'Ricarica');

define('_INSTALL_CHARSET','ISO-8859-1');
?>