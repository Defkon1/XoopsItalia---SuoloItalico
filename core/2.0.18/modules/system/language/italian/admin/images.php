<?php
// -------------------------------------------------------------------------------- //
// Updated by Ianez - Xoops Italia Staff
// Original translation by Marco Ragogna (blueangel)
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: images.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%% Image Manager %%%%%

define('_MD_IMGMAIN','Amministrazione Immagini');

define('_MD_ADDIMGCAT','Aggiungi una categoria di immagini:');
define('_MD_EDITIMGCAT','Modifica una categoria di immagini:');
define('_MD_IMGCATNAME','Nome della categoria:');
define('_MD_IMGCATRGRP','Scegli un gruppo abilitato all\'utilizzo delle immagini:<br /><br /><span style="font-weight: normal;">A questi gruppi è consentito di utilizzare le immagini ma non di caricarle sul server. Il gruppo dei webmaster ha accesso automatico.</span>');
define('_MD_IMGCATWGRP','Scegli i gruppi cui è consentito amministrare le immagini sul server:<br /><br /><span style="font-weight: normal;">Tipicamente consentito al gruppo moderatori e amministratori.</span>');
define('_MD_IMGCATWEIGHT','Ordine di visualizzazione delle immagini:');
define('_MD_IMGCATDISPLAY','Mostra questa categoria?');
define('_MD_IMGCATSTRTYPE','Modalità di salvataggio dell\'immagine:');
define('_MD_STRTYOPENG','Non può essere modificata successivamente !');
define('_MD_INDB','Nel database (come dato binario "blob")');
define('_MD_ASFILE','Come file (nella directory predefinita di upload)<br />');
define('_MD_RUDELIMGCAT','Sei certo di voler eliminare questa categoria e tutte le sue immagini?');
define('_MD_RUDELIMG','Sei sicuro di voler eliminare quest\'immagine?');

define('_MD_FAILDEL', "Non è stato possibile eliminare dal database l'immagine %s");
define('_MD_FAILDELCAT', "Non è stato possibile eliminare dal database la categoria di immagini %s");
define('_MD_FAILUNLINK', "Non è stato possibile eliminare dalla directory sul server l'immagine %s ");
?>
