<?php
/** 
*
* acp_groups [Swedish] (version 0.8.0 - 3.0.RC8)
*
* @package language
* @version $Id: groups.php,v 1.16 2007/12/01 15:34:08 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Från denna panel kan du administrera alla dina användargrupper. Du kan ta bort, skapa och redigera existerande grupper. Vidare kan du välja gruppledare, ändra öppnen/stängd-gruppstatus och ställa in gruppnamn och beskrivning.',
	'ADD_USERS'						=> 'Lägg till användare',
	'ADD_USERS_EXPLAIN'				=> 'Här kan du lägga till nya användaren till gruppen. Du kan välja om denna grupp ska vara standardgruppen för de valda användarna. Du kan också göra de till gruppledare. Ange varje användarnamn på en ny rad.',

	'COPY_PERMISSIONS'				=> 'Kopiera rättigheter från',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'När gruppen skapats kommer den att ha samma rättigheter som den du väljer här.',
	'CREATE_GROUP'					=> 'Skapa ny grupp',

	'GROUPS_NO_MEMBERS'				=> 'Denna grupp har inga medlemmar',
	'GROUPS_NO_MODS'				=> 'Inga gruppledare utsedda',
	
	'GROUP_APPROVE'					=> 'Godkänn medlem',
	'GROUP_APPROVED'				=> 'Godkända medlemmar',
	'GROUP_AVATAR'					=> 'Gruppvisningsbild',
	'GROUP_AVATAR_EXPLAIN'			=> 'Denna bild kommer att visas i gruppens kontrollpanelen.',
	'GROUP_CLOSED'					=> 'Stängd',
	'GROUP_COLOR'					=> 'Gruppfärg',
	'GROUP_COLOR_EXPLAIN'			=> 'Definierar den färg som medlemmars användarnamn ska visas i, lämna blankt för att använda användarens normalfärg.',
 	'GROUP_CONFIRM_ADD_USER'		=> 'Är du säker på att du vill lägga till användaren %1$s till gruppen?',
 	'GROUP_CONFIRM_ADD_USERS'		=> 'Är du säker på att du vill lägga till användarna %1$s till gruppen?',
	'GROUP_CREATED'					=> 'Gruppen skapades.',
	'GROUP_DEFAULT'					=> 'Gör till standardgrupp för medlem',
	'GROUP_DEFS_UPDATED'			=> 'Standardgrupp inställd för alla valda medlemmar.',
	'GROUP_DELETE'					=> 'Ta bort medlem från gruppen',
	'GROUP_DELETED'					=> 'Gruppen togs bort och användarnas standardgrupper inställda.',
	'GROUP_DEMOTE'					=> 'Avsäg gruppledarskap',
	'GROUP_DESC'					=> 'Gruppbeskrivning',
	'GROUP_DETAILS'					=> 'Gruppdetaljer',
	'GROUP_EDIT_EXPLAIN'			=> 'Här kan du redigera en existerande grupp. Du kan ändra dess namn, beskrivning och typ (öppen, stängd, osv.). Du kan också ställa in vissa gruppomfattande alternativ såsom färg, titel, osv. Ändringar som görs här åsidosätter användarnas nuvarande inställningar. Kom ihåg att gruppmedlemmar kan åsidåsätta sina gruppvisningsbilder om du inte ställer in lämpliga användarrättigheter.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angivna användarna är redan medlemmar i denna grupp.',
	'GROUP_FOUNDER_MANAGE'			=> 'Kan endast hanteras av grundare',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Begränsa hantering av denna grupp till endast grundare. Användare som har grupprättigheter kan fortfarande se denna grupp och dess medlemmar.',
	'GROUP_HIDDEN'					=> 'Dold',
	'GROUP_LANG'					=> 'Gruppspråk',
	'GROUP_LEAD'					=> 'Gruppledare',
	'GROUP_LEADERS_ADDED'			=> 'Nya ledare lades till i gruppen.',
	'GROUP_LEGEND'					=> 'Visa gruppen i legenden',
	'GROUP_LIST'					=> 'Nuvarande medlemmar',
	'GROUP_LIST_EXPLAIN'			=> 'Detta är en fullständig lista över alla nuvarande medlemmar i denna grupp. Du kan ta bort medlemmar (förutom i vissa specialgrupper) eller lägga till nya.',
	'GROUP_MEMBERS'					=> 'Gruppmedlemmar',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Detta är en fullständig lista över alla medlemmar i denna användargrupp. Den består av olika delar för ledare, användare med väntande medlemskap och existerande medlemmar. Härifrån kan du hantera alla aspekter av vem som är medlem i denna grupp och vad deras roll är. För att ta bort en ledare men behålla de i gruppen använd Avsäg ledarskap istället för ta bort. Använd Befordra för att göra en existerande medlem till ledare.',
	'GROUP_MESSAGE_LIMIT'			=> 'Gruppens gräns för antal personliga meddelande per mapp',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denna inställning åsidosätter standardgränsen för antal meddelanden per mapp. Ange 0 för att använda användarens standardgräns.',
	'GROUP_MODS_ADDED'				=> 'Nya gruppledare lades till.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppledarna avsades ledarskap.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppmedlemmarna befordrades.',
	'GROUP_NAME'					=> 'Gruppnamn',
 	'GROUP_NAME_TAKEN'				=> 'Gruppnamnet som du valde används redan, välj ett annat alternativ.',
	'GROUP_OPEN'					=> 'Öppen',
	'GROUP_PENDING'					=> 'Väntande medlemmar',
	'GROUP_PROMOTE'					=> 'Befordra till gruppledare',
	'GROUP_RANK'					=> 'Grupptitel',
	'GROUP_RECEIVE_PM'				=> 'Gruppen kan ta emot personliga meddelanden',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Kom ihåg att dolda grupper inte kan ta emot personliga meddelanden, oavsett denna inställning.',
	'GROUP_REQUEST'					=> 'Ansökan',
	'GROUP_SETTINGS_SAVE'			=> 'Gruppomfattande inställningar',
	'GROUP_TYPE'					=> 'Grupptyp',
	'GROUP_TYPE_EXPLAIN'			=> 'Detta avgör vilka användare som kan gå med i eller visa denna grupp.',
	'GROUP_UPDATED'					=> 'Gruppinställningarna uppdaterades.',

	'GROUP_USERS_ADDED'				=> 'Nya användare lades till i gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valda användarna är redan medlemmar.',
	'GROUP_USERS_REMOVE'			=> 'Användarna togs bort från gruppen och nya standarder ställdes in.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Gör till standardgrupp för alla medlemmar',
	'MEMBERS'				=> 'Medlemmar',

	'NO_GROUP'					=> 'Ingen grupp angiven.',
	'NO_GROUPS_CREATED'			=> 'Inga grupper har skapats.',
	'NO_PERMISSIONS'			=> 'Kopiera inte rättigheter',
	'NO_USERS'					=> 'Du angav inga användare.',

	'SPECIAL_GROUPS'			=> 'För-definierade grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'För-definierade grupper är speciella grupper, de kan inte tas bort eller ändras direkt. Du kan dock fortfarande lägga till användare och ändra grundläggande inställningar.',

	'TOTAL_MEMBERS'				=> 'Medlemmar',

	'USERS_APPROVED'				=> 'Användarna godkändes.',
	'USER_DEFAULT'					=> 'Användarens standardtitel',
	'USER_DEF_GROUPS'				=> 'Användardefinierade grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dessa grupper skapades av dig eller en annan administratör på detta forum. Du kan hantera medlemskap och ändra gruppinställningar eller till och med ta bort gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Sätt som standardgrupp',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Om du sätter ja här kommer denna grupp att sättas som standardgrupp för de användare du lägger till.',
	'USER_GROUP_LEADER'				=> 'Sätt som gruppledare',
));

?>