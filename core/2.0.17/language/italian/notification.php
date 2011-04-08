<?php
// -------------------------------------------------------------------------------- //
// Italian translation by Marco Ragogna alias blueangel (m.ragogna@xoopsit.net)     //
// webmaster of XOOPS Official Italian Support Site (http://www.xoopsit.net)        //
// -------------------------------------------------------------------------------- //
// $Id: notification.php,v 1.1 2003/03/26 03:33:17 w4z004 Exp $

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Opzioni di notifica');
define ('_NOT_UPDATENOW', 'Aggiorna adesso!');
define ('_NOT_UPDATEOPTIONS', 'Aggiorna le opzioni di notifica');

define ('_NOT_CLEAR', 'Pulisci');
define ('_NOT_CHECKALL', 'Seleziona tutto');
define ('_NOT_MODULE', 'Modulo');
define ('_NOT_CATEGORY', 'Categoria');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nome');
define ('_NOT_EVENT', 'Evento');
define ('_NOT_EVENTS', 'Eventi');
define ('_NOT_ACTIVENOTIFICATIONS', 'Notifiche attive');
define ('_NOT_NAMENOTAVAILABLE', 'Nome non disponibile');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Elemento Nome non disponibile');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Elemento Tipo non disponibile');
define ('_NOT_ITEMURLNOTAVAILABLE', 'Elemento URL non disponibile');
define ('_NOT_DELETINGNOTIFICATIONS', 'Cancellazione delle notifiche in corso...');
define ('_NOT_DELETESUCCESS', 'Notifiche cancellate con successo!');
define ('_NOT_UPDATEOK', 'Opzioni di notifica aggiornate');
define ('_NOT_NOTIFICATIONMETHODIS', 'Il metodo di notifica è');
define ('_NOT_EMAIL', 'via email');
define ('_NOT_PM', 'via messaggio privato');
define ('_NOT_DISABLE', 'disabilitato');
define ('_NOT_CHANGE', 'Modifica');

define ('_NOT_NOACCESS', 'Non hai i permessi necessari per accedere a questa pagina.');

// Text for module config options

define ('_NOT_ENABLE', 'Abilita');
define ('_NOT_NOTIFICATION', 'Notifica');

define ('_NOT_CONFIG_ENABLED', 'Abilita notifica');
define ('_NOT_CONFIG_ENABLEDDSC', 'Questo modulo consente ad un utente di riceve un messaggio di notifica al verificarsi di alcuni eventi. Scegliendo "Sì", si abilita questa opzione.');

define ('_NOT_CONFIG_EVENTS', 'Abilita eventi specifici');
define ('_NOT_CONFIG_EVENTSDSC', 'Scegli per quali eventi i tuoi utenti possono abilitare le notifiche.');

define ('_NOT_CONFIG_ENABLE', 'Abiliti notifica');
define ('_NOT_CONFIG_ENABLEDSC', 'Questo modulo consente ad un utente di ricevere un messaggio di notifica al verificarsi di alcuni eventi. Scegli se all\'utente la notifica viene visualizzata in un blocco, all\'interno del modulo, o in entrambi. Per le notifiche nel blocco, l\'opzione di notifica deve essere abilitata per quel modulo.');
define ('_NOT_CONFIG_DISABLE', 'Disabilita notifica');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Abilita soltanto la notifica nel blocco.');
define ('_NOT_CONFIG_ENABLEINLINE', 'Abilita soltanto la notifica nel modulo.');
define ('_NOT_CONFIG_ENABLEBOTH', 'Abilita notifica (entrambi gli stili)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Commento Aggiunto');
define ('_NOT_COMMENT_NOTIFYCAP', 'Desidero ricevere un messaggio di notifica quando un nuovo commento viene aggiunto a questo elemento.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Ricevi un messaggio di notifica ogni volta che un nuovo commento viene aggiunto a questo elemento.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica: Commento aggiunto a {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Commento Inviato');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Desidero ricevere un messaggio di notifica quando un nuovo commento viene inviato (ed è attessa di approvazione) per questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Ricevi un messaggio di notifica ogni volta che un nuovo commento viene inviato (ed è attesa di approvazione) per questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica: Commento inviato a {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Segnalibro');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Segnalibro per questo elemento (nessuna notifica).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Tieni traccia di questo elemento, senza ricevere eventi di notifica.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Modalità di notifica: quando per esempio vuoi tenere d\'occhio un forum, in che modo desideri ricevere le notifiche di eventuali aggiornamenti?');
define ('_NOT_METHOD_EMAIL', 'Email (utilizza l\'indirizzo email del mio profilo)');
define ('_NOT_METHOD_PM', 'Messaggio privato');
define ('_NOT_METHOD_DISABLE', 'Temporaneamente disabilitato');

define ('_NOT_NOTIFYMODE', 'Metodo di notifica di default');
define ('_NOT_MODE_SENDALWAYS', 'Un messaggio per ogni notifica selezionata');
define ('_NOT_MODE_SENDONCE', 'Un solo messaggio per tutte le notifiche');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Un solo messaggio per tutte le notifiche e disabilitazione fino a nuovo login');

define ('_NOT_NOTHINGTODELETE', 'Nessun valore da eliminare.');
?>
