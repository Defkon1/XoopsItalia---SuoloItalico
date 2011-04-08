<?php
// -------------------------------------------------------------------------------- //
// Updated by Ianez - Xoops Italia Staff
// Original translation by Marco Ragogna (blueangel)
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: modulesadmin.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Amministrazione Moduli");
define("_MD_AM_MODULE","Modulo");
define("_MD_AM_VERSION","Versione");
define("_MD_AM_LASTUP","Ultimo Aggiornamento");
define("_MD_AM_DEACTIVATED","Disattivato");
define("_MD_AM_ACTION","Azione");
define("_MD_AM_DEACTIVATE","Disattiva");
define("_MD_AM_ACTIVATE","Attiva");
define("_MD_AM_UPDATE","Aggiorna");
define("_MD_AM_DUPEN","Query doppie nelle tabelle dei moduli!");
define("_MD_AM_DEACTED","Il modulo selezionato è stato disattivato con successo! Adesso, se vuoi, puoi disinstallare il modulo.");
define("_MD_AM_ACTED","Il modulo selezionato è stato attivato con successo!");
define("_MD_AM_UPDTED","Il modulo selezionato è stato aggiornato con successo!");
define("_MD_AM_SYSNO","Il modulo System non può essere disattivato.");
define("_MD_AM_STRTNO","Questo modulo è impostato come modulo di default nella pagina iniziale. Per favore modifica il modulo iniziale secondo le tue esigenze.");

// added in RC2
define("_MD_AM_PCMFM","Per favore conferma:");

// added in RC3
define("_MD_AM_ORDER","Ordine");
define("_MD_AM_ORDER0","(0 = nascondi)");
define("_MD_AM_ACTIVE","Attivo");
define("_MD_AM_INACTIVE","Non attivo");
define("_MD_AM_NOTINSTALLED","Non installato");
define("_MD_AM_NOCHANGE","Nessuna modifica");
define("_MD_AM_INSTALL","Installa");
define("_MD_AM_UNINSTALL","Disinstalla");
define("_MD_AM_SUBMIT","Invia");
define("_MD_AM_CANCEL","Annulla");
define("_MD_AM_DBUPDATE","Database aggiornato con successo!");
define("_MD_AM_BTOMADMIN","Torna alla pagina 'Amministrazione Moduli'");

// %s represents module name
define("_MD_AM_FAILINS","Non è possibile installare %s.");
define("_MD_AM_FAILACT","Non è possibile attivare %s.");
define("_MD_AM_FAILDEACT","Non è possibile disattivare %s.");
define("_MD_AM_FAILUPD","Non è possibile aggiornare %s.");
define("_MD_AM_FAILUNINS","Non è possibile disinstallare %s.");
define("_MD_AM_FAILORDER","Non è possibile riordinare %s.");
define("_MD_AM_FAILWRITE","Non è possibile scrivere il file del menu principale.");
define("_MD_AM_ALEXISTS","Il modulo %s esiste già.");
define("_MD_AM_ERRORSC", "Errori:");
define("_MD_AM_OKINS","Il modulo %s è stato installato con successo!");
define("_MD_AM_OKACT","Il modulo %s è stato attivato con successo!");
define("_MD_AM_OKDEACT","Il modulo %s è stato disattivato con successo!");
define("_MD_AM_OKUPD","Il modulo %s è stato aggiornato con successo!");
define("_MD_AM_OKUNINS","Il modulo %s è stato disinstallato con successo!");
define("_MD_AM_OKORDER","Il modulo %s è stato modificato con successo!");

define('_MD_AM_RUSUREINS', 'Premi il pulsante qui sotto per installare questo modulo');
define('_MD_AM_RUSUREUPD', 'Premi il pulsante qui sotto per aggiornare questo modulo');
define('_MD_AM_RUSUREUNINS', 'Sei certo di voler disinstallare questo modulo?');
define('_MD_AM_LISTUPBLKS', 'I seguenti blocchi verranno aggiornati.<br />Seleziona i blocchi il cui contenuto (opzioni e template) può essere sovrascritto.<br />');
define('_MD_AM_NEWBLKS', 'Nuovi blocchi');
define('_MD_AM_DEPREBLKS', 'Blocchi deprecati');
?>
