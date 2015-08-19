<?php
/**
*
* acp_board.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-08-28 - phpBB.no
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

// Board Settings
$lang = array_merge($lang, array(
  'ACP_BOARD_SETTINGS_EXPLAIN'  => 'Her kan du bestemme en rekke viktige standard innstillinger. Ditt forums navn og beskrivelsen av det, og også innstillingene for tidszone, språk m.v.',
  'CUSTOM_DATEFORMAT'        => 'Brukerdefinert...',
  'DEFAULT_DATE_FORMAT'      => 'Dato format',
  'DEFAULT_DATE_FORMAT_EXPLAIN'  => 'Datoformatet er det samme som PHPs <code>date</code>-funksjon.',
  'DEFAULT_LANGUAGE'        => 'Standard språk',
  'DEFAULT_STYLE'          => 'Standard forumdesign',
  'DISABLE_BOARD'          => 'Slå forumet av',
  'DISABLE_BOARD_EXPLAIN'      => 'Dette vil sette forumet offline for brukere. Du kan velge å taste inn en kort beskjed som vises i stedet (maksimalt 255 tegn).',
  'OVERRIDE_STYLE'        => 'Overskriv brukernes forumdesign',
  'OVERRIDE_STYLE_EXPLAIN'    => 'Erstatter brukernes forumdesign med standard forumdesign.',
  'SITE_DESC'            => 'Forum beskrivelse',
  'SITE_NAME'            => 'Forum navn',
  'SYSTEM_DST'          => 'Slå sommertid/<abbr title="Daylight Saving Time">DST</abbr> på',
  'SYSTEM_TIMEZONE'        => 'Tidszone for forumet',
  'WARNINGS_EXPIRE'        => 'Varighet for advarsel',
  'WARNINGS_EXPIRE_EXPLAIN'    => 'Antall dager fra en advarsel gis, til den fjernes fra brukerens profildata.',
));

// Board Features
$lang = array_merge($lang, array(
  'ACP_BOARD_FEATURES_EXPLAIN'  => 'Her kan du aktivere/deaktivere flere av forumets funksjoner.',

  'ALLOW_ATTACHMENTS'      => 'Tillat vedlegg',
  'ALLOW_BIRTHDAYS'      => 'Tillat bursdag',
  'ALLOW_BIRTHDAYS_EXPLAIN'  => 'Tillat visning av fødseldato og alder kan vises i brukerprofilen. Vær oppmerksom på at visning av bursdagsdagslisten nederst på forumets hovedside kontrolleres av en egen innstilling under Serverkonfigurasjon/Belastningsinnstillinger.',
  'ALLOW_BOOKMARKS'      => 'Tillat bokmerker på emner',
  'ALLOW_BOOKMARKS_EXPLAIN'  => 'Brukere kan lagre personlige bokmerker.',
  'ALLOW_BBCODE'        => 'Tillat BBCode',
  'ALLOW_FORUM_NOTIFY'    => 'Tillat forum overvåkning',
  'ALLOW_NAME_CHANGE'      => 'Tillat endring av brukernavn',
  'ALLOW_NO_CENSORS'      => 'Tillat deaktivering av ordsensur',
  'ALLOW_NO_CENSORS_EXPLAIN'  => 'Brukere kan velge å slå av ordsensur  i innlegg og private meldinger.',
  'ALLOW_PM_ATTACHMENTS'    => 'Tillat vedlegg i private meldinger',
  'ALLOW_SIG'          => 'Tillat signatur',
  'ALLOW_SIG_BBCODE'      => 'Tillat BBCode i bruker signaturer',
  'ALLOW_SIG_FLASH'      => 'Tillat bruk av BBkode-tag\'en <code>[FLASH]</code> i brukersignaturer',
  'ALLOW_SIG_IMG'        => 'Tillat bruk av BBkode-tag\'en <code>[IMG]</code>  i brukersignaturer',
  'ALLOW_SIG_LINKS'      => 'Tillat bruk av linker i brukersignaturer',
  'ALLOW_SIG_LINKS_EXPLAIN'  => 'Hvis bruken av BBkode-tag\'en <code>[URL]</code> forbys, avbrytes samtidig automatiske (magiske) URL\'er.',
  'ALLOW_SIG_SMILIES'      => 'Tillat bruk av smilies i brukersignaturer',
  'ALLOW_SMILIES'        => 'Tillat smilies',
  'ALLOW_TOPIC_NOTIFY'    => 'Tillat emneovervåkning',
  'BOARD_PM'          => 'Tillat private meldinger',
  'BOARD_PM_EXPLAIN'      => 'Aktivere eller deaktivere private meldinger for alle brukere.',
));

// Avatar Settings
$lang = array_merge($lang, array(
  'ACP_AVATAR_SETTINGS_EXPLAIN'  => 'Avatar er generelt små bilder en bruker kan knytte til sin profil. Avhenger av forumets forumdesign, vises disse oftest like under brukernavnet når man leser et innlegg. Herfra styrer du hvordan brukerne kan definere deres avatar. Vær oppmerksom på at for å kunne laste opp avatar, skal du på forhånd ha opprettet en angitte mappe og sikre deg at det kan skrives til fra serveren. Vær oppmerksom på at også begrensninger for filstørrelse kun brukes på opplastede avatarer, da disse  ikke gjelder for eksternt linkede bilder.',

  'ALLOW_LOCAL'          => 'Slå galleriavatars på',
  'ALLOW_REMOTE'          => 'Tillat ekstern avatare',
  'ALLOW_REMOTE_EXPLAIN'      => 'Avatarer plassert på en annen hjemmeside, hvor det kan linkes til.',
  'ALLOW_UPLOAD'          => 'Tillat opplasting av avatar',
  'AVATAR_GALLERY_PATH'      => 'Avatargallerimappens plassering',
  'AVATAR_GALLERY_PATH_EXPLAIN'  => 'Sti til din phpBB-rotmappe for forhåndsopplastede avatarer, f.eks. <samp>images/avatars/gallery</samp>.',
  'AVATAR_STORAGE_PATH'      => 'Avatarmappens plassering',
  'AVATAR_STORAGE_PATH_EXPLAIN'  => 'Sti til din phpBB-rotmappe, f.eks. <samp>images/avatars/upload</samp>.',
  'MAX_AVATAR_SIZE'        => 'Største dimensioner for avatar',
  'MAX_AVATAR_SIZE_EXPLAIN'    => 'Høyde x bredde i pixels.',
  'MAX_FILESIZE'          => 'Maksimal filstørrelse for avatar',
  'MAX_FILESIZE_EXPLAIN'      => 'For opplastede avatarfiler.',
  'MIN_AVATAR_SIZE'        => 'Minste dimensioner for avatar',
  'MIN_AVATAR_SIZE_EXPLAIN'    => 'Høyde x bredde i pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
  'ACP_MESSAGE_SETTINGS_EXPLAIN'    => 'Her kan du tilpasse alle standardinnstillinger for private meldinger.',

  'ALLOW_BBCODE_PM'      => 'Tillat BBCode i private meldinger',
  'ALLOW_FLASH_PM'      => 'Tillat bruk av <code>[FLASH]</code> BBCode tag',
  'ALLOW_FLASH_PM_EXPLAIN'  => 'Vær oppmerksom på at muligheten for å bruke flash i private meldinger skal tre i kraft, skal muligheten for å bruke flash også være tillatt i de overordnede rettigheters innstillinger.',
  'ALLOW_FORWARD_PM'      => 'Tillat videresending av private meldinger',
  'ALLOW_IMG_PM'        => 'Tillat bruk av <code>[IMG]</code> BBCode tag',
  'ALLOW_MASS_PM'        => 'Tillat sending av private meldinger til flere brukere og grupper',
  'ALLOW_PRINT_PM'      => 'Tillat utskriftsvennlig visning i private meldinger',
  'ALLOW_QUOTE_PM'      => 'Tillat sitater i private meldinger',
  'ALLOW_SIG_PM'        => 'Tillat signatur i private meldinger',
  'ALLOW_SMILIES_PM'      => 'Tillat smilies i private meldinger',
  'BOXES_LIMIT'        => 'Maksimalt antall private meldinger pr. mappe',
  'BOXES_LIMIT_EXPLAIN'    => 'Brukere kan ikke motta flere enn dette antall meldinger i hver av deres mapper til private meldinger. Sett til 0 for ubegrenset antall meldinger.',
  'BOXES_MAX'          => 'Maksimalt antall mapper til private meldinger',
  'BOXES_MAX_EXPLAIN'      => 'Standard må brukerne opprette dette antall brukerdefinerte mapper til private meldinger.',
  'ENABLE_PM_ICONS'      => 'Aktiver bruk av emneikoner i private meldinger',
  'FULL_FOLDER_ACTION'    => 'Handling ved full mappe',
  'FULL_FOLDER_ACTION_EXPLAIN'=> 'Utfør standardhandling hvis en brukers mappe er full og eventuelle brukerdefinerte mappehandlinger ikke er brukbare. Eneste unntak er mappen "Sendte meldinger", hvor standardhandlingen alltid er sletting av eldste meldinger.',
  'HOLD_NEW_MESSAGES'      => 'Hold tilbake nye meldinger',
  'PM_EDIT_TIME'        => 'Begrens redigeringstid',
  'PM_EDIT_TIME_EXPLAIN'    => 'Begrenser hvor lenge en enda ikke levert melding kan redigeres. Sett til 0 for deaktivering av denne begrensningen.',
));

// Post Settings
$lang = array_merge($lang, array(
  'ACP_POST_SETTINGS_EXPLAIN'      => 'Her kan du tilpasse alle standard innstillinger for å skrive innlegg.',
  'ALLOW_POST_LINKS'          => 'Tillat bruk av linker i innlegg og private meldinger',
  'ALLOW_POST_LINKS_EXPLAIN'      => 'Hvis bruk ikke er tillatt, er BBkode-tag for URL\'er og automatiske(magiske) URL\'er slått av.',
  'ALLOW_POST_FLASH'          => 'Tillat bruk av BBkode-tag\'en <code>[FLASH]</code> i innlegg. ',
  'ALLOW_POST_FLASH_EXPLAIN'      => 'Hvis bruk ikke er tillatt, er BBkode-tag\'en <code>[FLASH]</code> ikke synlig når det skrives innlegg. Ellers kan rettighets systemet brukes til å definere hvilke brukere som må bruke BBkode-tag\'en<code>[FLASH]</code> .',

  'BUMP_INTERVAL'          => 'Interval for plassering øverst',
  'BUMP_INTERVAL_EXPLAIN'      => 'Antall minutter, timer eller dager siden siste innlegg i et emne, før det kan plasseres øverst.',
  'CHAR_LIMIT'          => 'Maksimalt antall tegn pr. innlegg',
  'CHAR_LIMIT_EXPLAIN'      => 'Det maksimale antall tegn tillatt i et innlegg. Sett til 0 for deaktivering av denne begrensningen.',
  'DISPLAY_LAST_EDITED'      => 'Vis siste redigerete',
  'DISPLAY_LAST_EDITED_EXPLAIN'  => 'Velg om seneste redigeringstidspunkt skal vises i innlegg.',
  'EDIT_TIME'            => 'Begrens tidsrom for redigering',
  'EDIT_TIME_EXPLAIN'        => 'Begrenser tidsrommet hvor man kan redigere et nytt innlegg. Sett til 0 for deaktivering av denne begrensning.',
  'FLOOD_INTERVAL'        => 'Interval mellom nye innlegg',
  'FLOOD_INTERVAL_EXPLAIN'    => 'Antall sekunder en bruker må vente mellom å sende inn nye inndlegg. For å la brukerne ignorere denne innstillingen, kan du endre dette i deres rettigheter.',
  'HOT_THRESHOLD'          => 'Grense for populært emne',
  'HOT_THRESHOLD_EXPLAIN'      => 'Antall inlegg pr. emne for at dette kategoriseres som et populært emne. Sett til 0 for å slå populære emner av.',
  'MAX_POLL_OPTIONS'        => 'Maksimalt antall avstemningsmuligheter',
  'MAX_POST_FONT_SIZE'      => 'Maksimal skriftstørrelse i innlegg',
  'MAX_POST_FONT_SIZE_EXPLAIN'  => 'Den maksimale tillatte skriftstørrelse i innlegg. Sett til 0 for deaktivering av denne begrensning.',
  'MAX_POST_IMG_HEIGHT'      => 'Maksimal bildehøyde i innlegg',
  'MAX_POST_IMG_HEIGHT_EXPLAIN'  => 'Maksimalhøyde på bilder og flashfiler i innlegg. Sett til 0 for ubegrenset høyde.',
  'MAX_POST_IMG_WIDTH'      => 'Maksimal bildebredde i innlegg',
  'MAX_POST_IMG_WIDTH_EXPLAIN'  => 'Maksimal bredde på bilder og flashfiler i innlegg. Sett til 0 for ubegrenset bredde.',
  'MAX_POST_URLS'          => 'Maksimalt antall linker i innlegg',
  'MAX_POST_URLS_EXPLAIN'      => 'Høyeste antall URL\'er pr. innlegg. Sett til 0 for ubegrenset antall linker.',
  'POSTING'            => 'Innlegg',
  'POSTS_PER_PAGE'        => 'Innlegg pr. side',
  'QUOTE_DEPTH_LIMIT'        => 'Maksimalt antall sitater pr. innlegg',
  'QUOTE_DEPTH_LIMIT_EXPLAIN'    => 'Definerer hvor mange ganger et tidligere sitat kan innflettes. Sett til 0 for ubegrenset.',
  'SMILIES_LIMIT'          => 'Maksimalt antall smilies pr. innleggg',
  'SMILIES_LIMIT_EXPLAIN'      => 'Sett til 0 for ubegrenset antall smilies.',
  'TOPICS_PER_PAGE'        => 'Emner pr. side',
));

// Signature Settings
$lang = array_merge($lang, array(
  'ACP_SIGNATURE_SETTINGS_EXPLAIN'  => 'Her kan du tilpasse alle standardinnstillinger for signaturer.',

  'MAX_SIG_FONT_SIZE'        => 'Maksimal skriftstørrelse i signatur',
  'MAX_SIG_FONT_SIZE_EXPLAIN'    => 'Maksimal skriftstørrelse tillatt i brukersignaturer. Sett til 0 for ubegrenset størrelse.',
  'MAX_SIG_IMG_HEIGHT'      => 'Maksimal bildehøyde i signatur',
  'MAX_SIG_IMG_HEIGHT_EXPLAIN'  => 'Maksimal høyde på et bilde eller flashfil i brukersignaturer. Sett til 0 for ubegrenset høyde.',
  'MAX_SIG_IMG_WIDTH'        => 'Maksimal bildebredde i signatur',
  'MAX_SIG_IMG_WIDTH_EXPLAIN'    => 'Maksimal bredde på et bilde eller flashfil i brukersignaturer. Sett til 0 for ubegrenset bredde.',
  'MAX_SIG_LENGTH'        => 'Maksimal lengde på signatur',
  'MAX_SIG_LENGTH_EXPLAIN'    => 'Maksimalt antall tegn i brukersignaturer.',
  'MAX_SIG_SMILIES'        => 'Maksimalt antall smilies i signatur',
  'MAX_SIG_SMILIES_EXPLAIN'    => 'Maksimalt antall smilies tillatt i brukersignaturer. Set til 0 for ubegrenset antall.',
  'MAX_SIG_URLS'          => 'Maksimalt antall linker i signatur',
  'MAX_SIG_URLS_EXPLAIN'      => 'Maksimalt antall linker i brukersignaturer. Sett til 0 for ubegrenset antall linker.',
));

// Registration Settings
$lang = array_merge($lang, array(
  'ACP_REGISTER_SETTINGS_EXPLAIN'    => 'Her kan du tilpasse registrerings- og profilrelaterte innstillinger.',

  'ACC_ACTIVATION'      => 'Kontoaktivering',
  'ACC_ACTIVATION_EXPLAIN'  => 'Bestemmer om brukere har øyeblikkelig adgang til forumet eller om det kreves en annen form for bekreftelse. Du kan også deaktivere muligheten for å registrere seg i forumet.',
  'ACC_ADMIN'          => 'Av Administrator',
  'ACC_DISABLE'        => 'Deaktivert',
  'ACC_NONE'          => 'Ingen',
  'ACC_USER'          => 'Av bruker',
//  'ACC_USER_ADMIN'      => 'User + Admin',
  'ALLOW_EMAIL_REUSE'      => 'Tillat gjenbruk av emailadresse',
  'ALLOW_EMAIL_REUSE_EXPLAIN'  => 'Forskjellige brukere kan registrere seg med samme emailadresse.',
  'COPPA'            => 'COPPA',
  'COPPA_FAX'          => 'COPPA-telefaxnummer',
  'COPPA_MAIL'        => 'COPPA-emailadresse',
  'COPPA_MAIL_EXPLAIN'    => 'Angi den emailadressen til foreldre eller verge som kan sende COPPA-registreringsformularene.',
  'ENABLE_COPPA'        => 'Aktiver COPPA-funksjonen',
  'ENABLE_COPPA_EXPLAIN'    => 'For å overholde den amerikanske U.S. COPPA lovgivningen, kreves brukere i forbindelse med registreringen, en erklæring om hvorvidt de er 13 år eller eldre. Hvis COPPA-funksjonen deaktiveres, vises COPPA-spesifikke grupper ikke.',
  'MAX_CHARS'          => 'Max',
  'MIN_CHARS'          => 'Min',
  'MIN_TIME_REG'        => 'Korteste registreringstid',
  'MIN_TIME_REG_EXPLAIN'    => 'Registreringsformularen kan først sendes inn etter dette antall sekunder.',
  'MIN_TIME_TERMS'      => 'Registreringsbetingelserne vises minst',
  'MIN_TIME_TERMS_EXPLAIN'  => 'Registreringsbetingelserne kan først aksepteres etter dette antall sekunder.',
  'NO_AUTH_PLUGIN'      => 'Ingen passende autorisasjonsmodul ble funnet.',
  'PASSWORD_LENGTH'      => 'Passord lengde',
  'PASSWORD_LENGTH_EXPLAIN'  => 'Minimalt og maksimalt antall tegn i passord.',
  'REG_LIMIT'          => 'Registreringsforsøk',
  'REG_LIMIT_EXPLAIN'      => 'Antall registreringsforsøk brukere har før de utelukkes for den gjeldende session.',
  'USERNAME_ALPHA_ONLY'    => 'Kun bokstaver og tall',
  'USERNAME_ALPHA_SPACERS'  => 'Bokstaver, tall og mellomromstegn',
  'USERNAME_ASCII'      => 'ASCII (ingen internasjonal unicode)',
  'USERNAME_LETTER_NUM'    => 'Alle bokstaver og tall',
  'USERNAME_LETTER_NUM_SPACERS'  => 'Alle bokstaver, tall og mellomrom',
  'USERNAME_CHARS'      => 'Begrens brukbare tegn i brukernavn',
  'USERNAME_CHARS_ANY'    => 'Alle tegn',
  'USERNAME_CHARS_EXPLAIN'  => 'Begrens typen av tegn, det kan brukes i brukernavnet, mellomromstegn er: mellomrom, -, +, _, [ and ].',
  'USERNAME_LENGTH'      => 'Brukernavn lengde',
  'USERNAME_LENGTH_EXPLAIN'  => 'Minimalt og maksimalt antall tegn i brukernavnet.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
  'ACP_VC_SETTINGS_EXPLAIN'    => 'Her kan du tilpasse standard innstillinger for visuel bekreftelse og CAPTCHA.',

  'CAPTCHA_GD'              => 'GD CAPTCHA',
  'CAPTCHA_GD_FOREGROUND_NOISE'      => 'Forgrundsstøy i GD CAPTCHA',
  'CAPTCHA_GD_EXPLAIN'          => 'Bruk GD hvis du ønsker en mer avanseret CAPTCHA.',
  'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'  => 'Bruk forgrundsstøy for å gjøre den GD-baserte CAPTCHA vanskeligere å lese.',
  'CAPTCHA_GD_X_GRID'            => 'Baggrundsstøy i GD CAPTHA\'s x-akse',
  'CAPTCHA_GD_X_GRID_EXPLAIN'        => 'En lavere innstilling her, gjør den GD-baserte CAPTCHA vanskeligere å lese. 0 deaktiverer baggrundsstøy i x-aksen.',
  'CAPTCHA_GD_Y_GRID'            => 'Baggrundsstøy i GD CAPTHA\'s y-akse',
  'CAPTCHA_GD_Y_GRID_EXPLAIN'        => 'En lavere innstilling her, gjør den GD-baserede CAPTCHA vanskeligere å lese. 0 deaktiverer baggrundsstøy i y-aksen.',

  'CAPTCHA_PREVIEW_MSG'          => 'Dine endringer i innstillingene er ikke lagret. Visningen er kun en prøve.',
  'CAPTCHA_PREVIEW_EXPLAIN'        => 'CAPTCHA som funksjoenen vises med de nåværende innstillinger. Bruk knappen "Forhåndsvis" for å gjenoppfriske. Merk deg at CAPTCHAs vises tilfeldig og varierer fra den ene visning til den neste.',
  'VISUAL_CONFIRM_POST'          => 'Aktiver visuel bekreftelse for innlegg fra gjester',
  'VISUAL_CONFIRM_POST_EXPLAIN'      => 'Krever at gjester (ikke registrerte brukere) taster inn en tilfeldig kode som matcher et bilde for å forhindre automatiseret spamming og skriving av masseinnlegg.',
  'VISUAL_CONFIRM_REG'          => 'Aktiver visuel bekreftelse for registreringer',
  'VISUAL_CONFIRM_REG_EXPLAIN'      => 'Krever av nye brukere at de taster inn en tilfeldig kode som matcher et bilde for å forhindre automatiseret masseregistrering.',
));

// Cookie Settings
$lang = array_merge($lang, array(
  'ACP_COOKIE_SETTINGS_EXPLAIN'    => 'Disse innstillinger definerer data brukt til å sende cookies til dine brukeres browsere. I de fleste tilfeller skulle standardverdierne for cookie innstillinger være tilstrekkelig. Hvis du har behov for å endre noen av innstillingene så gjør det med forsiktighet, da gale innstillinger kan forhindre brukerne i å logge inn.',

  'COOKIE_DOMAIN'        => 'Cookie domene',
  'COOKIE_NAME'        => 'Cookie navn',
  'COOKIE_PATH'        => 'Cookie sti',
  'COOKIE_SECURE'        => 'Cookie sikker',
  'COOKIE_SECURE_EXPLAIN'    => 'Hvis din server kjører via SSL, still inn dette til slått på, ellers la det være slått av. Hvis dette er satt til "Slått på" på et domene, som ikke kjører SSL, vil det resultere i serverfeil ved videre innstillinger.',
  'ONLINE_LENGTH'        => 'Varighet av onlineinformasjonen',
  'ONLINE_LENGTH_EXPLAIN'    => 'Tid i minutter hvor inaktive brukere blir fjernet fra "Hvem er online" listen. Jo større tidsrom, desto lengre behandlingstid for å generere listen.',
  'SESSION_LENGTH'      => 'Sessionslengde.',
  'SESSION_LENGTH_EXPLAIN'  => 'Sessioner vil utløpe etter denne tid, i sekunder.',
));

// Load Settings
$lang = array_merge($lang, array(
  'ACP_LOAD_SETTINGS_EXPLAIN'  => 'Her kan du slå visse forumfunksjoner av, for å redusere forumets belastning av serveren. På de fleste servere skulle det ikke være bruk for å slå noen funksjoner av. Men på visse systemer eller i delte hostmiljøer kan det være en fordel å slå unødvendige funksjoner av. Du kan også angi begrensninger for systembelastning og aktive sessioner over hvilket forumet vil gå offline.',

  'CUSTOM_PROFILE_FIELDS'      => 'Tilpassede profilfelter',
  'LIMIT_LOAD'          => 'Begrens systembelastning',
  'LIMIT_LOAD_EXPLAIN'      => 'Hvis systembelastningen i gjennomsnitt over 1 minut overskrider denne verdi, vil forumet gå offline, 1.0 er lik ~100% belastning av en prosessor. Dette virker kun på UNIX-baserede servere og hvor denne informasjonen er tilgjengelig. Verdien nullstiller seg selv hvis phpBB ikke var i stand til å finne belastningsgrensen.',
  'LIMIT_SESSIONS'        => 'Begrens sessioner',
  'LIMIT_SESSIONS_EXPLAIN'    => 'Hvis antallet av sessioner overskrider denne verdi innenfor 1 minutt, vil forumet gå offline. Sett til 0 for ubegrenset antall sessioner.',
  'LOAD_CPF_MEMBERLIST'      => 'Tillat forumdesignet å tilpasses på profilfelter i medlemslisten',
  'LOAD_CPF_VIEWPROFILE'      => 'Vis tilpassede profilfelter i brukerprofiler',
  'LOAD_CPF_VIEWTOPIC'      => 'Vis tilpassede profilfelter på emnesider',
  'LOAD_USER_ACTIVITY'      => 'Vis brukers aktivitet',
  'LOAD_USER_ACTIVITY_EXPLAIN'  => 'Viser aktivt emne og forum i brukerprofiler og brukerkontrollpanel. Det anbefales å deaktivere dette for forumer med mer enn en million innlegg.',
  'RECOMPILE_STYLES'        => 'Rekompiler fastfrosne forumdesigner',
  'RECOMPILE_STYLES_EXPLAIN'    => 'Kontrollerer for oppddaterte forumdesign komponenter i filsystemet og rekompiler.',
  'YES_ANON_READ_MARKING'      => 'Aktiver emnemarkering for gjester',
  'YES_ANON_READ_MARKING_EXPLAIN'  => 'Lagrer lest/ulest statusinformasjonen for gjester. Hvis slått av vises innlegg alltid som uleste for gjester.',
  'YES_BIRTHDAYS'          => 'Aktiver bursdagslisten',
  'YES_BIRTHDAYS_EXPLAIN'      => 'Hvis det velges "Nei" vises bursdagslisten ikke på forumindeksen. For å aktivere visning av listen forutsetter det at visning av bursdag også er valgt under forumsinnstillinger.',
  'YES_JUMPBOX'          => 'Aktiver visning av hopp-til-boks (Jumpbox)',
  'YES_MODERATORS'        => 'Aktiver visning av moderatorer',
  'YES_ONLINE'          => 'Aktiver onlinestatus for registrerte brukere',
  'YES_ONLINE_EXPLAIN'      => 'Vis onlinestatus for registrerte brukere på forumindeks, forum og emnesider.',
  'YES_ONLINE_GUESTS'        => 'Aktiver onlinestatus for gjester',
  'YES_ONLINE_GUESTS_EXPLAIN'    => 'Vis gjester i "Hvem er online.',
  'YES_ONLINE_TRACK'        => 'Aktiver online/offlinestatus for registrerte brukere',
  'YES_ONLINE_TRACK_EXPLAIN'    => 'Vis online/offlinestatus for registrerte brukere i profiler og på emnesider.',
  'YES_POST_MARKING'        => 'Aktiver prikkete emner',
  'YES_POST_MARKING_EXPLAIN'    => 'Indikerer om brukeren har skrevet innlegg i et emne.',
  'YES_READ_MARKING'        => 'Aktiver server-side emnemarkering',
  'YES_READ_MARKING_EXPLAIN'    => 'Lagrer lest/ulest statusinformation i databasen i stedet for i en cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
  'ACP_AUTH_SETTINGS_EXPLAIN'  => 'phpBB støtter forskellige autentifikasjonsmoduler, som gir mulighet for å bestemme hvordan en bruker skal autentificeres ved logginn på forumet. Det er tre standardmoduler med i phpBB: DB, LDAP og Apache. Ikke alle metoderne krever ytterligere informasjon, så fyll kun ut felterne hvis det er relevant til den valgte metoden.',

  'AUTH_METHOD'        => 'Velg en autentifikasjonsmetode',

  'APACHE_SETUP_BEFORE_USE'  => 'Du skal konfigurere autentifikasjon i Apache før du endrer phpBB til å bruke denne metoden. Husk at det anvendte brukernavn til autentifikasjonen skal være det samme som dit phpBB-brukernavn. Autentifikasjon i Apache kan kun brukes med mod_php (ikke med en CGI-version) og med safe_mod slått av.',

  'LDAP_DN'            => 'LDAP base <var>dn</var>',
  'LDAP_DN_EXPLAIN'        => 'Dette er LDAP Distinguished Name som angir brukerinformasjonen f.eks. <samp>o=mit firma,c=dk</samp>.',
  'LDAP_EMAIL'          => 'LDAP e-mail attribute',
  'LDAP_EMAIL_EXPLAIN'      => 'Sett denne til navnet på din brukertabbels emailattribut (hvis en slik finnes) for automatisk å sette emailadressen for nye brukere. Ved å la dette felt være tomt vil brukere ved første logginn få tildelt en tom emailadresse.',
  'LDAP_INCORRECT_USER_PASSWORD'  => 'Forbindelse til LDAP-server mislykkdes med det anvendte brukernavn og passord.',
  'LDAP_NO_EMAIL'          => 'Den angitte emailattribut finnes ikke.',
  'LDAP_NO_IDENTITY'        => 'Kunne ikke finne en logginn-identitet for %s.',
  'LDAP_PASSWORD'          => 'LDAP passord',
  'LDAP_PASSWORD_EXPLAIN'      => 'La stå tomt for å benytte annonym tilkobling, fylles ut ellers med ovenstående brukers passord.  Kreves av Active Directory servere. <strong>ADVARSEL:</strong> Passordet blir lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurasjonssiden.',
  'LDAP_PORT'            => 'LDAP server port',
  'LDAP_PORT_EXPLAIN'        => 'Hvis standardporten 389 ikke brukes når det kobles til LDAP serveren, kan du her angi hvilken alternativ port phpBB skal bruke i stedet.',
  'LDAP_SERVER'          => 'LDAP server navn',
  'LDAP_SERVER_EXPLAIN'      => 'Ved bruk av LDAP er dette navnet eller IP-adressen på LDAP-serveren. Alternativt kan du angi en URL, eksempelvis ldap://hostname:port/.',
  'LDAP_UID'            => 'LDAP <var>uid</var>',
  'LDAP_UID_EXPLAIN'        => 'Dette er den nøkkelen som det søkes etter på et gitt logginn, f.eks. <var>uid</var>, <var>sn</var>, osv.',
  'LDAP_USER'            => 'LDAP user <var>dn</var>',
  'LDAP_USER_EXPLAIN'        => 'La stå tomt for å benytte annonym tilkobling. Fylles feltet ut vil phpBB bruke det angitte Distinguished Name (DN) ved logginn forsøk for å bestemme den korrekte bruker, f.eks. <samp>uid=Brukernavn,ou=MinAvdeling,o=MittFirma,c=DK</samp>. Kreves av Active Directory servere.',
  'LDAP_USER_FILTER'        => 'LDAP bruker filter',
  'LDAP_USER_FILTER_EXPLAIN'    => 'Ved å bruke ytterligere filtre har du mulighet for å begrense de objekter det søkes i. For eksempel vil <samp>objectClass=posixGroup</samp> bety at <samp>(&(uid=$username)(objectClass=posixGroup))</samp> brukes.',
));

// Server Settings
$lang = array_merge($lang, array(
  'ACP_SERVER_SETTINGS_EXPLAIN'  => 'Her kan du tilpasse server- og domeneavhengige innstillinger. Du bør forsikre deg at data er riktige, da feil vil resultere i feil email kontaktinformasjon. Vær oppmerksom på at inntasting av domenenavn inkluderer http:// eller annen protokolangivelse. Rett kun portnummeret hvis du vet at din server bruker en annen verdi, port 80 er korrekt i de fleste tilfeller.',

  'ENABLE_GZIP'        => 'Aktiver GZip komprimering',
  'ENABLE_GZIP_EXPLAIN'    => 'Det genererte innholdet blir komprimert før sending til brukeren. Det kan medvirke til å forminske nettverkstrafikken, og dermed også båndbreddeforbruket, til gjengjeld økes belastningen av både serverens og brukerens CPU.',
  'FORCE_SERVER_VARS'      => 'Force server URL innstillinger',
  'FORCE_SERVER_VARS_EXPLAIN'  => 'Hvis denne er satt til ja, vil serverinnstillingene satt her bli brukt for de automatisk leste verdier.',
  'ICONS_PATH'        => 'Innleggsikon-mappens plassering',
  'ICONS_PATH_EXPLAIN'    => 'Sti til din phpBB-rotmappe, f.eks. <samp>images/icons</samp>.',
  'PATH_SETTINGS'        => 'Sti-innstillinger',
  'RANKS_PATH'        => 'Rang ikonmappens plassering',
  'RANKS_PATH_EXPLAIN'    => 'Sti til din phpBB-rotmappe, f.eks. <samp>images/ranks</samp>.',
  'SCRIPT_PATH'        => 'Sti til script',
  'SCRIPT_PATH_EXPLAIN'    => 'Sti til phpBB relativt i forhold til domenenavnet, eksempelvis <samp>/phpBB3</samp>.',
  'SERVER_NAME'        => 'Domene navn',
  'SERVER_NAME_EXPLAIN'    => 'Domenenavn der hvor dette forum kjører fra (for eksempel: <samp>www.example.com</samp>).',
  'SERVER_PORT'        => 'Server port',
  'SERVER_PORT_EXPLAIN'    => 'Port 80 brukes som standard for alle webservere. Innstillingen skal kun endres i helt spesielle tilfeller.',
  'SERVER_PROTOCOL'      => 'Server protokol',
  'SERVER_PROTOCOL_EXPLAIN'  => 'Denne innstillingen kan settes til enten http:// eller https:// og er dermed fast definert. Hvis feltet ikke fylles ut, fastsettes protokollen ut fra sikkerhetsinnstillingene i cookies (<samp>http://</samp> eller <samp>https://</samp>).',
  'SERVER_URL_SETTINGS'    => 'Server URL innstillinger',
  'SMILIES_PATH'        => 'Smilie mappens plassering',
  'SMILIES_PATH_EXPLAIN'    => 'Sti til din phpBB-rotmappe, f.eks. <samp>images/smilies</samp>.',
  'UPLOAD_ICONS_PATH'      => 'Filtype ikonmappens plassering',
  'UPLOAD_ICONS_PATH_EXPLAIN'  => 'Sti til din phpBB-rotmappe, f.eks. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
  'ACP_SECURITY_SETTINGS_EXPLAIN'    => 'Her kan du tilpasse sessions- og logginn relaterte innstillinger.',

  'ALL'              => 'Alle',
  'ALLOW_AUTOLOGIN'        => 'Tillat autologginn',
  'ALLOW_AUTOLOGIN_EXPLAIN'    => 'Bestemmer om brukere kan logge automatisk inn når de besøker forumet.',
  'AUTOLOGIN_LENGTH'        => 'Autologginn utløper etter antall dager',
  'AUTOLOGIN_LENGTH_EXPLAIN'    => 'Antall dager til autologginn utløper eller sett til 0 for å deaktivere.',
  'BROWSER_VALID'          => 'Valider browser',
  'BROWSER_VALID_EXPLAIN'      => 'Aktiverer browservalidering for hver session, hvilket øker sikkerheten.',
  'CHECK_DNSBL'          => 'Kontroller IP-adresser mot DNS blackhole liste',
  'CHECK_DNSBL_EXPLAIN'      => 'Hvis slått på blir brukerens IP-adresse kontrolleret ved registrering og når denne sender inn innlegg, i følgende DNSBL services : <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Oppslaget kan ta litt tid, avhengig av serverkonfigurasjonen. Hvis kontrollen medfører for mange feilaktige avvisninger eller setter ned "ekspedisjonstiden", anbefales det å slå kontrollen av.',
  'CLASS_B'            => 'A.B',
  'CLASS_C'            => 'A.B.C',
  'EMAIL_CHECK_MX'        => 'Kontroller om emaildomenet har en gyldig MX-record',
  'EMAIL_CHECK_MX_EXPLAIN'    => 'Hvis slått på vil emaildomenet bli kontrolleret for korrekt domeneregistrering og profilendringer for en gyldig MX-record.',
  'FORCE_PASS_CHANGE'        => 'Tving igjennom passord endring',
  'FORCE_PASS_CHANGE_EXPLAIN'    => 'Krever at brukeren skifter passord etter det innstillte antall dager. Settes verdien til 0 deaktiveres denne tvangsendringen.',
  'FORM_TIME_MAX'          => 'Maksimal tid for å sende inn innlegg/melding',
  'FORM_TIME_MAX_EXPLAIN'      => 'Tiden en bruker har til å sende inn et innlegg/melding. Sett til -1 for å slå innstillingen av. Vær oppmerksom på at et innlegg/melding kan bli ugyldig hvis sessionen utløper, uansett denne innstillingen.',
  'FORM_TIME_MIN'          => 'Minimal tid for å sende inn innlegg/melding',
  'FORM_TIME_MIN_EXPLAIN'      => 'Sendes det inn raskere enn denne tid, ignoreres det av forumet. Sett til 0 for å slå innstillingen av.',
  'FORM_SID_GUESTS'        => 'Knytt innlegg/meldinger til gjeste sessioner',
  'FORM_SID_GUESTS_EXPLAIN'    => 'Hvis "Ja", vil innlegg/meldinger skrevet av gjester bli basert på enkeltsessioner. Vær oppmerksom på at denne innstillingen kan gi problemer i forhold til noen hoster.',
  'FORWARDED_FOR_VALID'      => 'Kontrolleret <var>X_FORWARDED_FOR</var> header',
  'FORWARDED_FOR_VALID_EXPLAIN'  => 'Sessioner vil kun bli fortsatt, hvis det sendte <var>X_FORWARDED_FOR</var>-hoved svarer til det, det som ble sendt med den forrige anmodningen. Utestengelser blir også kontrolleret mot IP-adresser i <var>X_FORWARDED_FOR</var>.',
  'IP_VALID'            => 'Validering av IP-adresser under sessioner',
  'IP_VALID_EXPLAIN'        => 'Avgjør hvor mye av brukerens IP-adresse, som brukes til å validere en session; <samp>Alle</samp> sammenligner hele adressen, <samp>A.B.C</samp> de første x.x.x, <samp>A.B</samp> de første x.x, <samp>Ingen</samp> slår kontroll av. I IPv6 adresser; <samp>A.B.C</samp> de første 4 blokker sammenlignes og ved <samp>A.B</samp> de første 3 blokker.',
  'MAX_LOGIN_ATTEMPTS'      => 'Maksimalt antall logginn forsøk',
  'MAX_LOGIN_ATTEMPTS_EXPLAIN'  => 'Etter dette antall mislykkede logginn forsøk skal brukeren ytterligere bekrefte sitt logginn visuelt (visuel bekreftelse).',
  'NO_IP_VALIDATION'        => 'Ingen',
  'PASSWORD_TYPE'          => 'Passord kompleksitet',
  'PASSWORD_TYPE_EXPLAIN'      => 'Avgjør hvor komplekst et passord skal være, når det innstilles eller endres. Etter følgende muligheter inneholder også de foranstående.',
  'PASS_TYPE_ALPHA'        => 'Skal inneholde bokstaver og tall',
  'PASS_TYPE_ANY'          => 'Ingen krav',
  'PASS_TYPE_CASE'        => 'Skal være med både store og små bokstaver',
  'PASS_TYPE_SYMBOL'        => 'Skal inneholde symboler',
  'TPL_ALLOW_PHP'          => 'Tillad PHP i templater',
  'TPL_ALLOW_PHP_EXPLAIN'      => 'Hvis denne innstillingen er aktivert, vil kommandoene <code>PHP</code> og <code>INCLUDEPHP</code> i templatefilerne bli igjenkjendt og behandlet.',
));

// Email Settings
$lang = array_merge($lang, array(
  'ACP_EMAIL_SETTINGS_EXPLAIN'  => 'Disse innstillinger brukes av forumet ved sending av email til registrerte brukere. Vær oppmerksom på at denne emailadressen skal være gyldig, da enhver tilbakesendt eller bortkommet email, vil sansynligvis bli returnert til denne emailadressen. Hvis din host ikke lar deg bruke den innebyggede (PHP-baserede) emailservice, kan du i stedet sende email direkte igjennom SMTP. Dette krever adressen på en passende server (spør om nødvendig din host). Hvis serveren krever autentifikasjon (og kun hvis den gør) angis det nødvendige brukernavn, passord og autentifikasjonsmetoden.',

  'ADMIN_EMAIL'          => 'Returadresse for email',
  'ADMIN_EMAIL_EXPLAIN'      => 'Denne emailadressen brukes som returadresse for alle email, dvs. emailadressen for teknisk kontakt. Den brukes alltid som <samp>Return-Path</samp> og <samp>Sender</samp> adressen i email.',
  'BOARD_EMAIL_FORM'        => 'Brukere sender email via forumet',
  'BOARD_EMAIL_FORM_EXPLAIN'    => 'I stedet for å vise brukerens emailadresse kan brukere sende email via forumet.',
  'BOARD_HIDE_EMAILS'        => 'Skjul e-mail adresser',
  'BOARD_HIDE_EMAILS_EXPLAIN'    => 'Denne funksjonen holder emailadresser helt private.',
  'CONTACT_EMAIL'          => 'Kontakt e-mail adresse',
  'CONTACT_EMAIL_EXPLAIN'      => 'Denne emailadressen brukes overalt, hvor det er spesifikke kontaktpunkter, f.eks. spam, feilmeldinger, problemer med registrering osv. Den vil alltid bli brukt som <samp>From</samp> og <samp>Reply-To</samp>-adressene i email.',
  'EMAIL_FUNCTION_NAME'      => 'Navn på emailfunksjon',
  'EMAIL_FUNCTION_NAME_EXPLAIN'  => 'Navnet på den brukte emailfunksjon ved sending av email gjennom PHP.',
  'EMAIL_PACKAGE_SIZE'      => 'Pakkestørrelse for email',
  'EMAIL_PACKAGE_SIZE_EXPLAIN'  => 'Antallet av email som sendes i en pakke. Innstillingen legges til den interne meldingskø, sett innstillingen til 0 hvis du opplever problemer med ikke avleverete adviseringsemailer.',
  'EMAIL_SIG'            => 'Signatur i email',
  'EMAIL_SIG_EXPLAIN'        => 'Denne teksten brukes som signatur i alle email som blir sendt ut fra forumet.',
  'ENABLE_EMAIL'          => 'Aktiver forumets emailsystem',
  'ENABLE_EMAIL_EXPLAIN'      => 'Hvis slått av vil forumet ikke sende noen email overhodet.',
  'SMTP_AUTH_METHOD'        => 'Autentifikasjonsmetode for SMTP',
  'SMTP_AUTH_METHOD_EXPLAIN'    => 'Brukes kun hvis et brukernavn og passord er angitt, spør din host, hvis du er usikker på hvilken metode som skal brukes.',
  'SMTP_CRAM_MD5'          => 'CRAM-MD5',
  'SMTP_DIGEST_MD5'        => 'DIGEST-MD5',
  'SMTP_LOGIN'          => 'LOGIN',
  'SMTP_PASSWORD'          => 'SMTP passord',
  'SMTP_PASSWORD_EXPLAIN'      => 'Tast inn et passord, bare hvis din SMTP-server krever det.',
  'SMTP_PLAIN'          => 'PLAIN',
  'SMTP_POP_BEFORE_SMTP'      => 'POP-BEFORE-SMTP',
  'SMTP_PORT'            => 'SMTP server port',
  'SMTP_PORT_EXPLAIN'        => 'Endre bare denne hvis du vet at din SMTP-server benytter en annen port.',
  'SMTP_SERVER'          => 'SMTP server adresse',
  'SMTP_SETTINGS'          => 'SMTP innstillinger',
  'SMTP_USERNAME'          => 'SMTP brukernavn',
  'SMTP_USERNAME_EXPLAIN'      => 'Tast inn kun et brukernavn, hvis din SMTP-server krever det.',
  'USE_SMTP'            => 'Bruk SMTP server for e-mail',
  'USE_SMTP_EXPLAIN'        => 'Velg "Ja", hvis du skal bruke en navngitt server til å sende email i stedet for å bruke forumets innebyggde emailfunksjon.',
));

// Jabber settings
$lang = array_merge($lang, array(
  'ACP_JABBER_SETTINGS_EXPLAIN'  => 'Herfra kan du aktivere og administrere bruken av Jabber til å fremsende adviseringer om nye private meldinger og ved oppdateringer i overvåkede emner og fora. Jabber er en Open Source protokol og kan derfor brukes av enhver. Noen Jabber servere inkluderer gateways eller transporter, som tillater deg å kontakte brukere av andre nettverk. Ikke alle servere tilbyr alle former for transporter, og endringer i protokoller kan forhindre transporter i å fungere. Oppgi her n�yaktig til det formålet en opprettet Jabberkonto - phpBB gjør bruk av disse data.',

  'JAB_ENABLE'        => 'Aktiver Jabber',
  'JAB_ENABLE_EXPLAIN'    => 'Slår bruken av meldinger og adviseringer via Jabber på.',
  'JAB_GTALK_NOTE'      => 'Merk deg at funksjonen <samp>dns_get_record</samp> ikke ble funnet, hvorfor bruken av GTalk ikke fungerer. <samp>dns_get_record</samp> er ikke tilgjengelig i PHP4 og ikke implementert på Windowsplatformene. Den fungerer i øyeblikket heller ikke på BSD-baserede systemer, som også inkluderer Mac OS.',
  'JAB_PACKAGE_SIZE'      => 'Pakkestørrelse for Jabber',
  'JAB_PACKAGE_SIZE_EXPLAIN'  => 'Dette er antall meldinger sendt i en pakke. Hvis denne er satt til 0 sendes meldingen øyeblikkelig og settes ikke i kø til senere sending.',
  'JAB_PASSWORD'        => 'Jabber passord',
  'JAB_PORT'          => 'Jabber port',
  'JAB_PORT_EXPLAIN'      => 'Fylles ikke ut, med mindre du vet at det ikke er port 5222.',
  'JAB_SERVER'        => 'Jabber server',
  'JAB_SERVER_EXPLAIN'    => 'Se %sjabber.org%s for en liste over servere.',
  'JAB_SETTINGS_CHANGED'    => 'Jabberinnstillinger korrekt oppdatert.',
  'JAB_USE_SSL'        => 'Bruk SSL for tilkobling',
  'JAB_USE_SSL_EXPLAIN'    => 'En sikker forbindelse forsøkes etableret. Den brukte Jabberport blir endret til 5223, hvis port 5222 er angitt.',
  'JAB_USERNAME'        => 'Jabber brukernavn',
  'JAB_USERNAME_EXPLAIN'    => 'Angi en allerede opprettet Jabberkonto. Navnets gyldighet kontrolleres ikke av phpBB.',
));

?>