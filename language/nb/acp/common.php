<?php
/**
*
* acp_common.php [Norwegian Bokmaal]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-12-02 - phpBB.no
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
	'BOARD_VERSION'	=> 'Forumversjon',
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Fjernet vedleggs filtype</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'	=> '<strong>Bildepakken mangler "%2$s" språk</strong><br />» %1$s',
	'ACP_ADMINISTRATORS'	=> 'Administratorer',
	'ACP_ADMIN_LOGS'	=> 'Administratorlogg',
	'ACP_ADMIN_ROLES'	=> 'Administratorroller',
	'ACP_ATTACHMENTS'	=> 'Vedlegg',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Vedlegg',
	'ACP_AUTH_SETTINGS'	=> 'Autentifikasjon',
	'ACP_AUTOMATION'	=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'	=> 'Avatarinnstillinger',
	'ACP_BACKUP'	=> 'Sikkerhetskopi',
	'ACP_BAN'	=> 'Utestengning',
	'ACP_BAN_EMAILS'	=> 'Utesteng e-postadresser',
	'ACP_BAN_IPS'	=> 'Utesteng IP-adresser',
	'ACP_BAN_USERNAMES'	=> 'Utesteng brukernavn',
	'ACP_BBCODES'	=> 'BBKoder',
	'ACP_BOARD_CONFIGURATION'	=> 'Innstillinger',
	'ACP_BOARD_FEATURES'	=> 'Forumfunksjoner',
	'ACP_BOARD_MANAGEMENT'	=> 'Forum administrasjon',
	'ACP_BOARD_SETTINGS'	=> 'Hovedinnstillinger',
	'ACP_BOTS'	=> 'Søkemotorer',
	'ACP_CAPTCHA'	=> 'CAPTCHA',
	'ACP_CAT_DATABASE'	=> 'Database',
	'ACP_CAT_DOT_MODS'	=> '.MODs',
	'ACP_CAT_FORUMS'	=> 'Forumer',
	'ACP_CAT_GENERAL'	=> 'Generelt',
	'ACP_CAT_MAINTENANCE'	=> 'Vedlikehold',
	'ACP_CAT_PERMISSIONS'	=> 'Rettigheter',
	'ACP_CAT_POSTING'	=> 'Innlegg',
	'ACP_CAT_STYLES'	=> 'Utseende',
	'ACP_CAT_SYSTEM'	=> 'System',
	'ACP_CAT_USERGROUP'	=> 'Brukere og Grupper',
	'ACP_CAT_USERS'	=> 'Brukere',
	'ACP_CLIENT_COMMUNICATION'	=> 'Trafikkonfigurasjon',
	'ACP_COOKIE_SETTINGS'	=> 'Cookie-innstillinger',
	'ACP_CRITICAL_LOGS'	=> 'Feillogg',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Tilpass profilfelter',
	'ACP_DATABASE'	=> 'Databaseadministration',
	'ACP_DISALLOW'	=> 'Avslå',
	'ACP_DISALLOW_USERNAMES'	=> 'Avslå brukernavn',
	'ACP_EMAIL_SETTINGS'	=> 'E-postinnstillinger',
	'ACP_EXTENSION_GROUPS'	=> 'Administrer filtypegrupper',
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forumbaserte rettigheter',
	'ACP_FORUM_LOGS'	=> 'Forumlogg',
	'ACP_FORUM_MANAGEMENT'	=> 'Forumadministrasjon',
	'ACP_FORUM_MODERATORS'	=> 'Forummoderatorer',
	'ACP_FORUM_PERMISSIONS'	=> 'Forumrettigheter',
	'ACP_FORUM_ROLES'	=> 'Forumrolle',
	'ACP_GENERAL_CONFIGURATION'	=> 'Generell konfigurasjon',
	'ACP_GENERAL_TASKS'	=> 'Generelle oppgaver',
	'ACP_GLOBAL_MODERATORS'	=> 'Globale moderatorer',
	'ACP_GLOBAL_PERMISSIONS'	=> 'Globale rettigheter',
	'ACP_GROUPS'	=> 'Grupper',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Grupper forumrettigheter',
	'ACP_GROUPS_MANAGE'	=> 'Administrer grupper',
	'ACP_GROUPS_MANAGEMENT'	=> 'Gruppe administrasion',
	'ACP_GROUPS_PERMISSIONS'	=> 'Grupperettigheter',
	'ACP_ICONS'	=> 'Emneikoner',
	'ACP_ICONS_SMILIES'	=> 'Emneikoner/smilies',
	'ACP_IMAGESETS'	=> 'Bildepakker',
	'ACP_INACTIVE_USERS'	=> 'Inaktive brukere',
	'ACP_INDEX'	=> 'ACP index',
	'ACP_JABBER_SETTINGS'	=> 'Jabberinnstillinger',
	'ACP_LANGUAGE'	=> 'Språkadministration',
	'ACP_LANGUAGE_PACKS'	=> 'Språkpakker',
	'ACP_LOAD_SETTINGS'	=> 'Belastningsinnstillinger',
	'ACP_LOGGING'	=> 'Logging',
	'ACP_MAIN'	=> 'Administrasjonspanel',
	'ACP_MANAGE_EXTENSIONS'	=> 'Administrer filtyper',
	'ACP_MANAGE_FORUMS'	=> 'Administrer forumer',
	'ACP_MANAGE_RANKS'	=> 'Administrer brukerrang',
	'ACP_MANAGE_REASONS'	=> 'Administrer avisningsbegrunnelser',
	'ACP_MANAGE_USERS'	=> 'Administrer brukere',
	'ACP_MASS_EMAIL'	=> 'Masse e-mail',
	'ACP_MESSAGES'	=> 'Meldinger',
	'ACP_MESSAGE_SETTINGS'	=> 'Private meldinger',
	'ACP_MODULE_MANAGEMENT'	=> 'Moduladministrasion',
	'ACP_MOD_LOGS'	=> 'Moderatorlogg',
	'ACP_MOD_ROLES'	=> 'Moderatorroller',
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Bortkommne vedlagte filer',
	'ACP_PERMISSIONS'	=> 'Rettigheter',
	'ACP_PERMISSION_MASKS'	=> 'Rettigheter masker',
	'ACP_PERMISSION_ROLES'	=> 'Rettigheter roller',
	'ACP_PERMISSION_TRACE'	=> 'Sporing av rettigheter',
	'ACP_PHP_INFO'	=> 'PHP-informasjon',
	'ACP_POST_SETTINGS'	=> 'Emner og innlegg',
	'ACP_PRUNE_FORUMS'	=> 'Klipp i forumer',
	'ACP_PRUNE_USERS'	=> 'Klipp brukere',
	'ACP_PRUNING'	=> 'Sletting',
	'ACP_QUICK_ACCESS'	=> 'Snarveier',
	'ACP_RANKS'	=> 'Rang',
	'ACP_REASONS'	=> 'Rapport/avisningsbegrunnelser',
	'ACP_REGISTER_SETTINGS'	=> 'Brukerregistrering',
	'ACP_RESTORE'	=> 'Gjennoppretting',
	'ACP_SEARCH'	=> 'Søk konfigurasjon',
	'ACP_SEARCH_INDEX'	=> 'Søk index',
	'ACP_SEARCH_SETTINGS'	=> 'Søkeinnstillinger',
	'ACP_SECURITY_SETTINGS'	=> 'Sikkerhetsinnstillinger',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverkonfigurasjon',
	'ACP_SERVER_SETTINGS'	=> 'Serverinnstillinger',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signaturer',
	'ACP_SMILIES'	=> 'Smilies',
	'ACP_STYLE_COMPONENTS'	=> 'Forumdesign komponenter',
	'ACP_STYLE_MANAGEMENT'	=> 'Forumdesign administrasion',
	'ACP_STYLES'	=> 'Forumdesign',
	'ACP_TEMPLATES'	=> 'Templater',
	'ACP_THEMES'	=> 'Temaer',
	'ACP_UPDATE'	=> 'Oppdating',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Brukernes forumrettigheter',
	'ACP_USERS_LOGS'	=> 'Brukerlogg',
	'ACP_USERS_PERMISSIONS'	=> 'Brukerrettigheter',
	'ACP_USER_ATTACH'	=> 'Vedlegg',
	'ACP_USER_AVATAR'	=> 'Avatar',
	'ACP_USER_FEEDBACK'	=> 'Tilbakemelding',
	'ACP_USER_GROUPS'	=> 'Grupper',
	'ACP_USER_MANAGEMENT'	=> 'Brukeradministrasion',
	'ACP_USER_OVERVIEW'	=> 'Oversikt',
	'ACP_USER_PERM'	=> 'Brukerrettigheter',
	'ACP_USER_PREFS'	=> 'Brukerinnstillinger',
	'ACP_USER_PROFILE'	=> 'Profil',
	'ACP_USER_RANK'	=> 'Rang',
	'ACP_USER_ROLES'	=> 'Brukerrolle',
	'ACP_USER_SECURITY'	=> 'Brukersikkerhet',
	'ACP_USER_SIG'	=> 'Signatur',
	'ACP_VC_SETTINGS'	=> 'Spambeskyttelse',
	'ACP_VC_CAPTCHA_DISPLAY'	=> 'CAPTCHA bilde prøve',
	'ACP_VERSION_CHECK'	=> 'Sjekk for oppdateringer',
	'ACP_VIEW_ADMIN_PERMISSIONS'	=> 'Se administrative rettigheter',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Se forum moderatorrettigheter',
	'ACP_VIEW_FORUM_PERMISSIONS'	=> 'Se forum-baserte rettigheter',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Se global moderatorrettigheter',
	'ACP_VIEW_USER_PERMISSIONS'	=> 'Se brukerrettigheter',
	'ACP_WORDS'	=> 'Ord sensur',
	'ACTION'	=> 'Handling',
	'ACTIONS'	=> 'Handlinger',
	'ACTIVATE'	=> 'Aktiver',
	'ADD'	=> 'Legg til',
	'ADMIN'	=> 'Administration',
	'ADMIN_INDEX'	=> 'Adminforside',
	'ADMIN_PANEL'	=> 'Administrasjonpanel',
	'BACK'	=> 'Tilbake',
	'COLOUR_SWATCH'	=> 'Websikre farver',
	'CONFIG_UPDATED'	=> 'Konfigurasjonen oppdatert suksessfullt.',
	'DEACTIVATE'	=> 'Deaktiver',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Den inntastede sti "%s" eksisterer ikke.',
	'DIRECTORY_NOT_DIR'	=> 'Den inntastede sti "%s" er ikke en mappe.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Den inntastede sti "%s" er ikke skrivbar.',
	'DISABLE'	=> 'Slå av',
	'DOWNLOAD'	=> 'Last ned',
	'DOWNLOAD_AS'	=> 'Last ned som',
	'DOWNLOAD_STORE'	=> 'Last ned eller lagre fil',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Du kan laste ned filen direkte eller lagre den i phpBB <samp>store/</samp> mappe.',
	'EDIT'	=> 'Rediger',
	'ENABLE'	=> 'Slå på',
	'EXPORT_DOWNLOAD'	=> 'Last ned',
	'EXPORT_STORE'	=> 'Lagre å disk',
	'GENERAL_OPTIONS'	=> 'Generelle valg',
	'GENERAL_SETTINGS'	=> 'Generelle innstillinger',
	'GLOBAL_MASK'	=> 'Globale rettigheter mask',
	'INSTALL'	=> 'Installer',
	'IP'	=> 'Bruker IP',
	'IP_HOSTNAME'	=> 'IP adresser eller hostnavn',
	'LOGGED_IN_AS'	=> 'Du er logget inn som:',
	'LOGIN_ADMIN'	=> 'For å kunne administrere forumet, må du være identifisert som bruker med riktige rettigheter.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Du må taste inn ditt passord igjen for å få tilgang til administratorkontrollpanelet.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Du har igjen identifisert deg og videresendes nå til administratorkontrollpanelet.',
	'LOOK_UP_FORUM'	=> 'Velg et forum',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Du kan velge mer enn et forum.',
	'MANAGE'	=> 'Administrator',
	'MENU_TOGGLE'	=> 'Skjul eller vis sidemeny',
	'MOVE_DOWN'	=> 'Flytt ned',
	'MOVE_UP'	=> 'Flytt opp',
	'NOTIFY'	=> 'Bekjentgjørelse',
	'NO_ADMIN'	=> 'Du har ikke rettigheter til å administrere dette forumet.',
	'NO_EMAILS_DEFINED'	=> 'Kunne ikke finne gyldig emailadresser.',
	'NO_PASSWORD_SUPPLIED'	=> 'Du mø taste inn ditt passord for å få tilgang til administratorkontrolpanelet.',
	'OFF'	=> 'Slått av',
	'ON'	=> 'Slått på',
	'PARSE_BBCODE'	=> 'Analyser BBCode',
	'PARSE_SMILIES'	=> 'Analyser smilies',
	'PARSE_URLS'	=> 'Analyser linker',
	'PERMISSIONS_TRANSFERRED'	=> 'Rettigheter overført',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Du er nå blitt tildelt rettighetene fra %1$s. og kan se på forumet med dennes rettigheter, og du kan derfor ikke få tilgang til administratorkontrolpanelet. Du kan når som helst <a href="%2$s"><strong>gå tilbake til ditt eget sett av rettigheter</strong></a>.',
	'PIXEL'	=> 'px',
	'PROCEED_TO_ACP'	=> '%sFortsett til administrasjonspanelet%s',
	'REMIND'	=> 'Påmind',
	'RESYNC'	=> 'Resynkroniser',
	'RETURN_TO'	=> 'Gå tilbake til ...',
	'SELECT_ANONYMOUS'	=> 'Velg annonym bruker',
	'SELECT_OPTION'	=> 'Valg',
	'UCP'	=> 'Brukerkontrollpanel',
	'USERNAMES_EXPLAIN'	=> 'Skriv alle brukernavn på en egen linie.',
	'USER_CONTROL_PANEL'	=> 'Bruker kontrollpanel',
	'WARNING'	=> 'Advarsel',
	'ACP_PHP_INFO_EXPLAIN'	=> 'Denne siden informerer om versjon og innstillinger for PHP (funktionen phpinfo()) installert på denne server. PHP-innstillinger omfatter versjonsinformasjon, informasjon om innleste moduler, tilgjengelige variabler og standardinnstillinger, som er egnet til å diagnotisere problemer.<br />Vær oppmerksom på at noen hoster er av sikkerhetshensyn har satt grenser for hvilken informasjon som blir vist med PHP-innstillinger.<br />
<b>Et godt råd</b>: Gi aldri informasjon om serverens PHP-innstillinger til andre, med mindre du blir spurt av <a href="http://www.phpbb.com/about/team/">officielle supportmedlemmer på www.phpbb.com</a> eller av supportmedlemmer på andre supportforumer. Tenk også på dette i forbindelser med videresending av sånne opplysninger pr. email eller privat beskjed.',
	'NO_PHPINFO_AVAILABLE'	=> 'Informasjoner om din PHP-konfigurasjon kan ikke hentes. Funksjonen phpinfo() er deaktivert av sikkerhetsgrunner.',
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Her listes alle handlinger utført av administratorer. Listen kan sorteres etter brukernavn, dato, IP-adresse eller handlingen. Hvis du har passende rettigheter kan du også tømme listen for de enkelte operasjoner eller rydde hele loggen.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Her listes alle handlinger utført av forumet selv. Listen gir informasjon til å løse problemer, f.eks. ikke-leverete email.  Listen kan sorteres etter brukernavn, dato, IP-adresse eller handling. Hvis du har passende rettigheter kan du også tømme listen for de enkelte operasjoner eller rydde hele loggen.',
	'ACP_MOD_LOGS_EXPLAIN'	=> 'Her listes alle handlinger utført av moderatorer i henholdsvis forum, emner og innlegg, samt handlinger overfor brukere, også utestengelse av disse. Du kan sortere listen etter brukernavn, dato, IP-adresse eller handling. Hvis du har passende rettigheter kan du også tømme listen for de enkelte operasjoner eller rydde hele loggen.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Her listes alle handlinger utført av brukere eller på brukere (rapporter, advarsler og brukernotater).',
	'ALL_ENTRIES'	=> 'Alle tilgang',
	'DISPLAY_LOG'	=> 'Vis tilgang fra forrige',
	'NO_ENTRIES'	=> 'Ingen tilgang er logget i denne perioden.',
	'SORT_IP'	=> 'IP adresser',
	'SORT_DATE'	=> 'Dato',
	'SORT_ACTION'	=> 'Logghendelser',
	'ADMIN_INTRO'	=> 'Takk for at valgte phpBB som din forumløsning. Denne siden gir deg et raskt overblikk over diverse statistikk for forumet ditt, og lar deg også utføre enkelte standardoppgaver raskt og enkelt. Via skillearkene kan du velge det området av forumet som skal administreres. Linkene i menyen til venstre gir deg tilgang til verktøy som lar deg stille inn og kontrollere alle finesser på ditt forum. Du finner tips og instruksjoner under hvert verktøy.
<br><br>
<b>OBS: Den norske språkpakken er nå ferdig korrekturlest og kvalitetssikret for alle filer som vanlige brukere ser. Oversettelsen av administrasjonspanelet er ferdig, men er ikke skikkelig korrekturlest på alle områder enda. Hvis du ønsker å rapportere feil eller hjelpe til, ta kontakt i <a href="http://phpbb.no/forum/">forumet på phpbb.no</a></b>',
	'ADMIN_LOG'	=> 'Administratorlogg',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'De siste 5 handlinger utført av administratorer. Full logg kan vises ved å klikke på linken under "Se administratorlogg". Denne og alle andre logger kan også ses via skillearket "Vedlikehold".',
	'AVATAR_DIR_SIZE'	=> 'Avatarmappens størrelse',
	'BOARD_STARTED'	=> 'Forum opprettet',
	'DATABASE_SERVER_INFO'	=> 'Databaseserver',
	'DATABASE_SIZE'	=> 'Databasestørrelse',
	'FILES_PER_DAY'	=> 'Antall vedleggsfiler pr. dag',
	'FORUM_STATS'	=> 'Forum statistikker',
	'GZIP_COMPRESSION'	=> 'Gzip-komprimering',
	'NOT_AVAILABLE'	=> 'Ikke tilgjengelig',
	'NUMBER_FILES'	=> 'Antall vedleggsfiler',
	'NUMBER_POSTS'	=> 'Antall innlegg',
	'NUMBER_TOPICS'	=> 'Antall emner',
	'NUMBER_USERS'	=> 'Antall brukere',
	'NUMBER_ORPHAN'	=> 'Bortkommne vedleggsfiler',
	'POSTS_PER_DAY'	=> 'Innlegg pr. dag',
	'PURGE_CACHE'	=> 'Tøm cachen',
	'PURGE_CACHE_CONFIRM'	=> 'Er du sikker på du vil tømme cachen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Sletter alt i cachen, dette inkluderer infokapsler i templatefiler og søk.',
	'RESET_DATE'	=> 'Nullstill forumets startdato',
	'RESET_DATE_CONFIRM'	=> 'Er du sikker på at du vil nullstille forumets startdato?',
	'RESET_ONLINE'	=> 'Nullstill flest brukere online',
	'RESET_ONLINE_CONFIRM'	=> 'Er du sikker på at du vil nullstille flest brukere online?',
	'RESYNC_POSTCOUNTS'	=> 'Resynkroniser innleggsteller',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'Bare eksisterende innlegg blir regnet med ved resynkronisereringen, ikke klippte innlegg.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere innleggs telleren?',
	'RESYNC_POST_MARKING'	=> 'Resynkroniser markerte emner',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere markerte emner?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Først avmarkeres alle emner og deretter blir alle emner med aktivitet i de siste seks måneder korrekt markert.',
	'RESYNC_STATS'	=> 'Resynkroniser statistikker',
	'RESYNC_STATS_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere statistikkene?',
	'RESYNC_STATS_EXPLAIN'	=> 'Beregner det samlende antall av innlegg, emner, brukere og filer.',
	'RUN'	=> 'Utfør nå',
	'STATISTIC'	=> 'Statistikk',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynkroniser eller nullstill statistikker',
	'TOPICS_PER_DAY'	=> 'Emner pr. dag',
	'UPLOAD_DIR_SIZE'	=> 'Samlet størrelse på vedleggsfiler',
	'USERS_PER_DAY'	=> 'Brukere pr. dag',
	'VALUE'	=> 'Verdi',
	'VIEW_ADMIN_LOG'	=> 'Se administratorlogg',
	'VIEW_INACTIVE_USERS'	=> 'Se inaktive brukere',
	'WELCOME_PHPBB'	=> 'phpBB - administrasjonspanel',
	'INACTIVE_DATE'	=> 'Inaktiv dato',
	'INACTIVE_REASON'	=> 'Begrunnelse',
	'INACTIVE_REASON_MANUAL'	=> 'Konto deaktiveret av administrator',
	'INACTIVE_REASON_PROFILE'	=> 'Profilinformasjon endret',
	'INACTIVE_REASON_REGISTER'	=> 'Nylig opprettet konto',
	'INACTIVE_REASON_REMIND'	=> 'Tvungen reaktivering av brukerkonto',
	'INACTIVE_REASON_UNKNOWN'	=> 'Ukjent',
	'INACTIVE_USERS'	=> 'Inaktive brukere',
	'INACTIVE_USERS_EXPLAIN'	=> 'Dette er en liste over brukernavn som er registrert, men hvor konto er inaktive. Du kan aktivere, slette eller kontakte disse brukernavn pr. email hvis du ønsker det.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'De siste 10 registrerte medlemmer med inaktive konti. En fullstendig liste er tilgjengelig ved å følge linken nedenfor, der du kan aktivere, slette eller kontakte disse brukernavn pr. email hvis du ønsker det. Listen kan også ses via skillearket "Brukere & Grupper".',
	'NO_INACTIVE_USERS'	=> 'Ingen inaktive brukere',
	'SORT_INACTIVE'	=> 'Inaktiv dato',
	'SORT_LAST_VISIT'	=> 'Siste besøk',
	'SORT_REASON'	=> 'Begrunnelse',
	'SORT_REG_DATE'	=> 'Registreringsdato',
	'USER_IS_INACTIVE'	=> 'Brukernavn er inaktiv',
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>Lagt til eller endret brukernavns rettigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>Lagt til eller endret gruppers brukerrettigheter</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>Lagt til eller endret brukers globale moderatorrettigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>Lagt til eller endret gruppers globale moderatorrettigheter</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>Lagt til eller endret brukeres administratorrettigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>Lagt til eller endret gruppers administratorrettigheter</strong><br />» %s',
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>Lagt til eller endret administratorer</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'	=> '<strong>Lagt til eller endret globale moderatorer</strong><br />» %s',
	'LOG_ACL_ADD_USER_LOCAL_F_'	=> '<strong>Lagt til eller endret brukeres tilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'	=> '<strong>Lagt til eller endret brukeres moderatortilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '<strong>Lagt til eller endret gruppers tilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '<strong>Lagt til eller endret gruppers moderatortilgang til forum</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_MOD_LOCAL_M_'	=> '<strong>Lagt til eller endret moderatorer</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '<strong>Lagt til eller endret forumrettigheter</b fra %1$s<br />» %2$s',
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>Fjernet administratorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'	=> '<strong>Fjernet globale moderatorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'	=> '<strong>Fjernet moderatorer</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '<strong>Fjernet bruker/grupperettigheter</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>Tillatelser overført fra</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>Egne rettigheter gjenopprettet etter bruk av rettigheter fra</strong><br />» %s',
	'LOG_ADMIN_AUTH_FAIL'	=> '<strong>Mislykket forsøk på logginn som administrator</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Vellykket logginn som administrator</strong>',
	'LOG_ATTACH_EXT_ADD'	=> '<strong>Lagt til eller endret vedleggs filtype</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'	=> '<strong>Fjernet vedleggs filtype</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'	=> '<strong>Oppdatert vedleggs filtype</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Lagt til filtypegruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Endret filtypegruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Fjernet filtypegruppe</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'	=> '<strong>Bortkommen fil opplastet til innlegg</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'	=> '<strong>Bortkommne filer slettet</strong><br />» %s',
	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Utestengt brukernavn i Forby-kontrollen</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Utestengt IP-adresse i Forby-kontrollen</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Utestengt email i Forby-kontrollen</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_USER'	=> '<strong>Brukernavn utestengt</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_IP'	=> '<strong>IP-adresse utestengt</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_EMAIL'	=> '<strong>Email utestengt</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_UNBAN_USER'	=> '<strong>Utestengelse av brukernavn er opphært</strong><br />» %s',
	'LOG_UNBAN_IP'	=> '<strong>Utestengelse av IP-adresse er opphært</strong><br />» %s',
	'LOG_UNBAN_EMAIL'	=> '<strong>Utestengelse av emailadresse er opphært</strong><br />» %s',
	'LOG_BBCODE_ADD'	=> '<strong>Lagt til ny BBkode</strong><br />» %s',
	'LOG_BBCODE_EDIT'	=> '<strong>Endret BBkode</strong><br />» %s',
	'LOG_BBCODE_DELETE'	=> '<strong>Slettet BBkode</strong><br />» %s',
	'LOG_BOT_ADDED'	=> '<strong>Ny robot lagt til</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Slettet robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Nåværende robot oppdatert</strong><br />» %s',
	'LOG_CLEAR_ADMIN'	=> '<strong>Adminlogg tømt</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Feil logg tømt</strong>',
	'LOG_CLEAR_MOD'	=> '<strong>Moderatorlogg tømt</strong>',
	'LOG_CLEAR_USER'	=> '<strong>Brukerlogg tømt</strong><br />» %s',
	'LOG_CLEAR_USERS'	=> '<strong>Brukerlogg tømt</strong>',
	'LOG_CONFIG_ATTACH'	=> '<strong>Endret innstillinger for vedleggs filer</strong>',
	'LOG_CONFIG_AUTH'	=> '<strong>Endret innstillinger for autentifikation</strong>',
	'LOG_CONFIG_AVATAR'	=> '<strong>Endret avatar innstillinger</strong>',
	'LOG_CONFIG_COOKIE'	=> '<strong>Endret cookie innstillinger</strong>',
	'LOG_CONFIG_EMAIL'	=> '<strong>Endret email innstillinger</strong>',
	'LOG_CONFIG_FEATURES'	=> '<strong>Endret forum finesser</strong>',
	'LOG_CONFIG_LOAD'	=> '<strong>Endret innstillinger for serverbelastning</strong>',
	'LOG_CONFIG_MESSAGE'	=> '<strong>Endret innstillinger for privat melding</strong>',
	'LOG_CONFIG_POST'	=> '<strong>Endret innstillinger for innlegg</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Endret innstillinger for brukernavn registrering</strong>',
	'LOG_CONFIG_SEARCH'	=> '<strong>Endret søke innstillinger</strong>',
	'LOG_CONFIG_SECURITY'	=> '<strong>Endret sikkerhets innstillinger</strong>',
	'LOG_CONFIG_SERVER'	=> '<strong>Endret server innstillinger</strong>',
	'LOG_CONFIG_SETTINGS'	=> '<strong>Endret forum innstillinger</strong>',
	'LOG_CONFIG_SIGNATURE'	=> '<strong>Endret signatur innstillinger</strong>',
	'LOG_CONFIG_VISUAL'	=> '<strong>Endret innstillinger for visuel bekreftelse</strong>',
	'LOG_APPROVE_TOPIC'	=> '<strong>Godkjent emne</strong><br />» %s',
	'LOG_BUMP_TOPIC'	=> '<strong>Emne plasert øverst av brukernavn</strong><br />» %s',
	'LOG_DELETE_POST'	=> '<strong>Slettet innlegg</strong><br />» %s',
	'LOG_DELETE_TOPIC'	=> '<strong>Slettet emne</strong><br />» %s',
	'LOG_FORK'	=> '<strong>Kopiert emne</strong><br />» fra %s',
	'LOG_LOCK'	=> '<strong>Låst emne</strong><br />» %s',
	'LOG_LOCK_POST'	=> '<strong>Låst innlegg</strong><br />» %s',
	'LOG_MERGE'	=> '<strong>Emner sammenlagt</strong> i emnet<br />» %s',
	'LOG_MOVE'	=> '<strong>Flyttet emne</strong><br />» fra %s',
	'LOG_POST_APPROVED'	=> '<strong>Godkjent innlegg</strong><br />» %s',
	'LOG_POST_DISAPPROVED'	=> '<strong>Avist innlegg "%1$s" med denne begrundelse</strong><br />» %2$s',
	'LOG_POST_EDITED'	=> '<strong>Redigeret innlegg "%1$s" skrevet av</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'	=> '<strong>Lukket rapport</strong><br />» %s',
	'LOG_REPORT_DELETED'	=> '<strong>Slettet rapport</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'	=> '<strong>Flyttet delte innlegg</strong><br />» til %s',
	'LOG_SPLIT_SOURCE'	=> '<strong>Delte innlegg</strong><br />» fra %s',
	'LOG_TOPIC_DELETED'	=> '<strong>Slettet emne</strong><br />» %s',
	'LOG_TOPIC_APPROVED'	=> '<strong>Godkjent emne</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'	=> '<strong>Avist emne "%1$s" med denne begrundelse</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'	=> '<strong>Resynkronisert emneteller</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Skiftet emnetype</strong><br />» %s',
	'LOG_UNLOCK'	=> '<strong>Gjenåpnet emne</strong><br />» %s',
	'LOG_UNLOCK_POST'	=> '<strong>Gjenåpnet innlegg</strong><br />» %s',
	'LOG_DISALLOW_ADD'	=> '<strong>Lagt til avist brukernavn</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Slettet avist brukernavn</strong>',
	'LOG_DB_BACKUP'	=> '<strong>Databasebackup udført</strong>',
	'LOG_DB_DELETE'	=> '<strong>Databasebackup slettet</strong>',
	'LOG_DB_RESTORE'	=> '<strong>Database gjenopprettet</strong>',
	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Utestengt IP-adresse/vært i downloadlisten</strong><br />» %s',
	'LOG_DOWNLOAD_IP'	=> '<strong>Lagt til IP-adresse/host til downloadlisten</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Fjernet IP-adresse/host fra downloadlisten</strong><br />» %s',
	'LOG_ERROR_JABBER'	=> '<strong>Jabberfeil</strong><br />» %s',
	'LOG_ERROR_EMAIL'	=> '<strong>Emailfeil</strong><br />» %s',
	'LOG_FORUM_ADD'	=> '<strong>Nytt forum opprettet</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'	=> '<strong>Slettet forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'	=> '<strong>Slettet forum og underforum</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'	=> '<strong>Slettet forum og flyttet underforum</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'	=> '<strong>Slettet forum og flyttet innlegg </strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'	=> '<strong>Slettet forum og underforum, flyttet beskjeder</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Slettet forum, flyttet innlegg</strong> til %1$s <strong>og underforum</strong> til %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'	=> '<strong>Slettet forum og beskjeder</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'	=> '<strong>Slettet forum, beskjeder og underforum</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'	=> '<strong>Slettet forum og beskjeder, flyttet underforum</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'	=> '<strong>Endret forumdetaljer</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'	=> '<strong>Flyttet forum</strong> %1$s <strong>ned under</strong> %2$s',
	'LOG_FORUM_MOVE_UP'	=> '<strong>Flyttet forum</strong> %1$s <strong>opp over</strong> %2$s',
	'LOG_FORUM_SYNC'	=> '<strong>Synkronisert forum</strong><br />» %s',
	'LOG_GROUP_CREATED'	=> '<strong>Ny brukergruppe opprettet</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Gruppen "%1$s" er endret til standardgruppe for</strong><br />» %2$s',
	'LOG_GROUP_DELETE'	=> '<strong>Brukergruppe slettet</strong><br />» %s',
	'LOG_GROUP_DEMOTED'	=> '<strong>Gruppeleder degraderet i brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Medlemmer forfremmet til leder i brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'	=> '<strong>Medlemmer fjernet fra brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'	=> '<strong>Brukergruppedetaljer oppdateret</strong><br />» %s',
	'LOG_MODS_ADDED'	=> '<strong>Lagt til nye ledere i brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Medlemmer godkjent i brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'	=> '<strong>Lagt til nye medlemmer i brukergruppen</strong> %1$s<br />» %2$s',
	'LOG_IMAGESET_ADD_DB'	=> '<strong>Lagt til ny bildepakke til database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'	=> '<strong>Lagt til ny bildepakke til filsystemet</strong><br />» %s',
	'LOG_IMAGESET_DELETE'	=> '<strong>Slettet bildepakke</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Endret bildepakkedetaljer</strong><br />» %s',
	'LOG_IMAGESET_EDIT'	=> '<strong>Endret bildepakke</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'	=> '<strong>Eksporteret bildepakke</strong><br />» %s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Igjeninnlest "%2$s" språkspesifikk bildepakke</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Igjeninnlest bildepakke</strong><br />» %s',
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivert inaktive brukere</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Slettet inaktive brukere</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sendt påminnelser pr. email til inaktive brukere</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertert fra %1$s til phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installert phpBB %s</strong>',
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Misslykket feil av session IP-adresse/Browser/X-FORWARDED_FOR</strong><br />»Brukerens IP-adresse "<em>%1$s</em>" sjekket mod sessions IP-adresse "<em>%2$s</em>", brukerens browser-streng "<em>%3$s</em>" sjekket mod sessions browser-streng "<em>%4$s</em>" og brukerens X_FORWARDED_FOR streng "<em>%5$s</em>" sjekket mod session X_FORWARDED_FOR streng "<em>%6$s</em>".',
	'LOG_JAB_CHANGED'	=> '<strong>Jabberkonto Endret</strong>',
	'LOG_JAB_PASSCHG'	=> '<strong>Jabber passord Endret</strong>',
	'LOG_JAB_REGISTER'	=> '<strong>Jabberkonto registrert</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber innstillinger Endret</strong>',
	'LOG_LANGUAGE_PACK_DELETED'	=> '<strong>Slettet språkpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Innsatt språkpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'	=> '<strong>Språkpakkedetaljer oppdateret</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Språkfiler utskiftet</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Språkfil innsendt og plasert i lagringsmappen</strong><br />» %s',
	'LOG_MASS_EMAIL'	=> '<strong>Sent mass e-mail</strong><br />» %s',
	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Skiftet innlegg i emne "%1$s"</strong><br />» fra %2$s til %3$s',
	'LOG_MODULE_DISABLE'	=> '<strong>Modul slått av</strong><br />» %s',
	'LOG_MODULE_ENABLE'	=> '<strong>Modul slått på</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul flyttet ned</strong><br />» %1$s under %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul flyttet opp</strong><br />» %1$s over %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul fjernet</strong><br />» %s',
	'LOG_MODULE_ADD'	=> '<strong>Modul lagt til</strong><br />» %s',
	'LOG_MODULE_EDIT'	=> '<strong>Modul Endret</strong><br />» %s',
	'LOG_A_ROLE_ADD'	=> '<strong>Admin-rolle lagt til</strong><br />» %s',
	'LOG_A_ROLE_EDIT'	=> '<strong>Admin-rolle endret</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin-rolle fjernet</strong><br />» %s',
	'LOG_F_ROLE_ADD'	=> '<strong>Forumrolle lagt til</strong><br />» %s',
	'LOG_F_ROLE_EDIT'	=> '<strong>Forumrolle endret</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forumrolle fjernet</strong><br />» %s',
	'LOG_M_ROLE_ADD'	=> '<strong>Moderatorrolle lagt til</strong><br />» %s',
	'LOG_M_ROLE_EDIT'	=> '<strong>Moderatorrolle endret</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatorrolle fjernet</strong><br />» %s',
	'LOG_U_ROLE_ADD'	=> '<strong>Brukerrang lagt til</strong><br />» %s',
	'LOG_U_ROLE_EDIT'	=> '<strong>Brukerrang Endret</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Brukerrang fjernet</strong><br />» %s',
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profilfelt aktivert</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'	=> '<strong>Profilfelt lagt til</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profilfelt inaktivert</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'	=> '<strong>Profilfelt endret</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'	=> '<strong>Profilfelt fjernet</strong><br />» %s',
	'LOG_PRUNE'	=> '<strong>Klippet i forum</strong><br />» %s',
	'LOG_AUTO_PRUNE'	=> '<strong>Auto-klippte foum</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'	=> '<strong>Bruker inaktivert</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Slettet klippte brukere og innlegg</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Beholdte klippte brukere og innlegg</strong><br />» %s',
	'LOG_PURGE_CACHE'	=> '<strong>Tømt cache</strong>',
	'LOG_RANK_ADDED'	=> '<strong>Ny rang lagt til</strong><br />» %s',
	'LOG_RANK_REMOVED'	=> '<strong>Rang slettet</strong><br />» %s',
	'LOG_RANK_UPDATED'	=> '<strong>Rang oppdatert</strong><br />» %s',
	'LOG_REASON_ADDED'	=> '<strong>Lagt til avisningsbegrunnelse</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Fjernet avisningsbegrunnelse</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Oppdatert avisningsbegrunnelse</strong><br />» %s',
	'LOG_RESET_DATE'	=> '<strong>Forumets startdato nullstillt</strong>',
	'LOG_RESET_ONLINE'	=> '<strong>"Flest brukere online" er nullstillt</strong>',
	'LOG_RESYNC_POSTCOUNTS'	=> '<strong>Innleggsteller for brukere resynkronisert</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Prikkede emner resynkronisert</strong>',
	'LOG_RESYNC_STATS'	=> '<strong>Innlegg-, emne- og bruker statistikker resynkronisert</strong>',
	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Søkeindeks opprettet for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Søkeindeks fjernet for</strong><br />» %s',
	'LOG_STYLE_ADD'	=> '<strong>Nytt forumdesign lagt til</strong><br />» %s',
	'LOG_STYLE_DELETE'	=> '<strong>Forumdesign slettet</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Forumdesign endret</strong><br />» %s',
	'LOG_STYLE_EXPORT'	=> '<strong>Forumdesign eksportert</strong><br />» %s',
	'LOG_TEMPLATE_ADD_DB'	=> '<strong>Lagt til ny templateinnstilling til database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'	=> '<strong>Lagt til ny templateinnstilling i filsystemet</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Ryddet cache-versjoner av templatefiler i templateinnstilling <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'	=> '<strong>Slettet templateinnstilling</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'	=> '<strong>Endret templateinnstilling <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'	=> '<strong>Endret templatedetaljer</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'	=> '<strong>Eksportert templateinnstilling</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'	=> '<strong>Fornyet templateinnstilling</strong><br />» %s',
	'LOG_THEME_ADD_DB'	=> '<strong>Lagt til nytt tema til database</strong><br />» %s',
	'LOG_THEME_ADD_FS'	=> '<strong>Lagt til nytt tema på filsystemet</strong><br />» %s',
	'LOG_THEME_DELETE'	=> '<strong>Tema slettet</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Endret temadetaljer</strong><br />» %s',
	'LOG_THEME_EDIT'	=> '<strong>Endret tema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'	=> '<strong>Endret tema <i>%1$s</i></strong><br />» modifisert fil <i>%2$s</i>',
	'LOG_THEME_EXPORT'	=> '<strong>Eksportert tema</strong><br />» %s',
	'LOG_THEME_REFRESHED'	=> '<strong>Igjeninnlest tema</strong><br />» %s',
	'LOG_UPDATE_DATABASE'	=> '<strong>Database oppdatert fra versjon %1$s til versjon %2$s</strong>',
	'LOG_UPDATE_PHPBB'	=> '<strong>phpBB oppdatert fra versjon %1$s til versjon %2$s</strong>',
	'LOG_USER_ACTIVE'	=> '<strong>Bruker aktivert</strong><br />» %s',
	'LOG_USER_BAN_USER'	=> '<strong>Brukernavn utestengt via brukeradmin </strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_IP'	=> '<strong>IP-adresse utestengt via brukeradmin</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Email utestengt via brukeradmin</strong> på grunn av "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_DELETED'	=> '<strong>Brukernavn slettet</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Fjernet alle brukeres vedlegg</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Fjernet brukerens avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Fjernet alle brukeres innlegg</strong><br />» %s',
	'LOG_USER_DEL_SIG'	=> '<strong>Fjernet brukerens signatur</strong><br />» %s',
	'LOG_USER_INACTIVE'	=> '<strong>Brukeren er deaktivert</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Flyttet brukerens innlegg</strong><br />» postet av "%1$s" til forum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Skiftet brukerens passord</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Tvunget brukerens konto til reaktivering</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Brukern "%1$s" har skiftet email</strong><br />» fra "%2$s" til "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Skiftet brukernavn</strong><br />» fra "%1$s" til "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Brukerdetaljer er oppdatert</strong><br />» %s',
	'LOG_USER_ACTIVE_USER'	=> '<strong>Brukerkonto aktivert</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Brukeravatar fjernet</strong>',
	'LOG_USER_DEL_SIG_USER'	=> '<strong>Brukersignatur fjernet</strong>',
	'LOG_USER_FEEDBACK'	=> '<strong>Lagt til bruker tilbakemelding</strong><br />» %s',
	'LOG_USER_GENERAL'	=> '<strong>Inngang lagt til:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Brukerkonto deaktivert</strong>',
	'LOG_USER_LOCK'	=> '<strong>Bruker stengt eget emne</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Alle innlegg flyttet til forumet</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Tvunget brukerkonto til reaktivering</strong>',
	'LOG_USER_UNLOCK'	=> '<strong>Bruker låst opp eget emne</strong><br />» %s',
	'LOG_USER_WARNING'	=> '<strong>Lagt til brukeradvarsel</strong><br />» %s',
	'LOG_USER_WARNING_BODY'	=> '<strong>Følgende advarsel ble sendt til denne brukern</strong><br />» %s',
	'LOG_USER_GROUP_CHANGE'	=> '<strong>Bruker skiftet standard gruppe</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'	=> '<strong>Bruker degradert som leder av brukergruppen</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'	=> '<strong>Bruker søker seg til gruppe</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Bruker søker seg til gruppe og behøver godkjenning</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'	=> '<strong>Bruker utmeldt av gruppe</strong><br />» %s',
	'LOG_WORD_ADD'	=> '<strong>Lagt til ordsensur</strong><br />» %s',
	'LOG_WORD_DELETE'	=> '<strong>Slettet ordsensur</strong><br />» %s',
	'LOG_WORD_EDIT'	=> '<strong>Endret ordsensur</strong><br />» %s',
));

?>