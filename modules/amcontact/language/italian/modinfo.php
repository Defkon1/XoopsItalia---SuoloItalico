<?php
// $Id: modinfo.php,v 1.4 2008/10/12 00:06:14 andrew Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //


/**
* xoops_version.php
* General
*/
define("_MI_AMCONTACT_NAME",	"AM Contact");
define("_MI_AMCONTACT_DESC",	"Contatti con modulo tipo &quot;captcha&quot;.");


/**
* xoops_version.php
* Configs
*/
define("_MI_AMCONT_LOGGEDIN",		"Connesso:");
define("_MI_AMCONT_LOGGEDINDSC",	"Se il mittente deve essere registrato o meno per inviare messaggi.");
define("_MI_AMCONT_BDYTMPLT",		"Modello di messaggio:");
define("_MI_AMCONT_BDYTMPLTDSC",	"Questo &egrave; il modello per la posta che gli amministratori riceveranno.");
define("_MI_AMCONT_BDYTMPLTTXT",	"Ciao,

{USER_NAME} {USER_EMAIL} ha inviato il seguente messaggio dal tuo sito web all'indirizzo
{XOOPS_URL}:

{USER_MESSAGE}


Inormazioni di sicurezza:
Indirizzo IP dell'utente: {USER_IP}
Browser dell'utente: {USER_BROWSER}
Orario di invio: {USER_TIME}


");
define("_MI_AMCONT_MAXCHARS",		"Numero Massimo di Caratteri :");
define("_MI_AMCONT_MAXCHARSDSC",	"La quantit&agrave; massima di caratteri permessi in un messaggio dell'utente.");
define("_MI_AMCONT_DEFNAME",		"Nome predefinito:");
define("_MI_AMCONT_DEFNAMEDSC",		"Seleziona se viene utilizzato il vero nome del mittente o il nome utente; Notare che non tutti gli utenti compilano il campo nome reale.");
define("_MI_AMCONT_DEFNAME_OPT_0",	"Nome utente");
define("_MI_AMCONT_DEFNAME_OPT_1",	"Nome reale");

define("_MI_AMCONT_VERTYPE",		"VTipo di verifica:");
define("_MI_AMCONT_VERTYPEDSC",		"Il tipo di verifica da utilizzare. Questo &egrave; uno strumento per aiutare a prevenire lo spam viene inviato tramite il modulo di contatto. reCaptcha richiede chiavi di API, che potete richiedere registrandovi nel
<a href=\"http://recaptcha.net\" target=\"_blank\">sito reCaptcha</a>.");
define("_MI_AMCONT_VERTYPE_OPT_0",	"Nessuna verifica");
define("_MI_AMCONT_VERTYPE_OPT_1",	"Domande e risposte");
define("_MI_AMCONT_VERTYPE_OPT_2",	"Captcha di XOOPS");
define("_MI_AMCONT_VERTYPE_OPT_3",	"Captcha con modulo immagine");
define("_MI_AMCONT_VERTYPE_OPT_4",	"reCaptcha");
define("_MI_AMCONT_REPUBKEY",		"chiave pubblica reCaptcha:");
define("_MI_AMCONT_REPUBKEYDSC",	"Per ottenere la chiave pubblica e privata ,potete registrarvi nel<a href=\"http://recaptcha.net\" target=\"_blank\">sito reCaptcha</a>.");
define("_MI_AMCONT_REPRIKEY",		"Chiave privata di reCaptcha:");
define("_MI_AMCONT_REPRIKEYDSC",	"Per ottenere la chiave pubblica e privata ,potete registrarvi nel<a href=\"http://recaptcha.net\" target=\"_blank\">sito reCaptcha</a>.");
define("_MI_AMCONT_TBOXWIDTH",		"Larghezza dell'area campo testo:");
define("_MI_AMCONT_TBOXWIDTHDSC",	"Larghezza dell'area testo del messaggio.");
define("_MI_AMCONT_TBOXHEIGHT",		"Altezza dell'area campo testo:");
define("_MI_AMCONT_TBOXHEIGHTDSC",	"Altezza dell'area testo del messaggio.");
define("_MI_AMCONT_INTROTEXT",		"Testo introduttivo:");
define("_MI_AMCONT_INTROTEXTDSC",	"Testo introduttivo sopra il form di contatto.");
define("_MI_AMCONT_INTROTEXTTXT",	"");


/**
* menu.php
*/
define("_MI_AMCONTACT_MENU1",	"Indice");
define("_MI_AMCONTACT_MENU2",	"Domande");


/**
* For cloning - only change when change dir name!
*/
#define("_MI_AMCONT_MODDIR",	"amcontact");


?>