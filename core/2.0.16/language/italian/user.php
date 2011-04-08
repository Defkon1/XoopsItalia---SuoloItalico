<?php
// -------------------------------------------------------------------------------- //
// Italian translation by Marco Ragogna alias blueangel (m.ragogna@xoopsit.net)     //
// webmaster of XOOPS Official Italian Support Site (http://www.xoopsit.net)        //
// -------------------------------------------------------------------------------- //
// $Id: user.php,v 1.10 2004/02/06 19:27:06 onokazu Exp $
//%%%%%%		File Name user.php 		%%%%%
define("_US_NOTREGISTERED","Non sei registrato? Clicca <a href=register.php>qui</a> per registrarti.");
define("_US_LOSTPASSWORD","Hai dimenticato la password?");
define("_US_NOPROBLEM","Non ti preoccupare, inserisci l'indirizzo email che hai utilizzato durante la registrazione e riceverai al più presto una nuova password.");
define("_US_YOUREMAIL","Il tuo indirizzo email: ");
define("_US_SENDPASSWORD","Invia password");
define("_US_LOGGEDOUT","Ti sei disconnesso");
define("_US_THANKYOUFORVISIT","Grazie della visita, torna presto a trovarci!");
define("_US_INCORRECTLOGIN","Login fallito");
define("_US_LOGGINGU","Grazie di esserti connesso, %s.");
define('_US_GROUPS', 'Gruppi Utenti');

// 2001-11-17 ADD
define("_US_NOACTTPADM","L'utente è stato disattivato.<br> Per maggiori informazioni contatta il webmaster di questo sito.");
define("_US_ACTKEYNOT","Chiave di attivazione errata!");
define("_US_ACONTACT","Il nome scelto esiste già!");
define("_US_ACTLOGIN","Il tuo account è stato attivato. Eseguendo il login potrai usufruire di tutti i servizi offerti dal sito.");
define("_US_NOPERMISS","Spiacenti, non hai il permesso di eseguire questa operazione!");
define("_US_SURETODEL","Sei sicuro di voler cancellare il tuo account?");
define("_US_REMOVEINFO","Tutte i tuoi dati verrano cancellati.");
define("_US_BEENDELED","Il tuo account è stato cancellato.");
//

//%%%%%%		File Name register.php 		%%%%%
define("_US_USERREG","Registrazione utente");
define("_US_NICKNAME","Nick");
define("_US_EMAIL","Email");
define("_US_ALLOWVIEWEMAIL","Permetti agli altri utenti di vedere il mio indirizzo email");
define("_US_WEBSITE","Sito Web");
define("_US_TIMEZONE","Fuso Orario");
define("_US_AVATAR","Avatar");
define("_US_VERIFYPASS","Controllo Password");
define("_US_SUBMIT","Invia");
define('_US_USERNAME','Nome utente');
define('_US_FINISH','Termina la registrazione');
define('_US_REGISTERNG','Non puoi registrare un altro utente.');
define('_US_MAILOK','Consenti agli amministratori del sito e<br /> ai moderatori di inviarti email di notifica?');
define('_US_DISCLAIMER','Condizioni di utilizzo del servizio');
define('_US_IAGREE','Accetto tutte le condizioni sopra riportate');
define('_US_UNEEDAGREE', 'Spiacenti, devi accettare le condizioni di utilizzo del servizio, per completare la registrazione.');
define('_US_NOREGISTER','Spiacenti, siamo al momento impossibilitati a consentire ulteriori registrazioni.');


// %s is username. This is a subject for email
define("_US_USERKEYFOR","Chiave di attivazione per l'utente %s");

define("_US_YOURREGISTERED","Ora sei un utente registrato. Presto riceverai un email con i dati che hai inserito durante la registrazione; segui le istruzioni che riceverai per accedere al sito.");
define("_US_YOURREGMAILNG","Adesso sei un utente registrato. Ciò nonostante, non siamo in grado di inviarti l'email di attivazione per il tuo account, a causa di un errore verificatosi sul nostro server. Siamo spiacenti, ti preghiamo di contattare il webmaster via email e segnalare il problema.");
define('_US_YOURREGISTERED2','Adesso sei un utente registrato. Ti preghiamo di attendere l\'attivazione dell\'account da parte di un amministratore. Riceverai un email di notifica una volta che il tuo account sarà stato attivato. Questa operazione potrebbe richiedere un certo tempo, cerca di essere paziente.');

// %s is your site name
define("_US_NEWUSERREGAT","Nuovo utente %s");
// %s is a username
define("_US_HASJUSTREG","%s si è appena registrato!");

define("_US_INVALIDMAIL","ERRORE: L'indirizzo email non è valido");
define("_US_EMAILNOSPACES","ERRORE: L'indirizzo email non deve contenere spazi.");
define("_US_INVALIDNICKNAME","ERRORE: Nick errato");
define('_US_NICKNAMETOOLONG','Nick troppo lungo. Il nick non deve superare i %s caratteri.');
define('_US_NICKNAMETOOSHORT','Nick troppo corto. Il nick deve contenere almeno %s caratteri.');
define('_US_NAMERESERVED','ERRORE: Questo è un nick riservato.');
define('_US_NICKNAMENOSPACES','Non possono esserci spazi nel nick.');
define('_US_NICKNAMETAKEN','ERROR: Nick già registrato.');
define('_US_EMAILTAKEN','ERROR: Indirizzo email già registrato.');
define('_US_ENTERPWD','ERROR: Devi scrivere una password.');
define('_US_SORRYNOTFOUND','Spiacenti, ma non è stata trovata alcune informazione sull\'utente.');




// %s is your site name
define("_US_NEWPWDREQ","Nuova password richiesta su %s");
define('_US_YOURACCOUNT', 'Il tuo account su %s');

define("_US_MAILPWDNG","mail_password: aggiornamento non riuscito. Contatta l'amministratore.");

// %s is a username
define("_US_PWDMAILED","Password per %s inviata.");
define("_US_CONFMAIL","Email di conferma per %s inviata.");
define('_US_ACTVMAILNG', 'L\'invio dell\'email di notifica a %s è fallito!');
define('_US_ACTVMAILOK', 'Email di notifica a %s inviata con successo!');

//%%%%%%		File Name userinfo.php 		%%%%%
define("_US_SELECTNG","Nessun utente selezionato! Prego, torna indietro e riprova.");
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define("_US_LOCATION","Località");
define("_US_OCCUPATION","Occupazione");
define("_US_INTEREST","Interessi");
define("_US_SIGNATURE","Firma");
define("_US_EXTRAINFO","Ulteriori informazioni");
define('_US_EDITPROFILE','Modifica profilo');
define('_US_LOGOUT','Logout');
define("_US_INBOX","In arrivo");
define("_US_MEMBERSINCE","Registrato il");
define("_US_RANK","Livello");
define("_US_POSTS","Messaggi");
define("_US_LASTLOGIN","Ultimo login");
define("_US_ALLABOUT","Tutto su %s");
define("_US_STATISTICS","Statistiche");
define('_US_MYINFO','I miei dati');
define('_US_BASICINFO','Dati di base');
define('_US_MOREABOUT','Altro su di me');
define('_US_SHOWALL','Mostra tutto');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profilo');
define('_US_REALNAME','Nome');
define('_US_SHOWSIG','Aggiungi sempre la mia firma');
define('_US_CDISPLAYMODE','Visualizzazione dei commenti');
define('_US_CSORTORDER','Ordine di visualizzazione dei commenti');
define('_US_PASSWORD','Password');
define("_US_TYPEPASSTWICE","(scrivi la nuova password due volte nel caso desideri cambiarla)");
define("_US_SAVECHANGES","Salva le modifiche");
define("_US_NOEDITRIGHT","Spiacenti, ma non hai i privilegi per modificare i dati di questo utente.");
define("_US_PASSNOTSAME","Le due password sono diverse. E' necessario che siano identiche!");
define("_US_PWDTOOSHORT","Spiacenti, ma la tua password deve essere lunga almeno <b>%s</b> caratteri.");
define('_US_PROFUPDATED','Il tuo profilo è stato aggiornato con successo!');
define('_US_USECOOKIE','Salva il mio nick in un cookie per un anno');
define('_US_NO','No');
define('_US_DELACCOUNT','Cancella l\'account');
define('_US_MYAVATAR', 'Il mio avatar');
define('_US_UPLOADMYAVATAR', 'Trasferisci un avatar personale sul server');
define('_US_MAXPIXEL','Numero massimo di pixel');
define('_US_MAXIMGSZ','Dimensione massima dell\'immagine (in Byte)');
define('_US_SELFILE','Scegli il file');
define('_US_OLDDELETED','Il tuo vecchio avatar è stato cancellato dal server!');
define('_US_CHOOSEAVT', 'Scegli un avatar dalla lista degli avatar disponibili.');

define('_US_PRESSLOGIN', 'Premi il pulsante qui sotto per effettuare il login');
define('_US_ADMINNO', 'Gli utenti nel gruppo dei Webmaster non possono essere cancellati');
?>