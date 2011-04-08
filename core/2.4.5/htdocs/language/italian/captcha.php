<?php
// Updated by Voodoo Team <supporto@voodoo4web.com> (Giovanni Lombi aka energiko <energiko333@gmail.com>, Davide Mortara, Samuele Panzeri ) for Xoops Italia
// Original translation by Ianez & Xoops Italia Staff - Xoops Italian Official Support Site - www.xoopsitalia.org
// LAST UPDATE: 30/11/09

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
 * @subpackage      Xoops Captcha Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: captcha.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Ianez - Xoops Italia Staff

define("_CAPTCHA_CAPTION", "Codice di verifica");
define("_CAPTCHA_INVALID_CODE", "Codice di verifica non valido!");
define("_CAPTCHA_TOOMANYATTEMPTS", "Sono stati fatti troppi tentativi!");
define("_CAPTCHA_MAXATTEMPTS", "Numero massimo di tentativi: %d");
// For image mode      
define("_CAPTCHA_RULE_IMAGE", "Inserire le lettere nell'immagine");
define("_CAPTCHA_RULE_CASESENSITIVE", "Il codice &egrave; case-sensitive [Richiede Maiuscole/minuscole]");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "Il codice non &egrave; case-sensitive [Non richiede Maiuscole/minuscole]");
define("_CAPTCHA_REFRESH", "Premere qui per aggiornare, se l'immagine non &egrave; chiara");
// For text mode
define("_CAPTCHA_RULE_TEXT", "Inserire il risultato dell'espressione");

/**
 * Error defines
 */
define('_CAPTCHA_LOADFILEERROR', 'Error: Impossibile caricare il file %u nel file %s alla linea %s. ');

?>