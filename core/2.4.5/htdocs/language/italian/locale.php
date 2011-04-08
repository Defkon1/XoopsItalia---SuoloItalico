<?php
// Original translation by Ianez for Xoops Italia - Xoops Italian Official Support Site - www.xoopsitalia.org
// LAST UPDATE: 05/01/10

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops locale
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @since           2.3.0
 * @subpackage      Xoops Locale Language 
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: locale.php 3152 2009-04-18 13:30:57Z catzwolf $
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Accesso non consentito'); 

setlocale(LC_ALL, 'it_IT');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"    
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "\O\g\g\i\ \a\l\l\e\ G:i");
define("_YESTERDAY", "\I\e\\r\i\ \a\l\l\e\ G:i");
define("_MONTHDAY", "j/n G:i");
define("_YEARMONTHDAY", "j/n/Y G:i");
define("_ELAPSE", "%s fa");
define("_TIMEFORMAT_DESC", "Formati validi: \"s\" - ". _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />" . "\"c\" o \"custom\" - formato determinato dall\'intervallo di tempo trascorso; \"e\" - Trascorso; \"mysql\" - d-m-Y H:i:s;<br />" . "stringa specifica - Verifica sul <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">manuale PHP</a>.");
/**
 * A Xoops Local
 *
 * @package     kernel
 * @subpackage  Language
 *
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright   copyright (c) 2000-2009 XOOPS.org
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param unknown_type $number
     * @return unknown
     */    
    function number_format($number)
    {
        return number_format($number, 2, ',', '.');
    }
    
    /**
     * Money Format 
     *
     * @param string $format
     * @param string $number
     * @return money format
     */
    
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'it_IT');
        return money_format($format, $number);
    }
}
?>
