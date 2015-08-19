<?php
/** 
*
* mcp [Swedish] (version 0.8.0 - 3.0.RC8)
*
* @package language
* @version $Id: mcp.php,v 1.18 2007/12/01 15:34:09 virtuality Exp $
* @copyright (c) 2006 phpBB Group 
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
	'ACTION'				=> 'Handling',
 	'ACTION_NOTE'			=> 'Handling/Anteckning',
	'ADD_FEEDBACK'			=> 'Lägg till användaranteckning',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Fyll i följande formulär om du vill lägga till en användaranteckning för denna användare. Använd endast oformaterad text; HTML, BBCode, osv. är inte tillåtet.',
	'ADD_WARNING'			=> 'Lägg till varning',
	'ADD_WARNING_EXPLAIN'	=> 'Fyll i detta formulär för att varna denna användare. Använd endast oformaterad text; HTML, BBCode, osv. är inte tillåtet.',
	'ALL_ENTRIES'			=> 'Visa alla poster',
	'ALL_NOTES_DELETED'		=> 'Tog bort alla användaranteckningar.',
	'ALL_REPORTS'			=> 'Alla rapporter',
	'ALREADY_REPORTED'		=> 'Detta inlägg har redan anmälts.',
	'ALREADY_WARNED'		=> 'En varning har redan utfärdats för detta inlägg.',
	'APPROVE'				=> 'Godkänn',
	'APPROVE_POST'			=> 'Godkänn inlägg',
	'APPROVE_POST_CONFIRM'	=> 'Är du säker på att du vill godkänna detta inlägg?',
	'APPROVE_POSTS'			=> 'Godkänn inlägg',
	'APPROVE_POSTS_CONFIRM'	=> 'Är du säker på att du vill godkänna de valda inläggen?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Du kan inte flytta en tråd till den kategori som den redan är i.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Du kan inte varna oregistrerade gäster.',
	'CANNOT_WARN_SELF'		=> 'Du kan inte varna dig själv.',
	'CAN_LEAVE_BLANK'		=> 'Detta kan lämnas tomt.',
	'CHANGE_POSTER'			=> 'Ändra postare',
	'CLOSE_REPORT'			=> 'Stäng rapport',
	'CLOSE_REPORT_CONFIRM'	=> 'Är du säker på att du vill stänga den valda rapporten?',
	'CLOSE_REPORTS'			=> 'Stäng rapporter',
	'CLOSE_REPORTS_CONFIRM'	=> 'Är du säker på att du vill stänga de valda rapporterna?',

	'DELETE_POSTS'				=> 'Ta bort inlägg',
	'DELETE_POSTS_CONFIRM'		=> 'Är du säker på att du vill ta bort dessa inlägg?',
	'DELETE_POST_CONFIRM'		=> 'Är du säker på att du vill ta bort detta inlägg?',
	'DELETE_REPORT'				=> 'Ta bort rapport',
	'DELETE_REPORT_CONFIRM'		=> 'Är du säker på att du vill ta bort den valda rapporten?',
	'DELETE_REPORTS'			=> 'Ta bort rapporter',
	'DELETE_REPORTS_CONFIRM'	=> 'Är du säker på att du vill ta bort de valda rapporterna?',
 	'DELETE_SHADOW_TOPIC'		=> 'Ta bort skuggtråd',
	'DELETE_TOPICS'				=> 'Ta bort valda trådar',
	'DELETE_TOPICS_CONFIRM'		=> 'Är du säker på att du vill ta bort dessa trådar?',
	'DELETE_TOPIC_CONFIRM'		=> 'Är du säker på att du vill ta bort denna tråd?',
	'DISAPPROVE'				=> 'Avslå',
	'DISAPPROVE_REASON'			=> 'Skäl för avslag',
	'DISAPPROVE_POST'			=> 'Avslå inlägg',
	'DISAPPROVE_POST_CONFIRM'	=> 'Är du säker på att du vill avslå detta inlägg?',
	'DISAPPROVE_POSTS'			=> 'Avslå inlägg',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Är du säker på att du vill avslå de valda inläggen?',
	'DISPLAY_LOG'				=> 'Visa poster nyare än:',
	'DISPLAY_OPTIONS'			=> 'Visningsalternativ',

	'EMPTY_REPORT'					=> 'Du måste ange en beskrivning när du väljer detta skäl.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Observera att en eller flera trådar togs bort från databasen eftersom de var eller blev tomma.',

	'FEEDBACK'				=> 'Användaranteckningar',
	'FORK'					=> 'Kopiera',
	'FORK_TOPIC'			=> 'Kopiera tråd',
	'FORK_TOPIC_CONFIRM'	=> 'Är du säker på att du vill kopiera denna tråd?',
	'FORK_TOPICS'			=> 'Kopiera valda trådar',
	'FORK_TOPICS_CONFIRM'	=> 'Är du säker på att du vill kopiera de valda trådarna?',
	'FORUM_DESC'			=> 'Beskrivning',
	'FORUM_NAME'			=> 'Kategorinamn',
	'FORUM_NOT_EXIST'		=> 'Kategorin som du valde finns inte.',
	'FORUM_NOT_POSTABLE'	=> 'Kategorin som du valde kan inte postas i.',
	'FORUM_STATUS'			=> 'Kategoristatus',
	'FORUM_STYLE'			=> 'Kategoristil',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globalt meddelande',

	'IP_INFO'				=> 'IP-adressinformation',
 	'IPS_POSTED_FROM'		=> 'IP-adresser som denna användare postat ifrån',

	'LATEST_LOGS'				=> 'Senaste 5 loggade handlingarna',
	'LATEST_REPORTED'			=> 'Senaste 5 rapporterna',
	'LATEST_UNAPPROVED'			=> 'Senaste 5 inläggen som väntar på godkännande',
	'LATEST_WARNING_TIME'		=> 'Senast utfärdade varningen',
	'LATEST_WARNINGS'			=> 'Senaste 5 varningarna',
	'LEAVE_SHADOW'				=> 'Lämna kvar skuggtråd i den gamla kategorin',
	'LIST_REPORT'				=> '1 rapport',
	'LIST_REPORTS'				=> '%d rapporter',
	'LOCK'						=> 'Lås',
	'LOCK_POST_POST'			=> 'Lås inlägg',
	'LOCK_POST_POST_CONFIRM'	=> 'Är du säker på att du vill förhindra redigering av detta inlägg?',
	'LOCK_POST_POSTS'			=> 'Lås valda inlägg',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Är du säker på att du vill förhindra redigering av dessa inlägg?',
	'LOCK_TOPIC_CONFIRM'		=> 'Är du säker på att du vill låsa denna tråd?',
	'LOCK_TOPICS'				=> 'Lås valda trådar',
	'LOCK_TOPICS_CONFIRM'		=> 'Är du säker på att du vill låsa alla valda trådar?',
	'LOGS_CURRENT_TOPIC'		=> 'Visar loggar för:',
	'LOGIN_EXPLAIN_MCP'			=> 'För att moderera denna kategori måste du logga in.',
	'LOGVIEW_VIEWTOPIC'			=> 'Visa tråd',
	'LOGVIEW_VIEWLOGS'			=> 'Visa trådlogg',
	'LOGVIEW_VIEWFORUM'			=> 'Visa kategori',
	'LOOKUP_ALL'				=> 'Kolla upp alla IPs',
	'LOOKUP_IP'					=> 'Kolla upp IP',

	'MARKED_NOTES_DELETED'		=> 'Tog bort alla markerade användaranteckningar.',

	'MCP_ADD'						=> 'Lägg till varning',

	'MCP_BAN'					=> 'Bannlys',
	'MCP_BAN_EMAILS'			=> 'Bannlys e-postadresser',
	'MCP_BAN_IPS'				=> 'Bannlys IP-adresser',
	'MCP_BAN_USERNAMES'			=> 'Bannlys användare',

	'MCP_LOGS'						=> 'Moderationslogg',
	'MCP_LOGS_FRONT'				=> 'Förstasidan',
	'MCP_LOGS_FORUM_VIEW'			=> 'Kategoriloggar',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Trådloggar',

	'MCP_MAIN'						=> 'Start',
	'MCP_MAIN_FORUM_VIEW'			=> 'Visa kategori',
	'MCP_MAIN_FRONT'				=> 'Förstasidan',
	'MCP_MAIN_POST_DETAILS'			=> 'Inläggsuppgifter',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Visa tråd',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Gör till “anslag”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Är du säker på att du vill göra om denna tråd till “anslag”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Gör till “anslag”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Är du säker på att du vill göra om dessa trådar till “anslag”?',
	'MCP_MAKE_GLOBAL'				=> 'Gör till “globalt anslag”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Är du säker på att du vill göra om denna tråd till “globalt anslag”?',
	'MCP_MAKE_GLOBALS'				=> 'Gör till “globala anslag”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Är du säker på att du vill göra om dessa trådar till “globala anslag”?',
	'MCP_MAKE_STICKY'				=> 'Gör till “notis”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Är du säker på att du vill göra om denna tråd till “notis”?',
	'MCP_MAKE_STICKIES'				=> 'Gör till “notiser”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Är du säker på att du vill göra om dessa trådar till “notiser”?',
	'MCP_MAKE_NORMAL'				=> 'Gör till “normal tråd”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Är du säker på att du vill göra om denna tråd till “normal tråd”?',
	'MCP_MAKE_NORMALS'				=> 'Gör till “normala trådar”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Är du säker på att du vill göra om dessa trådar till “normala trådar”?',

	'MCP_NOTES'						=> 'Användaranteckningar',
	'MCP_NOTES_FRONT'				=> 'Förstasidan',
	'MCP_NOTES_USER'				=> 'Användardetaljer',

 	'MCP_POST_REPORTS'				=> 'Rapporter mot detta inlägg',
 
	'MCP_REPORTS'					=> 'Rapporterade inlägg',
	'MCP_REPORT_DETAILS'			=> 'Rapportdetaljer',
	'MCP_REPORTS_CLOSED'			=> 'Stängda rapporter',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Detta är en lista över alla rapporter om inlägg som redan behandlats.',
	'MCP_REPORTS_OPEN'				=> 'Öppna rapporter',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Detta är en lista över alla rapporter som inte behandlats.',

	'MCP_QUEUE'								=> 'Moderationskö',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Godkänningsdetaljer',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Inlägg som väntar på godkännande',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Detta är en lista över alla inlägg som kräver godkännande innan de visas för andra medlemmar.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Trådar som väntar på godkännande',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Detta är en lista över alla trådar som kräver godkännande innan de visas för andra medlemmar.',

	'MCP_VIEW_USER'			=> 'Visa varningar för en specifik användare',

	'MCP_WARN'				=> 'Varningar',
	'MCP_WARN_FRONT'		=> 'Förstasidan',
	'MCP_WARN_LIST'			=> 'Lista varningar',
	'MCP_WARN_POST'			=> 'Varna för specifikt inlägg',
	'MCP_WARN_USER'			=> 'Varna användare',

	'MERGE_POSTS'			=> 'Sammanfoga inlägg',
	'MERGE_POSTS_CONFIRM'	=> 'Är du säker på att du vill sammanfoga de valda inläggen?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Genom att använda formuläret nedan så kan du sammanfoga valda inlägg med en annan tråd. Dessa inlägg kommer inte att omordnas och det kommer att se ut som om användarna postade dem i den nya tråden.<br />Ange tråd-ID:et för den tråd du vill flytta till eller klicka på “Välj tråd”-knappen för att söka efter en tråd.',
	'MERGE_TOPIC_ID'		=> 'Destinationstrådens identifikationsnummer',
 	'MERGE_TOPICS'			=> 'Sammanfoga trådar',
 	'MERGE_TOPICS_CONFIRM'	=> 'Är du säker på att du vill sammanfoga de valda trådarna?',
	'MODERATE_FORUM'		=> 'Moderera kategori',
 	'MODERATE_TOPIC'		=> 'Moderera tråd',
	'MODERATE_POST'			=> 'Moderera inlägg',
	'MOD_OPTIONS'			=> 'Moderatoralternativ',
	'MORE_INFO'				=> 'Vidare information',
	'MOST_WARNINGS'			=> 'Användare med flest varningar',
	'MOVE_TOPIC_CONFIRM'	=> 'Är du säker på att du vill flytta tråden till en annan kategori?',
	'MOVE_TOPICS'			=> 'Flytta valda trådar',
	'MOVE_TOPICS_CONFIRM'	=> 'Är du säker på att du vill flytta de valda trådarna till en annan kategori?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Meddela författaren om godkännandet?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Meddela författaren om avslaget?',
	'NOTIFY_USER_WARN'				=> 'Meddela användaren om varningen?',
	'NOT_MODERATOR'					=> 'Du är inte moderator för denna kategori.',
	'NO_DESTINATION_FORUM'			=> 'Välj en destinationskategori.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Det finns inga destinationskategorier tillgängliga.',
	'NO_ENTRIES'					=> 'Inga loggposter för denna period.',
	'NO_FEEDBACK'					=> 'Inga användaranteckningar finns för denna användare.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Du måste välja en destinationstråd för att sammanfoga inlägg.',
	'NO_MATCHES_FOUND'				=> 'Inga träffar hittades.',
	'NO_POST'						=> 'Du måste välja ett inlägg för att varna användaren för ett inlägg.',
	'NO_POST_REPORT'				=> 'Detta inlägg rapporterades inte.',
	'NO_POST_SELECTED'				=> 'Du måste välja minst ett inlägg för att utföra denna åtgärd.',
	'NO_REASON_DISAPPROVAL'			=> 'Ange en passande anledning för avslag.',
 	'NO_REPORT'						=> 'Ingen rapport hittades',
 	'NO_REPORTS'					=> 'Inga rapporter hittades',
 	'NO_REPORT_SELECTED'			=> 'Du måste välja minst en rapport för att utföra denna åtgärd.',	
	'NO_TOPIC_ICON'					=> 'Ingen',
	'NO_TOPIC_SELECTED'				=> 'Du måste välja minst en tråd för att utföra denna åtgärd.',
 	'NO_TOPICS_QUEUE'				=> 'Det finns inga trådar som väntar på godkännande.',

	'ONLY_TOPIC'			=> 'Endast tråd “%s”',
	'OTHER_USERS'			=> 'Andra användare som postar från detta IP',

	'POSTER'					=> 'Postare',
	'POSTS_APPROVED_SUCCESS'	=> 'De valda inläggen godkändes.',
	'POSTS_DELETED_SUCCESS'		=> 'De valda inläggen togs bort databasen.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'De valda inläggen avslogs.',
	'POSTS_LOCKED_SUCCESS'		=> 'De valda inläggen låstes.',
	'POSTS_MERGED_SUCCESS'		=> 'De valda inläggen sammanfogades.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'De valda inläggen låstsesupp.',
	'POSTS_PER_PAGE'			=> 'Inlägg per sida',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Sätt till 0 för att visa alla inlägg.)',
	'POST_APPROVED_SUCCESS'		=> 'Det valda inlägget godkändes.',
	'POST_DELETED_SUCCESS'		=> 'Det valda inlägget togs bort från databasen.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Det valda inlägget avslogs.',
	'POST_LOCKED_SUCCESS'		=> 'Inlägget låstes.',
	'POST_NOT_EXIST'			=> 'Inlägget du efterfrågade finns inte.',
	'POST_REPORTED_SUCCESS'		=> 'Inlägget rapporterades.',
	'POST_UNLOCKED_SUCCESS'		=> 'Inlägget låstes upp.',

	'READ_USERNOTES'			=> 'Användaranteckningar',
	'READ_WARNINGS'				=> 'Användarvarningar',
	'REPORTER'					=> 'Rapportör',
	'REPORTED'					=> 'Rapporterad',
	'REPORTED_BY'				=> 'Rapporterad av',
	'REPORTED_ON_DATE'			=> '',
	'REPORTS_CLOSED_SUCCESS'	=> 'De valda rapporterna stängdes.',
	'REPORTS_DELETED_SUCCESS'	=> 'De valda rapporterna togs bort.',
	'REPORTS_TOTAL'				=> 'Det finns totalt <strong>%d</strong> rapporter att granska.',
	'REPORTS_ZERO_TOTAL'		=> 'Det finns inga rapporter att granska.',
	'REPORT_CLOSED'				=> 'Denna rapport har redan stängts.',
	'REPORT_CLOSED_SUCCESS'		=> 'Den valda rapporten stängdes.',
	'REPORT_DELETED_SUCCESS'	=> 'Den valda rapporten togs bort.',
	'REPORT_DETAILS'			=> 'Rapportdetaljer',
	'REPORT_MESSAGE'			=> 'Rapportera detta meddelande',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Använd detta formulär för att rapportera det valda meddelandet. Du bör endast rapportera meddelandet om det bryter mot forumets regler.',
	'REPORT_NOTIFY'				=> 'Meddela mig',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informerar dig när din rapport har hanterats.',
	'REPORT_POST_EXPLAIN'		=> 'Använd detta formulär för att rapportera det valda inlägget till kategorins moderatorer och till forumadministratörerna. Du bör endast rapportera meddelandet  om det bryter mot forumets regler.',
	'REPORT_REASON'				=> 'Rapportanledning',
	'REPORT_TIME'				=> 'Rapporttid',
	'REPORT_TOTAL'				=> 'Det finns totalt <strong>1</strong> rapport att granska.',
	'RESYNC'					=> 'Synkronisera',
	'RETURN_MESSAGE'			=> '%sÅtergå till meddelandet%s',
	'RETURN_NEW_FORUM'			=> '%sGå till den nya kategorin%s',
	'RETURN_NEW_TOPIC'			=> '%sGå till den nya tråden%s',
	'RETURN_POST'				=> '%sÅtergå till inlägget%s',
	'RETURN_QUEUE'				=> '%sÅtergå till kön%s',
	'RETURN_REPORTS'			=> '%sÅtergå till rapporterna%s',
 	'RETURN_TOPIC_SIMPLE'		=> '%sÅtergå till tråden%s',

	'SEARCH_POSTS_BY_USER'				=> 'Sök inlägg av',
	'SELECT_ACTION'						=> 'Välj önskad åtgärd',
 	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Välj den kategori som du vill att detta globala anslag ska visas.',
 	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'En eller fler av de valda trådarna är globala anslag. Välj den kategori som du vill att de ska visas.',
 	'SELECT_MERGE'						=> 'Välj för förening',
	'SELECT_TOPICS_FROM'				=> 'Välj trådar från',
	'SELECT_TOPIC'						=> 'Välj tråd',
	'SELECT_USER'						=> 'Välj användare',
	'SORT_ACTION'						=> 'Loggåtgärd',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-adress',
	'SORT_WARNINGS'						=> 'Varningar',
	'SPLIT_AFTER'						=> 'Dela efter valt inlägg',
	'SPLIT_FORUM'						=> 'Kategori för ny tråd',
	'SPLIT_POSTS'						=> 'Dela valda inlägg',
	'SPLIT_SUBJECT'						=> 'Ämne för ny tråd',
	'SPLIT_TOPIC_ALL'					=> 'Dela tråd från valda inlägg',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Är du säker på att du vill dela denna tråd?',
	'SPLIT_TOPIC_BEYOND'				=> 'Dela tråden vid valt inlägg',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Är du säker på att du vill dela inlägget vid den valda tråden?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Genom att använda detta formulär kan du dela en tråd i två, antingen genom att välja inläggen enskilt eller genom att dela vid ett valt inlägg.',

	'THIS_POST_IP'				=> 'IP för detta inlägg',
	'TOPICS_APPROVED_SUCCESS'	=> 'De valda trådarna godkändes.',
	'TOPICS_DELETED_SUCCESS'	=> 'De valda trådarna togs bort från databasen.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'De valda trådarna avslogs.',
	'TOPICS_FORKED_SUCCESS'		=> 'De valda trådarna kopierades.',
	'TOPICS_LOCKED_SUCCESS'		=> 'De valda trådarna låstes.',
	'TOPICS_MOVED_SUCCESS'		=> 'De valda trådarna flyttades.',
	'TOPICS_RESYNC_SUCCESS'		=> 'De valda trådarna synkroniserades.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'De valda trådarna låstes upp.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Den valda tråden godkändes.',
	'TOPIC_DELETED_SUCCESS'		=> 'Den valda tråden togs bort från databasen.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Den valda tråden avslogs.',
	'TOPIC_FORKED_SUCCESS'		=> 'Den valda tråden kopierades.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Den valda tråden låstes.',
	'TOPIC_MOVED_SUCCESS'		=> 'Den valda tråden flyttades.',
	'TOPIC_NOT_EXIST'			=> 'Den valda tråden finns inte.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Den valda tråden synkroniserades.',
	'TOPICS_TYPE_CHANGED'		=> 'Trådtyperna byttes.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Den valda tråden delades.',
	'TOPIC_TIME'				=> 'Trådtid',
	'TOPIC_TYPE_CHANGED'		=> 'Trådtyp ändrades.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Den valda tråden låstes upp.',
	'TOTAL_WARNINGS'			=> 'Totalt antal varningar',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Det finns totalt <strong>%d</strong> inlägg som väntar på godkännande.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Det finns inga inlägg som väntar på godkännande.',
	'UNAPPROVED_POST_TOTAL'			=> 'Det finns totalt <strong>1</strong> inlägg som väntar på godkännande.',
	'UNLOCK'						=> 'Lås upp',
	'UNLOCK_POST'					=> 'Lås upp inlägg',
	'UNLOCK_POST_EXPLAIN'			=> 'Tillåt redigering',
	'UNLOCK_POST_POST'				=> 'Lås upp inlägg',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Är du säker på att du vill tillåta redigering av detta inlägg?',
	'UNLOCK_POST_POSTS'				=> 'Lås upp valda inlägg',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Är du säker på att du vill tillåta redigering av dessa inlägg?',
	'UNLOCK_TOPIC'					=> 'Lås upp tråd',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Är du säker på att du vill låsa upp denna tråd?',
	'UNLOCK_TOPICS'					=> 'Lås upp valda trådar',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Är du säker på att du vill låsa upp alla valda trådar?',
	'USER_CANNOT_POST'				=> 'Du kan inte posta i denna kategori.',
	'USER_CANNOT_REPORT'			=> 'Du kan inte rapportera inlägg i denna kategori.',
	'USER_FEEDBACK_ADDED'			=> 'Användaranteckning lades till.',
	'USER_WARNING_ADDED'			=> 'Användaren varnades.',

	'VIEW_DETAILS'			=> 'Visa detaljer',

	'WARNED_USERS'			=> 'Varnade användare',
	'WARNED_USERS_EXPLAIN'	=> 'Detta är en lista över användare som har varningar utfärdade mot sig.',
	'WARNING_PM_BODY'		=> 'Följande är en varning som har utfärdats mot dig av en administratör eller moderator på detta forum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Varning utfärdad',
	'WARNING_POST_DEFAULT'	=> 'Detta är en varning för följande inlägg: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Inga varningar finns.',

	'YOU_SELECTED_TOPIC'	=> 'Du valde tråd nummer %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Utanför ämnet',
			'OTHER'		=> 'Annat',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Inlägget innehåller länkar till olaglig eller piratkopierad programvara.',
			'SPAM'		=> 'Inlägget innehåller reklam för en annan webbplats eller produkt.',
			'OFF_TOPIC'	=> 'Inlägget håller sig inte till ämnet.',
			'OTHER'		=> 'Inlägget passar inte in i någon av ovanstående kategorier, använd fältet för vidare information.',
		)
	),
));

?>