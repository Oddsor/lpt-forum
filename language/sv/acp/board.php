<?php
/** 
*
* acp_board [Swedish] (version 0.8.0 - 3.0.RC8)
*
* @package language
* @version $Id: board.php,v 1.18 2007/12/01 15:34:08 virtuality Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Här kan du bestämma grundläggande inställningar för ditt forum, ge det ett passande namn och beskrivning, och bland många andra inställningar justera standardvärden för tidszon och språk.',
	'CUSTOM_DATEFORMAT'				=> 'Eget…',
	'DEFAULT_DATE_FORMAT'			=> 'Datumformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Datumformatet är samma som PHPs <code>date</code>-funktion.',
	'DEFAULT_LANGUAGE'				=> 'Standardspråk',
	'DEFAULT_STYLE'					=> 'Standardstil',
	'DISABLE_BOARD'					=> 'Inaktivera forumet',
	'DISABLE_BOARD_EXPLAIN'			=> 'Detta kommer att göra forumet otillgängligt för användarna. Du kan också ange ett kort meddelande (255 tecken) som ska visas om du vill.',
	'OVERRIDE_STYLE'				=> 'Åsidosätt användarstil',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Ersätter användarens stil med standardstilen.',
	'SITE_DESC'						=> 'Webbplatsbeskrivning',
	'SITE_NAME'						=> 'Webbplatsnamn',
	'SYSTEM_DST'					=> 'Aktivera sommartid/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Systemets tidszon',
	'WARNINGS_EXPIRE'				=> 'Varningslängd',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Antal dagar som ska förflyta innan varningen automatiskt förfaller från användarens register.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Här kan du aktivera/inaktivera olika forumfunktioner.',

	'ALLOW_ATTACHMENTS'			=> 'Tillåt bilagor',
	'ALLOW_BIRTHDAYS'			=> 'Tillåt födelsedagar',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Tillåt att födelsedagar fylls i och att en ålder visas i profiler. Kom ihåg att födelsedagslistan på forumindexet kontrolleras via en separat belastningsinställning.',
	'ALLOW_BOOKMARKS'			=> 'Tillåt bokmärkning av trådar',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Användaren kan lagra personliga bokmärken.',
	'ALLOW_BBCODE'				=> 'Tillåt BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Tillåt kategoribevakning',
	'ALLOW_NAME_CHANGE'			=> 'Tillåt byten av användarnamn',
	'ALLOW_NO_CENSORS'			=> 'Tillåt inaktivering av ordcensur',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Användaren kan inaktivera den automatiska ordcensuren av inlägg och personliga meddelanden.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Tillåt bilagor i personliga meddelanden',
	'ALLOW_SIG'					=> 'Tillåt signaturer',
	'ALLOW_SIG_BBCODE'			=> 'Tillåt BBCode i användarsignaturer',
	'ALLOW_SIG_FLASH'			=> 'Tillåt användning av <code>[FLASH]</code>-BBCodetaggen i användarsignaturer',
	'ALLOW_SIG_IMG'				=> 'Tillåt användning av <code>[IMG]</code>-BBCodetaggen i användarsignaturer',
	'ALLOW_SIG_LINKS'			=> 'Tillåt användning av länkar i användarsignaturer',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Om otillåtet så kommer <code>[URL]</code>-BBCodetaggen och automatiska/magiska URL:er inaktiveras.',
	'ALLOW_SIG_SMILIES'			=> 'Tillåt användning av smilies i signaturer',
	'ALLOW_SMILIES'				=> 'Tillåt smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Tillåt trådbevakning',
	'BOARD_PM'					=> 'Personliga meddelanden',
	'BOARD_PM_EXPLAIN'			=> 'Aktivera eller inaktivera personliga meddelanden för alla användare.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Visningsbilder är i allmänhet små, unika bilder en användare kan förknippa sig med. Beroende på stilen så visas de under användarnamnet i trådar. Här kan du bestämma hur användare kan definiera sina visningsbilder. Observera att för att ladda upp visningsbilder så måste du ha skapat katalogen du anger nedan och försäkra dig om att den kan skrivas till av webbservern. Kom också ihåg att filstorleksgränser endast beläggs på uppladdade visningsbilder, inte på fjärrlänkade bilder.',

	'ALLOW_LOCAL'					=> 'Aktivera gallerivisningsbilder',
	'ALLOW_REMOTE'					=> 'Aktivera fjärrvisningsbilder',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Visningsbilder som länkas till på en annan webbplats.',
	'ALLOW_UPLOAD'					=> 'Aktivera uppladdning av visningsbilder',
	'AVATAR_GALLERY_PATH'			=> 'Sökväg till visningsbildsgalleri',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Sökväg till visningsbilder',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximala visningsbildsdimensioner',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Bredd x höjd i pixlar.',
	'MAX_FILESIZE'					=> 'Maximal filstorlek för visningsbilder',
	'MAX_FILESIZE_EXPLAIN'			=> 'För uppladdade visningsbilder.',
	'MIN_AVATAR_SIZE'				=> 'Minsta visningsbildsdimensioner',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Bredd x höjd i pixlar.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Här kan du ställa in alla standardinställningar för personliga meddelanden.',

	'ALLOW_BBCODE_PM'			=> 'Tillåt BBCode i personliga meddelanden',
	'ALLOW_FLASH_PM'			=> 'Tillåt användning av <code>[FLASH]</code>-BBCodetaggen',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Observera att möjligheten att använda Flash i personliga meddelanden, om det aktiveras här, också beror på rättigheter.',
	'ALLOW_FORWARD_PM'			=> 'Tillåt vidarebefordring av personliga meddelanden',
	'ALLOW_IMG_PM'				=> 'Tillåt användning av <code>[IMG]</code>-BBCodetaggen',
	'ALLOW_MASS_PM'				=> 'Tillåt att personliga meddelanden skickas till flera användare och grupper samtidigt',
	'ALLOW_PRINT_PM'			=> 'Tillåt utskriftsvänliga versioner av personliga meddelanden',
	'ALLOW_QUOTE_PM'			=> 'Tillåt citat i personliga meddelanden',
	'ALLOW_SIG_PM'				=> 'Tillåt signaturer i personliga meddelanden',
	'ALLOW_SMILIES_PM'			=> 'Tillåt smilies i personliga meddelanden',
	'BOXES_LIMIT'				=> 'Maximalt antal personliga meddelanden per mapp',
	'BOXES_LIMIT_EXPLAIN'		=> 'Användare får ta emot upp till så här många meddelanden i varje mapp. Sätt detta värde till 0 för att tillåta obegränsat med personliga meddelanden.',
	'BOXES_MAX'					=> 'Maximalt antal personliga meddelandemappar',
	'BOXES_MAX_EXPLAIN'			=> 'Som standard kan användare skapa så här många personliga mappar för personliga meddelanden.',
	'ENABLE_PM_ICONS'			=> 'Aktivera användning av trådikoner i personliga meddelanden',
	'FULL_FOLDER_ACTION'		=> 'Standardåtgärd vid full mapp',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Standardåtgärd att utföra om en användares mapp är full om inte användarens åtgärd vid full mapp kan användas eller är inställd. Det enda undantaget är för "Skickat"-mappen där standardåtgärden alltid är att ta bort gamla meddelanden.',
	'HOLD_NEW_MESSAGES'			=> 'Håll tillbaka nya meddelanden',
	'PM_EDIT_TIME'				=> 'Begränsa redigeringstid',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Begränsar efter hur många minuter som det går att redigera ett personligt meddelande som inte levererats än. Sätt till 0 för att inaktivera detta beteende.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Här kan du ställa in all standardinställningar för inlägg.',
	'ALLOW_POST_LINKS'					=> 'Tillåt länkar i inlägg/personliga meddelanden',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Om inaktiverat så kommer <code>[URL]</code>-BBCodetaggen och automatiska/magiska URL:er att inaktiveras.',
	'ALLOW_POST_FLASH'					=> 'Tillåt användning av <code>[FLASH]</code>-BBCodetaggen i inlägg',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Om inaktiverat så kommer <code>[FLASH]</code>-BBCodetaggen inaktiveras i inlägg. Annars kontrollerar rättighetssystemet vilka användare som kan använda <code>[FLASH]</code>-BBCodetaggen.',

	'BUMP_INTERVAL'					=> 'Knuffningsintervall',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Antal minuter, timmar eller dagar mellan det senaste inlägget i en tråd tills det går att knuffa upp den.',
	'CHAR_LIMIT'					=> 'Maximalt antal tecken per inlägg',
	'CHAR_LIMIT_EXPLAIN'			=> 'Det maximala antalet tecken som tillåts för ett inlägg. Sätt till 0 för obegränsat med tecken.',
	'DISPLAY_LAST_EDITED'			=> 'Visa senast redigerad av-information',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Välj om senast redigerad av-informationen ska visas i inlägg.',
	'EDIT_TIME'						=> 'Begränsa redigeringstid',
	'EDIT_TIME_EXPLAIN'				=> 'Begränsar tiden som det går att redigera ett nytt inlägg. Sätt till 0 för att inaktivera detta beteende.',
	'FLOOD_INTERVAL'				=> 'Tid mellan inlägg',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Antal sekunder en användare måste vänta mellan nya meddelanden. För att låta användare ignorera detta, ändra deras rättigheter.',
	'HOT_THRESHOLD'					=> 'Tröskel för populär tråd',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Tröskel för antal inlägg per tråd för att tråden ska bli en populär tråd. Sätt till 0 för att inaktivera populära trådar.',
	'MAX_POLL_OPTIONS'				=> 'Maximalt antal omröstningsalternativ',
	'MAX_POST_FONT_SIZE'			=> 'Maximal textstorlek per inlägg',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Den största textstorleken som tillåts i ett inlägg. Sätt till 0 för obegränsad textstorlek.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximal bildhöjd per inlägg',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximal höjd på bilder/Flashfiler i inlägg. Sätt till 0 för obegränsad höjd.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximal bildbredd per inlägg',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximal bredd på bilder/Flashfiler i inlägg. Sätt till 0 för obegränsad bredd.',
	'MAX_POST_URLS'					=> 'Maximalt antal länkar per inlägg',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximalt antal URL:er i ett inlägg. Sätt till 0 för obegränsat antal länkar.',
	'POSTING'						=> 'Inlägg',
	'POSTS_PER_PAGE'				=> 'Inlägg per sida',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximalt antal nästlade citat per inlägg',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximalt antal nästlade citat i ett inlägg. Sätt till 0 för obegränsat djup.',
	'SMILIES_LIMIT'					=> 'Maximalt antal smilies per inlägg',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximalt antal smilies i ett inlägg. Sätt till 0 för obegränsat antal smilies.',
	'TOPICS_PER_PAGE'				=> 'Trådar per sida',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Här kan du ställa in alla standardinställningar för signaturer.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximal teckenstorlek i signaturer',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Den största teckenstorlek som tillåts i användares signaturer. Sätt till 0 för obegränsad storlek.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximal bildhöjd i signaturer',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximal höjd på bilder/Flashfiler i användares signaturer. Sätt till 0 för obegränsad höjd.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximal bildbredd i signaturer',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximal bredd på bilder/Flashfiler i användares signaturer. Sätt till 0 för obegränsad bredd.',
	'MAX_SIG_LENGTH'				=> 'Maximal signaturlängd',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximalt antal tecken i användares signaturer.',
	'MAX_SIG_SMILIES'				=> 'Maximalt antal smilies per signatur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximalt antal smilies tillåtet i användares signaturer. Sätt till 0 för obegränsat antal smilies.',
	'MAX_SIG_URLS'					=> 'Maximalt antal länkar i signatur',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximalt antal länkar i användares signaturer. Sätt till 0 för obegränsat antal länkar.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Här kan du ställa in registrerings- och profilrelaterade inställningar.',

	'ACC_ACTIVATION'			=> 'Kontoaktivering',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Detta avgör om användare har omedelbar åtkomst till forumet eller om verifiering krävs. Du kan också inaktivera nya registreringar helt.',
	'ACC_ADMIN'					=> 'Av administratör',
	'ACC_DISABLE'				=> 'Inaktivera',
	'ACC_NONE'					=> 'Ingen',
	'ACC_USER'					=> 'Av användaren',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Tillåt återanvändning av e-postadresser',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Olika användare kan registrera sig med samma e-postadress.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA faxnummer',
	'COPPA_MAIL'				=> 'COPPA postadress',
	'COPPA_MAIL_EXPLAIN'		=> 'Detta är postadressen dit föräldrar skickar COPPA registreringsformulär.',
	'ENABLE_COPPA'				=> 'Aktivera COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Detta kräver att användare uppger om de är 13 eller äldre för uppfyllelse av U.S. COPPA-lagen. Om detta är inaktiverat kommer inte de COPPA-specifika grupperna att visas.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'MIN_TIME_REG'				=> 'Minsta tid för registrering',
	'MIN_TIME_REG_EXPLAIN'		=> 'Registreringsforumläret kan inte skickas in innan denna tid har passerat.',
	'MIN_TIME_TERMS'			=> 'Minsta tid för att acceptera villkor',
	'MIN_TIME_TERMS_EXPLAIN'	=> 'Villkorssidan kan inte lämnas innan denna tid har passerat.',
	'NO_AUTH_PLUGIN'			=> 'Inget lämplig autentiseringsinsticksprogram hittades.',
	'PASSWORD_LENGTH'			=> 'Lösenordslängd',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minsta och maximala antalet tecken i lösenord.',
	'REG_LIMIT'					=> 'Registreringsförsök',
	'REG_LIMIT_EXPLAIN'			=> 'Antal försök användare kan göra med verifieringskoden innan de låses ute för den sessionen.',
	'USERNAME_ALPHA_ONLY'		=> 'Endast alfanumeriska',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumeriska och mellanrum',
	'USERNAME_ASCII'			=> 'ASCII (ingen internationell unicode)',
	'USERNAME_LETTER_NUM'		=> 'Alla tecken och siffror',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Alla tecken, siffror och mellanrum',
	'USERNAME_CHARS'			=> 'Begränsa tecken i användarnamn',
	'USERNAME_CHARS_ANY'		=> 'Alla tecken',
	'USERNAME_CHARS_EXPLAIN'	=> 'Begränsa vilka tecken som får användas i användarnamn, till mellanrum räknas: mellanslag, -, +, _, [ och ].',
	'USERNAME_LENGTH'			=> 'Användarnamnslängd',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minsta och maximala antalet tecken i användarnamn.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Här kan du ställa in inställningar för visuell bekräftelse och <abbr title="Completely Automated Public Turing-test to tell Computers and Humans Apart">CAPTCHA</abbr>.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA förgrundsbrus',
	'CAPTCHA_GD_EXPLAIN'					=> 'Använd GD för att skapa en mer avancerad CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Använd förgrundsbrus för att göra den GD-baserade CAPTCHAn svårare.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA bakgrundsbrus x-axel',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Använd lägre inställningar på detta för att göra den GD-baserade CAPTCHAn svårare. 0 inaktiverar bakgrundsbrus för x-axeln.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA bakgrundsbrus y-axel',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Använd lägre inställningar på detta för att göra den GD-baserade CAPTCHAn svårare. 0 inaktiverar bakgrundsbrus för y-axeln.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Dina ändringar av inställningarna för visuell bekräftelse sparades inte. Detta är endast en förhandsgranskning.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHAn som den kommer se ut med de nuvarande inställningarna. Använd förhandsgranskningsknappen för att uppdatera. Observera att CAPTCHAs slumpas fram och kommer variera för varje visning.',
	'VISUAL_CONFIRM_POST'					=> 'Aktivera visuell bekräftelse för inlägg gjorda av gäster',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Kräver att anonyma användare skriver in en slumpmässig kod matchande en bild för att förhindra skräpinlägg.',
	'VISUAL_CONFIRM_REG'					=> 'Aktivera visuell bekräftelse för registreringar',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Kräver att nya användare skriver in en slumpmässig kod matchande en bild för att förhindra massregistreringar.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Dessa inställningar bestämmer hur cookies skickas till dina användares webbläsare. I de flesta fall är standardvärdena för cookieinställningar tillräckliga. Om du  måste ändra något här gör så med försiktighet, felaktiga inställningar kan förhindra användare från att logga in.',

	'COOKIE_DOMAIN'				=> 'Domän för cookie',
	'COOKIE_NAME'				=> 'Namn på cookie',
	'COOKIE_PATH'				=> 'Sökväg för cookie',
	'COOKIE_SECURE'				=> 'Cookiesäkerhet',
	'COOKIE_SECURE_EXPLAIN'		=> 'Om din server körs via SSL kan du aktivera detta, låt det annars vara inaktiverat. Om du aktiverar detta och din server inte körs via SSL kommer fel att uppstå vid omdirigeringar.',
	'ONLINE_LENGTH'				=> 'Visa som online tidsspann',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Antal minuter som ska gå tills inaktiva användare inte längre visas i “Vilka är online”-listorna. Ju högre detta värde är desto mer databehandling krävs för att skapa listorna.',
	'SESSION_LENGTH'			=> 'Sessionslängd',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessioner kommer att förfalla efter denna tid, i sekunder.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Här kan du aktivera och inaktivera vissa forumfunktioner för att minska mängden databehandling som krävs. På de flesta servrar så är det inte nödvändigt att inaktivera någon av dessa funktioner. På vissa system eller i delade webbhotellsmiljöer kan det vara bra att inaktivera funktioner som du inte behöver. Du kan också ange gränser för systembelastning och aktiva sessioner som när de överträds så kommer forumet att gå offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Egna profilfält',
	'LIMIT_LOAD'					=> 'Gräns för systembelastning',
	'LIMIT_LOAD_EXPLAIN'			=> 'Om systemets 1-minutsbelastning överskrider detta värde så kommer forumet automatiskt att gå offline. Ett värde av 1.0 är lika med ~100% användning av en processor. Detta fungerar endast på UNIX-baserade servrar där informationen finns tillgänglig. Värdet kommer här att återställa sig själv till 0 om phpBB inte kunde hitta serverbelastningen.',
	'LIMIT_SESSIONS'				=> 'Gräns för antal sessioner',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Om antalet sessioner överskrider detta värde under en minut så kommer forumet att gå offline. Sätt till 0 för obegränsat antal sessioner.',
	'LOAD_CPF_MEMBERLIST'			=> 'Tillåt att stilar visar egna profilfält i medlemslistan',
	'LOAD_CPF_VIEWPROFILE'			=> 'Visa egna profilfält i användarprofiler',
	'LOAD_CPF_VIEWTOPIC'			=> 'Visa egna profilfält i trådar',
	'LOAD_USER_ACTIVITY'			=> 'Visa användares aktivitet',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Visar aktiv tråd/kategori i användarprofiler och i kontrollpanelen. Det är rekommenderat att detta inaktiveras på forum med mer än en miljon inlägg.',
 	'RECOMPILE_STYLES'			=> 'Omkompilera gamla stilkomponenter',
 	'RECOMPILE_STYLES_EXPLAIN'	=> 'Kolla efter uppdaterade stilkomponenter på filsystemet och omkompilera.',
	'YES_ANON_READ_MARKING'			=> 'Aktivera trådmärkning för gäster',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Lagrar läst/oläststatus för gäster. Om inaktiverat är inlägg alltid lästa för gäster.',
	'YES_BIRTHDAYS'					=> 'Aktivera visning av födelsedagar',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Om inaktiverat så kommer inte födelsedagslistan att visas längre. För att denna inställning ska fungera så måste även födelsedagsfunktionen vara aktiverad.',
	'YES_JUMPBOX'					=> 'Aktivera visning av hopprutan',
	'YES_MODERATORS'				=> 'Aktivera visning av moderatorer',
	'YES_ONLINE'					=> 'Aktivera visning av användare som är online',
	'YES_ONLINE_EXPLAIN'			=> 'Visar information om vilka användare som är online på indexet, i kategorier och i trådsidor.',
	'YES_ONLINE_GUESTS'				=> 'Aktivera visning av gäster som är online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Tillåter visning av gästinformation i “Vilka är online”.',
	'YES_ONLINE_TRACK'				=> 'Aktivera visning av användares online/offline information',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Visas onlineinformation för användare i profiler och i trådar.',
	'YES_POST_MARKING'				=> 'Aktivera prickade trådar',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indikerar om en användare har postat i en tråd.',
	'YES_READ_MARKING'				=> 'Aktivera trådmärkning på servern',
	'YES_READ_MARKING_EXPLAIN'		=> 'Lagrar läst/oläststatus i databasen istället för i en cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB stödjer autentiseringsinsticksprogram, eller moduler. Detta låter dig bestämma hur användarna autentiseras när de loggar in på forumet. Som standard finns tre insticksprogram tillgängliga; DB, LDAP och Apache. Inte alla metoder kräver ytterligare information så fyll endast i fält som är relevanta för den valda metoden.',

	'AUTH_METHOD'				=> 'Välj en autentiseringsmetod',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du måste ställa in apache autentisering innan du kan ändra phpBB till denna autentiseringsmetod. Kom ihåg att användarnamnet som du använder för apacheautentiseringen måste vara samma som ditt phpBB-användarnamn. Apacheautentisering kan endast användas med mod_php (inte med CGI versionen) och med safe_mode inaktiverat.',

	'LDAP_DN'						=> 'LDAP bas <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Detta är “Distinguished Name”, används för att lokalisera användarinformationen, t.ex. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-postattribut',
	'LDAP_EMAIL_EXPLAIN'			=> 'Sätt detta till namnet of din användare-postattributpost (om en sådant finns) för att automatiskt ställa in e-postadress för nya användare. Om du lämnar detta tomt så kommer resultera i tomma e-postadresser för användare som loggar in första gången.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Bindning till LDAP-servern misslyckades med det angivna användarnamnet/lösenordet.',
	'LDAP_NO_EMAIL'					=> 'Det angivna e-postattributet finns inte.',
	'LDAP_NO_IDENTITY'				=> 'Kunde inte hitta inloggningsidentitet för %s.',
	'LDAP_PASSWORD'					=> 'LDAP-lösenord',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lämna tomt för att använda anonym åtkomst. Fyll annars i lösenordet för ovanstående användare. Krävs för Active Directory-servrar. <strong>VARNING:</strong> Detta lösenord kommer att sparas som vanlig text i databasen, synligt för alla som kan komma åt din databas eller som kan visa denna konfigurationssida.',
	'LDAP_PORT'						=> 'LDAP-serverport',
	'LDAP_PORT_EXPLAIN'				=> 'Om du vill kan du ange en port som ska användas för att ansluta till LDAP-servern istället för standardporten 389.',
	'LDAP_SERVER'					=> 'LDAP-servernamn',
	'LDAP_SERVER_EXPLAIN'			=> 'Om LDAP används är detta värdnamnet eller IP-adressen för LDAP-servern. Alternativt kan du ange en URL så som ldap://värdnamn:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Detta är nyckeln där en given inloggningsidentitet ska sökas efter, t.ex. <var>uid</var>, <var>sn</var>, osv.',
	'LDAP_USER'						=> 'LDAP-användare <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lämna tomt för att använda anonym åtkomst. Om ifyllt så kommer phpBB använda det angivna “Distinguished Name” vid inloggningsförsök för att hitta den korrekta användaren, t.ex. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Krävs för Active Directory-servrar.',
	'LDAP_USER_FILTER'				=> 'LDAP-användarfilter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Om du vill kan du vidare begränsa antalet sökta objekt med ytterligare filter. Till exempel <samp>objectClass=posixGroup</samp> kommer att resultera i användningen av <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Här kan du ställa in server- och domäninställningar. Försäkra dig om att informationen du anger är korrekt, fel kommer att resultera i e-postmeddelanden med felaktig information. När du anger domännamnet kom ihåg att det ska inkludera http:// eller annat protokoll. Ändra endast portnumret om du vet att din server använder ett annat värde, port 80 är korrekt i de flesta fall.',

	'ENABLE_GZIP'				=> 'Aktivera GZip-komprimering',
	'ENABLE_GZIP_EXPLAIN'		=> 'Genererat innehåll kommer att komprimeras innan det skickas till användaren om dennes webbläsare stödjer det. Detta kan minska nätverkstrafik men kommer också öka CPU-användning både på server- och klientsidan.',
	'FORCE_SERVER_VARS'			=> 'Påtvinga URL-inställningar',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Om satt till ja så kommer serverinställningarna som anges här att användas istället för de automatiskt fastställda värdena.',
	'ICONS_PATH'				=> 'Sökväg till postikoner',
	'ICONS_PATH_EXPLAIN'		=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Sökvägsinställningar',
	'RANKS_PATH'				=> 'Sökväg till titelbilder',
	'RANKS_PATH_EXPLAIN'		=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Skriptsökväg',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sökvägen där phpBB finns relativt till domännamnet, t.ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domännamn',
	'SERVER_NAME_EXPLAIN'		=> 'Domännamnet som detta forum körs på (t.ex. <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Serverport',
	'SERVER_PORT_EXPLAIN'		=> 'Porten som din server körs på, oftast 80, ändra endast om annan.',
	'SERVER_PROTOCOL'			=> 'Serverprotokoll',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Detta används som serverprotokoll om dessa inställningar är påtvingade. Om tom eller inte påtvingad så kommer protokollet avgöras av inställningarna för cookiesäkerhet (<samp>http://</samp> eller <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'URL-inställningar för servern',
	'SMILIES_PATH'				=> 'Sökväg till smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Sökväg till filtypsgruppikoner',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Sökväg under din phpBB-rotkatalog, t.ex. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Här kan du ställa in sessions- och inloggningsrelaterade inställningar.',

	'ALL'							=> 'Alla',
	'ALLOW_AUTOLOGIN'				=> 'Tillåt bestående inloggningar', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Avgör om användare kan loggas in automatiskt när de besöker forumet eller inte.', 
	'AUTOLOGIN_LENGTH'				=> 'Förfallotid för bestående inloggningsnycklar (i dagar)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Antal dagar som ska gå innan bestående inloggningsnycklar tas bort. Sätt till 0 för att inaktivera.', 
	'BROWSER_VALID'					=> 'Kontrollera webbläsare',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktiverar webbläsekontroll för varje session. Förbättrar säkerheten.',
	'CHECK_DNSBL'					=> 'Kontrollera IP mot “DNS Blackhole”-lista',
	'CHECK_DNSBL_EXPLAIN'			=> 'Om aktiverat kommer användarens IP-adress kontrolleras mot följande DNSBL-tjänster vid registrering och nya inlägg: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> och <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Denna kontroll kan ta ett tag beroende på serverns konfiguration. Om servern saktar ner eller för många felaktiga resultat rapporteras så är det rekommenderat att stänga av denna kontroll.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontrollera e-postdomän efter giltig MX-post',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Om aktiverat så kommer e-postdomänen som anges under registreringen och vid profiländringar att kontrolleras efter en giltig MX-post.',
	'FORCE_PASS_CHANGE'				=> 'Påtvinga lösenordsbyte',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Tvingar användare att byta lösenord efter ett visst antal dagar. Sätt till 0 för att inaktivera denna funktion.',
	'FORM_TIME_MAX'					=> 'Maximal tid för att skicka in formulär',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Den tid som en användare har på sig för att skicka in ett formulär. Sätt till -1 för att inaktivera. Observera att ett forumlär kan bli ogiltigt om en session förfaller, oavsett denna inställning.',
	'FORM_TIME_MIN'					=> 'Minsta tid för att skicka in formulär',
	'FORM_TIME_MIN_EXPLAIN'			=> 'Formulär som skickas in snabbare än så här kommer att ignoreras av forumet. Sätt till 0 för att inaktivera.',
	'FORM_SID_GUESTS'				=> 'Bind formulär till gästsessioner',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Om aktiverat så kommer den formulärtoken som tilldelas gäster att vara sessions-exklusiv. Detta kan medföra problem med vissa internetleverantörer.',
	'FORWARDED_FOR_VALID'			=> 'Kontrollera <var>X_FORWARDED_FOR</var> huvudet',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessioner kommer endast fortsätta om det skickade <var>X_FORWARDED_FOR</var> huvudet är samma som det i tidigare begäran. Bannlysningar kommer också att kontrolleras mot IP-adresser i <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Kontroll av sessions-IP',
	'IP_VALID_EXPLAIN'				=> 'Avgör hur mycket av användarens IP som används för att kontrollera en session; <samp>Alla</samp> jämför hela adressen, <samp>A.B.C</samp> de första x.x.x, <samp>A.B</samp> de första x.x, <samp>Ingen</samp> inaktiverar kontroll. För IPv6 adresser jämför <samp>A.B.C</samp> de första 4 blocken och <samp>A.B</samp> de 3 första blocken.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximalt antal inloggningsförsök',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Efter detta antal misslyckade inloggningsförsök så måste användaren bekräfta sin inloggning med visuell bekräftelse.',
	'NO_IP_VALIDATION'				=> 'Ingen',
	'PASSWORD_TYPE'					=> 'Lösenordskomplexitet',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Avgör hur komplext ett lösenord måste göra när det väljs eller ändras, påföljande alternativ inkluderar de tidigare.',
	'PASS_TYPE_ALPHA'				=> 'Måste innehålla bokstäver och siffror',
	'PASS_TYPE_ANY'					=> 'Inga krav',
	'PASS_TYPE_CASE'				=> 'Måste innehålla både små och stora bokstäver',
	'PASS_TYPE_SYMBOL'				=> 'Måste innehålla symboler',
	'TPL_ALLOW_PHP'					=> 'Tillåt php i mallar',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Om detta alternativ är aktiverat så kommer <code>PHP</code> och <code>INCLUDEPHP</code> att tolkas i mallar.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Denna information används när forumet skickat ut e-postmeddelanden till dina användare. Försäkra dig om att e-postadressen du anger är giltig, all e-post som inte kommer fram kommer förmodligen skickas till denna adress. Om ditt webbhotell inte har någon inhemsk (PHP-baserad) e-posttjänst så kan du skicka meddelanden direkt via SMTP. Detta kräver adressen till en lämplig server (fråga din leverantör om så krävs). Om servern kräver autentisering (och endast om den gör det) ange det användarnamn och lösenord som krävs.',

	'ADMIN_EMAIL'					=> 'Reture-postadress',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Detta kommer att användas som returadressen på alla e-postmeddelanden och som den tekniska kontakte-postadressen. Den kommer alltid att användas som <samp>Return-Path</samp> och <samp>Sender</samp> adress i e-postmeddelanden.',
	'BOARD_EMAIL_FORM'				=> 'Användare skickar e-post via forumet',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Istället för att visa användarnas e-postadresser så skickar användarna e-post till varandra via forumet.',
	'BOARD_HIDE_EMAILS'				=> 'Dölj e-postadresser',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Denna funktion håller alla e-postadresser fullständigt privata.',
	'CONTACT_EMAIL'					=> 'Kontakte-postadress',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Denna adress kommer användas när en specifik kontaktpunkt behövs, t.ex. spam, felmeddelanden, osv. Den kommer alltid att användas som <samp>From</samp> och <samp>Reply-To</samp> adress i e-postmeddelanden.',
	'EMAIL_FUNCTION_NAME'			=> 'E-postfunktionsnamn',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'E-postfunktionen som ska användas för att skicka e-post genom PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Paketstorlek för e-post',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Detta är det maximala antalet e-postmeddelanden som skickas i ett paket. Denna inställning tillämpas på den interna meddelandekön; sätt detta värde till 0 om du har problem med e-postmeddelanden som inte kommer fram.',
	'EMAIL_SIG'						=> 'E-postsignatur',
	'EMAIL_SIG_EXPLAIN'				=> 'Denna text kommer infogas i slutet på alla e-postmeddelanden som forumet skickar ut.',
	'ENABLE_EMAIL'					=> 'Aktivera forume-post',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Om detta inaktiveras så kommer forumet inte att skicka ut några e-postmeddelanden över huvud taget.',
	'SMTP_AUTH_METHOD'				=> 'Autentiseringsmetod för SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Används endast om ett användarnamn/lösenord är inställt, fråga din leverantör om du är osäker på vilken metod du ska använda.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP lösenord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Ange endast ett lösenord om din SMTP-server kräver det.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverport',
	'SMTP_PORT_EXPLAIN'				=> 'Ändra endast detta om du vet att din SMTP-server opererar på en annan port.',
	'SMTP_SERVER'					=> 'SMTP-serveradress',
	'SMTP_SETTINGS'					=> 'SMTP-inställningar',
	'SMTP_USERNAME'					=> 'SMTP-användarnamn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Ange endast ett användarnamn om din SMTP-server kräver det.',
	'USE_SMTP'						=> 'Använd SMTP-server för e-post',
	'USE_SMTP_EXPLAIN'				=> 'Välj “Ja” om du vill eller måste skicka e-post via en namngiven server istället för via den lokala e-postfunktionen.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Här kan du aktivera och kontrollera användningen av Jabber för snabbmeddelanden och forumunderrättningar. Jabber är ett protokoll med öppen källkod och kan därför användas av vem som helst. Vissa Jabberservrar inkluderar gateways eller transporter som låter dig kontakta användare på andra nätverk. Inte alla servrar stödjer alla transporter och ändringar i protokoll kan förhindra transporter från att fungera. Observera att det kan ta flera sekunder att uppdatera Jabberkontodetaljer, så stoppa inte skriptet förrän det körts färdigt!',

	'JAB_ENABLE'				=> 'Aktivera Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Aktiverar användning av Jabbermeddelanden och underrättningar.',
	'JAB_GTALK_NOTE'			=> 'Observera att GTalk inte kommer att fungera eftersom att <samp>dns_get_record</samp>-funktionen inte hittades. Denna funktion finns inte i PHP4 och är inte implementerad på Windowsplattformer, inte heller fungerar den (för närvarande) på *BSD-system.',
	'JAB_PACKAGE_SIZE'			=> 'Jabberpaketstorlek',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Detta är det antal meddelanden som ska skickas i ett paket. Om satt till 0 så skickas meddelandet omedelbart och ställs inte på kö för senare sändning.',
	'JAB_PASSWORD'				=> 'Jabberlösenord',
	'JAB_PORT'					=> 'Jabberport',
	'JAB_PORT_EXPLAIN'			=> 'Lämna tomt om du inte vet att det inte är port 5222.',
	'JAB_SERVER'				=> 'Jabberserver',
	'JAB_SERVER_EXPLAIN'		=> 'Besök %sjabber.org%s för en lista med servrar.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabberinställningar ändrades.',
 	'JAB_USE_SSL'				=> 'Använd SSL för att ansluta',
 	'JAB_USE_SSL_EXPLAIN'		=> 'Om aktiverat så kommer en säker anslutning att försöka skapas. Jabberporten kommer att ändras till 5223 om port 5222 är angiven.',
	'JAB_USERNAME'				=> 'Jabberanvändarnamn',
	'JAB_USERNAME_EXPLAIN'		=> 'Ange ett registrerat användarnamn. Användarnamnet kommer inte att kontrolleras.',
));

?>