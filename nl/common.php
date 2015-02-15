<?php
/**
 *
 * @package phpBB Extension - Incognito
 * @copyright (c) 2015 steveurkel
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
		'ANONYM'						=> 'Anoniem plaatsen',
		'ANONYM_EXPLAIN'				=> 'Selecteer deze optie als je dit bericht anoniem wilt plaatsen. Dit kan niet worden teruggedraaid als het bericht al geplaatst is.',
		
		'ACP_INCOGNITO_TITLE'			=> 'Incognito Module',
		'ACP_INCOGNITO'					=> 'Instellingen',
		'ACP_INCOGNITO_GOODBYE'			=> 'Activeer Anoniem plaatsen?',
		'ACP_INCOGNITO_SETTING_SAVED'	=> 'Instellingen zijn succesvol opgeslagen!',
		'ACP_INCOGNITO_NAME'			=> 'Gebruikersnaam weergeven',
		'ACP_INCOGNITO_NAME_EXPLAIN'	=> 'Vul de gebruikersnaam in die je bij anonieme berichten wilt gebruiken. Als je deze optie leeg laat wordt de standaard waarde gebruikt.',
));
