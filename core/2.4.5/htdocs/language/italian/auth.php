<?php
// Updated by Voodoo Team <supporto@voodoo4web.com> (Giovanni Lombi aka energiko <energiko333@gmail.com>, Davide Mortara, Samuele Panzeri ) for Xoops Italia
// Original translation by Ianez & Xoops Italia Staff - Xoops Italian Official Support Site - www.xoopsitalia.org
// LAST UPDATE: 08/01/10

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Auth Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: auth.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Accesso non consentito');

// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Marco Ragogna - Xoops Italia staff

define('_AUTH_MSG_AUTH_METHOD',"metodo di autenticazione utilizzato: %s");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','Estensione PHP LDAP non caricata (verificare il file di configurazione php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Non &egrave; possibile connettersi al server");
define('_AUTH_LDAP_USER_NOT_FOUND',"Utente %s non trovato nella directory del server (%s) in %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Non &egrave; possibile leggere il valore %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Spiacente, per la connessione: %s <br /> non &egrave; stata trovata alcuna informazione per l'utente nel database Xoops" .
		"Per favore verificate i dati dell'utente o attivate la gestione automatica");
define('_AUTH_LDAP_START_TLS_FAILED',"Impossibile aprire una connessione TLS");	

?>
