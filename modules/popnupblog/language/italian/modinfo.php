<?php
// $Id: modinfo.php,v 1.1.1.1 2005/08/28 02:13:09 yoshis Exp $ 
//ITA translation fixed & updated by Defkon1 - www.xoopsitalia.org

define('_MI_POPNUPBLOG_APPL_DESC', 'Blog');
define('_MI_POPNUPBLOG_1_LINE', 'Blog Aggiornato Recentemente');
define('_MI_POPNUPBLOG_CONF_DESC', 'Descrizione');
define('_MI_POPNUPBLOG_TRACKBACK', 'Trackback blog');
define('_MI_POPNUPBLOG_REWRITE_TITLE', 'Usa URL rewrite');
define('_MI_POPNUPBLOG_NAME', 'Blog');
define('_MI_POPNUPBLOG_DESC', 'Blog');
define('_MI_POPNUPBLOG_UNUSE_UPDATE_PING', 'Blocca aggiornamento ping');
define('_MI_POPNUPBLOG_UNUSE_TRACKBACK', 'Blocca trackback tra blog');
define('_MI_POPNUPBLOG_APPL_WAITING_TITLE', 'Nuovo post nel Blog');
define('_MI_POPNUPBLOG_NAME_BIG_BLOCK', 'Blog');
define('_MI_POPNUPBLOG_USE_REWRITE', 'Usa URL rewrite');
define('_MI_POPNUPBLOG_UPDATE_PING', 'Usa aggiornamento ping');
define('_MI_POPNUPBLOG_1_LINE_DESC', 'Blocco Blog');
define('_MI_POPNUPBLOG_REWRITE_DESC', 'Utente pu&ograve; usare il blog da  /modules/popnupblog/view/index.php?uid=1 a  /modules/popnupblog/view/1.html  (impostazione per esperti)');
define('_MI_POPNUPBLOG_APPL_WAITING', 'Nuovo post');
define('_MI_POPNUPBLOG_UPDATE_PING_DESC', 'Usa aggiornamento ping');
define('_MI_POPNUPBLOG_WRITE', 'Scrivi post');
define('_MI_POPNUPBLOG_PREFERENCE', 'Preferenze');
define('_MI_POPNUPBLOG_APPLY', 'Nuovo Blog');
define('_MI_POPNUPBLOG_TRACKBACK_DESC', 'Abilita trackback');
define('_MI_POPNUPBLOG_UNUSE_REWRITE', 'Non usare URL rewrite');
define('_MI_POPNUPBLOG_APPL_DENY', 'Non concesso');
define('_MI_POPNUPBLOG_CONFIG_RSS_DEF', 'Utente registrato pu&ograve; scrivere');
define('_MI_POPNUPBLOG_USE_TRACKBACK', 'Usa trackback');
define('_MI_POPNUPBLOG_APPL_ALLOW', 'Permesso concesso');
define('_MI_POPNUPBLOG_APPL_OK', 'Permetti agli utenti registrati di pubblicare nuovi post');
define('_MI_POPNUPBLOG_USE_UPDATE_PING', 'Usa aggiornamento ping');
define('_MI_POPNUPBLOG_CONFIG_RSS_DESC', 'Descrizione del blog nel feed rss');
// Add 2004.10.27 by yoshis
define('_MI_POPNUPBLOG_MAILSERVER', 'Server di Posta');
define('_MI_POPNUPBLOG_MAILSERVER_DESC', 'Indirizzo POP3 del server di posta');
define('_MI_POPNUPBLOG_MAILUSER', 'Nome utente del server di posta');
define('_MI_POPNUPBLOG_MAILUSER_DESC', 'Inserisci nome utente per accedere al server di posta.');
define('_MI_POPNUPBLOG_MAILPWD', 'Password');
define('_MI_POPNUPBLOG_MAILPWD_DESC', 'Inserisci la password del server di posta');
define('_MI_POPNUPBLOG_MAILADDR', 'Indirizzo di posta');
define('_MI_POPNUPBLOG_MAILADDR_DESC', 'Inserisci l&apos;indirizzo di posta.');
// Add 2005.01.22 by yoshis
define("_MI_POPNUPBLOG_GUESTBLOGID","Consenti Messaggi da utenti anonimi");
define("_MI_POPNUPBLOG_ACTVTYPE","Seleziona il tipo di attivazione per i Nuovi Blog creati");
define("_MI_POPNUPBLOG_AUTOACTV","Attivazione automatica");
define("_MI_POPNUPBLOG_ADMINACTV","Attivazione manuale degli amministratori");
define("_MI_POPNUPBLOG_NEWUNOTIFY","Notifica via email quando viene attivato un nuovo blog?");
define("_MI_POPNUPBLOG_SHOWNAME","Sostituisci il Nome Utente con quello reale");
// Add 2006.03.21 by yoshis
define("_MI_POPNUPBLOG_GROUPSETBYUSER","Permesso del gruppo all'utente (albero, vista, commento, voto)");

// For Notify
define ('_MI_POPNUPBLOG_BLOG_NOTIFY', 'Notifica');
define ('_MI_POPNUPBLOG_BLOG_NOTIFYDSC', 'Opzioni di notifica applicate al blog corrente.');

define ('_MI_POPNUPBLOG_GLOBAL_NOTIFY', 'Globale');
define ('_MI_POPNUPBLOG_GLOBAL_NOTIFYDSC', 'Opzioni globali di notifica.');

define ('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFY', 'Nuovo post');
define ('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYCAP', 'Notificami ogni nuovo post nel blog corrente.');
define ('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYDSC', 'Ricevi una notifica quando viene pubblicato un nuovo post nel blog corrente.');
define ('_MI_POPNUPBLOG_BLOG_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo post nel blog');

define ('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFY', 'Nuovo Blog');
define ('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYCAP', 'Notificami quando viene attivato un nuovo blog.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYDSC', 'Ricevi una notifica quando viene creato un nuovo blog.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWBLOG_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo blog');

define ('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFY', 'Nuovo Post (tutti i blog)');
define ('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYCAP', 'Notificami ogni nuovo post in qualsiasi blog.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYDSC', 'Ricevi una notifica quando viene pubblicato un nuovo post in qualsiasi blog.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo post');

define ('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFY', 'Nuovo Post (Testo completo)');
define ('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Notificami ogni nuovo post in qualsiasi blog (testo completo).');
define ('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Ricevi una notifica quando viene pubblicato un nuovo posto in qualsiasi blog (con testo completo).');
define ('_MI_POPNUPBLOG_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo post (testo completo)');

//add
define ('_MI_POPNUPBLOG_GLOBAL_NEWCOMMENT_NOTIFY', 'Nuovo Commento');
define ('_MI_POPNUPBLOG_GLOBAL_NEWCOMMENT_NOTIFYCAP', 'Notificami ogni nuovo commento.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWCOMMENT_NOTIFYDSC', 'Ricevi una notifica ogni volta che viene pubblicato un nuovo commento.');
define ('_MI_POPNUPBLOG_GLOBAL_NEWCOMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica : Nuovo commento');

?>
