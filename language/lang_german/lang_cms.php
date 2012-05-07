<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom, Carsten
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// MG CMS - BEGIN
	'CMS_WELCOME' => 'Willkommen bei Icy Phoenix',
	'CMS_THANKS' => 'Danke, dass du <a href="http://www.icyphoenix.de/" title="Icy Phoenix">Icy Phoenix</a> benutzt. Wenn du Hilfe benötigst, besuche unser <a href="http://www.icyphoenix.de/forum.php" title="Support Forum">Support Forum</a>.',
	'BP_Title' => 'Position der Blöcke anlegen',
	'BP_Explain' => 'Von diesem Bedienpanel aus, kannst du die Positionen der Blöcke hinzufügen, bearbeiten und löschen. Die Standard Positionen sind \'header\', \'footer\', \'right\', \'left\' und \'center\'. Diese Positionen sind vom Layout der bestimmten Site Page abhängig. Nur existierende Positionen für die Site Page müssen hier hinzugefügt werden. Positionen Keys die nicht in dem entsprechenden Layout vorhanden sind werden auf der Site Page nicht angezeigt. Jeder Position Tag Key und Charakter muss für jede Site Page einzigartig sein.',
	'BP_Position' => 'Position Charakter',
	'BP_Key' => 'Position Tag Key',
	'BP_Layout' => 'Site Page',
	'BP_Add_Position' => 'Neue Position hinzufügen',
	'No_bp_selected' => 'Keine Position zum bearbeiten ausgewählt',
	'BP_Edit_Position' => 'Bearbeite Block Position',
	'Must_enter_bp' => 'Du musst ein Position Tag Key, Position Charakter und Site Page angeben',
	'BP_updated' => 'Block Position aktualisiert',
	'BP_added' => 'Block Position hinzugefügt',
	'Click_return_bpadmin' => 'Klicke %shier%s, um zur Block Positionen Administration zurückzukehren.',
	'BP_removed' => 'Block Position entfernt',
	'Portal_wide' => 'Globale Blöcke',

	'No_layout_selected' => 'Keine Site Page zum bearbeiten ausgewählt',
	'LAYOUT_TITLE' => 'Standardseiten',
	'LAYOUT_TEXT' => 'Von diesem Bedienpanel aus kannst du die Layout Informationen der Standardseite hinzufügen, bearbeiten oder löschen. Mehrere Site Pages können das gleiche Layout verwenden. Die ausgewählte Layout Template Datei muss im Layout Verzeichnis in deinem Template Verzeichnis liegen. Du solltest nicht die Standard Site Page löschen. Das Löschen einer Site Page löscht auch die Block Positionen und Blöcke die dieser Seite zugeordnet sind. Du kannst auch die Blöcke die jeder Seite zugordnet sind bearbeiten und komplett neue Seiten mit einem gewünschten Name erstellen (z.B.: mypage.php).',
	'Layout_Special_Explain' => 'Erstelle, bearbeite oder lösche Blöcke für Standardseiten deiner Website (z.B. Forum, Themen ansehen, Mitgliederliste, Downloads, Foto-Galerie, usw.).',
	'LAYOUT_NAME' => 'Name',
	'LAYOUT_TEMPLATE' => 'Template Datei',
	'LAYOUT_EDIT' => 'Bearbeite Standardseite',
	'Layout_Page' => 'Seiten-ID',
	'LAYOUT_VIEW' => 'Anzeigen bei',
	'LAYOUT_EDIT_PERM' => 'Bearbeite Berechtigungen',
	'LAYOUT_GLOBAL_BLOCKS' => 'Zeige Globale Blöcke',
	'LAYOUT_PAGE_NAV' => 'Seiten-Navigations-Block (Pfadnavigation)',
	'Must_enter_layout' => 'Du muss einen Namen und eine Template Datei angeben',
	'Layout_updated' => 'Seite aktualisiert',
	'Click_return_layoutadmin' => 'Klicke %shier%s, um zur Seiten Administration zurückzukehren.',
	'Layout_added' => 'Seite hinzugefügt',
	'Layout_removed' => 'Standardseite entfernt',
	'LAYOUT_ADD' => 'Neue Seite hinzufügen',
	'Layout_BP_added' => 'Layout Config Datei verfügbar: Block Position Tags automatisch eingefügt',
	'Layout_default' => 'Standard',
	'Layout_make_default' => 'Zum Standard machen',

	'BLOCKS_TITLE' => 'Blöcke Verwaltung',
	'BLOCKS_TEXT' => 'Von diesem Bedienpanel aus kannst du Blöcke für jede verfügbare Site Page hinzufügen, bearbeiten, löschen und verschieben. Für jede hinzugefügte Block Datei muss ein Block Template vorhanden sein.',
	'BLOCKS_CREATION' => 'Hinzufügen / Bearbeiten Block',
	'BLOCKS_CREATION_01' => 'Hinzufügen / Bearbeiten Block Seite 1 von 2',
	'BLOCKS_CREATION_02' => 'Hinzufügen / Bearbeiten Block Seite 2 von 2',
	'CMS_STANDARD_PAGES' => 'Standardseiten',
	'CMS_CUSTOM_PAGES' => 'Benutzerspezifische Seiten',
	'CMS_CUSTOM_PAGES_ADV' => 'CMS Seiten ADV',
	'CHOOSE_LAYOUT' => 'Seite auswählen',
	'B_TITLE' => 'Titel',
	'B_NAME' => 'Name',
	'B_POSITION' => 'Position',
	'B_ACTIVE' => 'Aktivieren',
	'B_DISPLAY' => 'Inhalt',
	'B_HTML' => 'HTML',
	'B_BBCODE' => 'BBCode',
	'B_TYPE' => 'Typ',
	'B_BORDER' => 'Umrandung anzeigen',
	'B_Border_and_Background' => 'Rahmen und Hintergrund',
	'B_TITLEBAR' => 'Titelleiste anzeigen',
	'B_Titlebar_Content' => 'Titelleiste',
	'B_BACKGROUND' => 'Hintergrund anzeigen',
	'B_LOCAL' => 'Titelleiste beschränken',
	'B_Cache' => 'Cache?',
	'B_Cachetime' => 'Cache Dauer',
	'B_GROUPS' => 'Benutzergruppen',
	'B_ALL' => 'Alle',
	'B_GUESTS' => 'Nur Gäste',
	'B_REG' => 'Registrierte Benutzer',
	'B_MOD' => 'Moderatoren',
	'B_ADMIN' => 'Administratoren',
	'B_NONE' => 'Keiner',
	'B_LAYOUT' => 'Standardseite',
	'B_LAYOUT_EDIT' => 'Bearbeite Page Einstellungen',
	'B_PAGE' => 'Seiten-ID',
	'B_ADD' => 'Block hinzufügen',
	'B_UPDATE' => 'Blöcke aktualisieren',
	'YES' => 'Ja',
	'NO' => 'Nein',
	'ENABLED' => 'Aktiviert',
	'DISABLED' => 'Deaktiviert',
	'B_TEXT' => 'Text',
	'B_FILE' => 'Block Datei',
	'B_MOVE' => 'Verschieben',
	'B_MOVE_UP' => 'nach Oben',
	'B_MOVE_DOWN' => 'nach Unten',
	'B_VIEW_BY' => 'Sichtbar für',
	'B_TEXT_BLOCK' => 'Text oder HTML Block',
	'NO_BLOCKS_AVAILABLE' => 'Keine Blöcke in diesem Layout, klicke auf &quot;Block hinzufügen&quot; um einen zu erstellen',
	'No_blocks_selected' => 'kein Block ausgewählt',
	'B_CONTENT' => 'Inhalt',
	'B_BLOCKFILE' => 'Block Datei',
	'Block_Edit' => 'Block Bearbeitung',
	'Block_updated' => 'Block wurde aktualisiert',
	'Blocks_updated' => 'Blöcke wurden aktualisiert',
	'Must_enter_block' => 'Du musst einen Block Titel eingeben',
	'Block_added' => 'Block wurde hinzugefügt',
	'Blocks_added' => 'Blöcke wurden hinzugefügt',
	'Blocks_duplicated' => 'Blöcke wurden dupliziert',
	'Click_return_blocksadmin' => 'Klicke %shier%s, um zum Block Management zurückzukehren.',
	'Block_removed' => 'Block wurde gelöscht',
	'B_BV_added' => 'Block Config Datei verfügbar: Block Variablen automatisch eingefügt',
	'B_EDIT_BS' => 'Einstellungen bearbeiten',
	'B_EDIT' => 'Bearbeiten',
	'B_DELETE' => 'Löschen',

	'BV_Title' => 'Block Variablen',
	'BV_Explain' => 'Von diesem Bedienpanel aus kannst du die Block Variablen die auf den Standardseiten verwendet werden, hinzufügen, bearbeiten und löschen. Diese Variablen können dann durch die Home Page Konfigurations Seite eingestellt werden um dein Portal zu personalisieren.',
	'BV_Label' => 'Feld Label',
	'BV_Sub_Label' => 'Feld Info',
	'BV_Name' => 'Config Name',
	'BV_Options' => 'Optionen',
	'BV_Values' => 'Feld Werte',
	'BV_Type' => 'Kontroll Typ',
	'BV_Block' => 'Block',
	'BV_Add_Variable' => 'Block Variable hinzufügen',
	'No_bv_selected' => 'Keine weitere Block Variable zum konfigurieren gefunden, klicke auf &quot;Absenden&quot; um diesen Block zu speichern.',
	'BV_Edit_Variable' => 'Block Variable bearbeiten',
	'Must_enter_bv' => 'Du musst ein Feld Label und ein Config Name angeben',
	'BV_updated' => 'Block Variable wurde aktualisiert',
	'BV_added' => 'Block Variable wurde hinzufügt',
	'Click_return_bvadmin' => 'Klicke %shier%s, um zur Block Variablen Konfiguration zurückzukehren.',
	'Config_Name_Explain' => 'Darf kein Leerzeichen haben',
	'Field_Options_Explain' => 'Für Dropdown-Listen vorgeschrieben und<br />für Radio Buttons (Kommagetrennt).',
	'Field_Values_Explain' => 'Für Dropdown-Listen vorgeschrieben und<br />für Radio Buttons (Kommagetrennt).',
	'BV_removed' => 'Block Variable wurde entfernt',

	'Config_updated' => 'Konfiguration wurde aktualisiert',
	'Click_return_config' => 'Klicke %shier%s, um zur Konfiguration zurückzukehren.',
	'Portal_Config' => 'Standardseiten Konfiguration',
	'Portal_Explain' => 'Von diesem Bedienpanel aus, kannst du alle Konfigurationen die für deine Standardseiten benötigt werden, einstellen. Block Variablen die auf dieser Seite gelistet sind, können auf der Block Variablen Config Seite erstellt/aktualisiert werden',
	'Portal_General_Config' => 'Allgemeine Konfiguration',
	'Default_Portal' => 'Standard Site Page',
	'Default_Portal_Explain' => 'Homepage der Seite',
	'Cache_Enabled' => 'Aktiviere Cache System',
	'Cache_Enabled_Explain' => 'Für schnelleres Laden der Standardseiten Information',
	'Confirm_delete_item' => 'Bist du sicher, dass du diesen Eintrag löschen möchtest?',
	'Cache_cleared' => 'Cache Dateien wurden gelöscht',

	'cms_pos_header' => 'Überschrift',
	'cms_pos_headerleft' => 'Links',
	'cms_pos_headercenter' => 'Oben/Center',
	'cms_pos_footercenter' => 'Unten/Center',
	'cms_pos_footerright' => 'Rechts',
	'cms_pos_footer' => 'Seiten Footer',
	'cms_pos_nav' => 'Navigationsleiste',
	'cms_pos_left' => 'Links',
	'cms_pos_center' => 'Center',
	'cms_pos_right' => 'Rechts',
	'cms_pos_xsnews' => 'News (Center)',
	'cms_pos_centerbottom' => 'Unten/Center',
	'cms_pos_toprow' => 'Top',
	'cms_pos_column1' => 'Column 1 (Links)',
	'cms_pos_column2' => 'Column 2 (Rechts)',
	'cms_pos_bottomrow' => 'Unten',
	'cms_pos_gheader' => 'Global Header',
	'cms_pos_gfooter' => 'Global Footer',
	'cms_pos_ghtop' => 'Header Oben',
	'cms_pos_ghbottom' => 'Header Unten',
	'cms_pos_ghleft' => 'Header Mitte (Links)',
	'cms_pos_ghright' => 'Header Mitte (Rechts)',
//	'cms_pos_' => '',

	'cms_block_ads' => 'Werbung',
	'cms_block_ads_tla' => 'Werbung TLA',
	'cms_block_ajax_shoutbox' => 'AJAX Chat',
	'cms_block_album' => 'Foto-Galerie',
	'cms_block_birthdays' => 'Geburtstage',
	'cms_block_calendar' => 'Kalender',
	'cms_block_calendar_events' => 'Termine',
	'cms_block_center_downloads' => 'Downloads',
	'cms_block_clock' => 'Uhr',
	'cms_block_donate' => 'Spenden',
	'cms_block_dyn_menu' => 'Dynamisches Menü',
	'cms_block_flash_news' => 'Flash News',
	'cms_block_forum' => 'News',
	'cms_block_forum_attach' => 'Erweiterte News',
	'cms_block_forum_list' => 'Forum Liste',
	'cms_block_full_search' => 'Komplette Suche',
	'cms_block_global_header' => 'Global Header',
	'cms_block_global_header_simple' => 'Global Header Einfach',
	'cms_block_gsearch' => 'Google Suche',
	'cms_block_gsearch_hor' => 'Google Suche (Horizontal)',
	'cms_block_index' => 'Sitemap',
	'cms_block_jumpbox' => 'Jumpbox',
	'cms_block_kb' => 'Wissensdatenbank',
	'cms_block_links' => 'Links',
	'cms_block_menu' => 'Forum Navigation',
	'cms_block_nav_header' => 'Header',
	'cms_block_nav_links' => 'Sitemap',
	'cms_block_nav_logo' => 'Logo',
	'cms_block_new_downloads' => 'Neue Downloads',
	'cms_block_news' => 'News',
	'cms_block_news_archive' => 'News Archiv',
	'cms_block_news_posters' => 'News Posters',
	'cms_block_online_users' => 'Wer ist online',
	'cms_block_online_users2' => 'Wer ist online',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Spenden',
	'cms_block_plugin_guestbook' => 'Gästebuch',
	'cms_block_poll' => 'Umfrage',
	'cms_block_random_attach' => 'Zufällige Anhänge',
	'cms_block_random_quote' => 'Zufälliges Zitat',
	'cms_block_random_topics' => 'Zufällige Themen',
	'cms_block_random_topics_ver' => 'Zufällige Themen',
	'cms_block_random_user' => 'Zufällige Benutzer',
	'cms_block_recent_articles' => 'Neueste Artikel',
	'cms_block_recent_topics' => 'Neueste Themen',
	'cms_block_recent_topics_wide' => 'Neueste Themen',
	'cms_block_referers' => 'Referer',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Suche',
	'cms_block_sec_menu' => 'Extra Menü',
	'cms_block_sh_visit_counter' => 'Besucherzähler',
	'cms_block_shoutbox' => 'Shoutbox',
	'cms_block_staff' => 'Staff',
	'cms_block_statistics' => 'Statistiken',
	'cms_block_style' => 'Style',
	'cms_block_tags' => 'Tags',
	'cms_block_top_downloads' => 'Besten Downloads',
	'cms_block_top_nav' => 'Top Nav',
	'cms_block_top_posters' => 'Besten Beitragsverfasser',
	'cms_block_user_block' => 'Benutzer Block',
	'cms_block_users_visited' => 'Aktive Benutzer',
	'cms_block_visit_counter' => 'Besucher Zähler',
	'cms_block_welcome' => 'Willkommen',
	'cms_block_wordgraph' => 'Wordgraph',
	'cms_block_xs_news' => 'News',
//	'cms_block_' => '',

	'cms_var_cms_style' => 'CMS moderner Style',
	'cms_var_cms_style_explain' => 'Der moderne Style für das CMS besteht aus einem modernem Layout mit oberem transparentem Navigations-Menü, das über der CMS Verwaltung angebracht ist, während der klassische Style ein seitliches Menü hat.',
	'cms_var_header_width' => 'Globale linke Spalten-Breite',
	'cms_var_header_width_explain' => 'Breite der linken Side-Wide Spalte in Pixeln',
	'cms_var_footer_width' => 'Globale rechte Spalten-Breite',
	'cms_var_footer_width_explain' => 'Breite der rechten Side-Wide Spalte in Pixeln',
	'cms_var_md_cache_file_locking' => 'Cache Datei Blockierung',
	'cms_var_md_cache_file_locking_explain' => 'Kann Cache Korruption unter schlechten Umständen vermeiden',
	'cms_var_md_cache_write_control' => 'Cache Schreib Kontrolle',
	'cms_var_md_cache_write_control_explain' => 'Erkennt einige korrupte Cache Dateien',
	'cms_var_md_cache_read_control' => 'Cache Lese Kontrolle',
	'cms_var_md_cache_read_control_explain' => 'Ein Kontroll-Schlüssel wird in der Cache Datei hinterlegt',
	'cms_var_md_cache_read_type' => 'Cache Lese Kontroll Art',
	'cms_var_md_cache_read_type_explain' => 'Art der Lese-Kontrolle (nur wenn Lese-Kontrolle aktiviert ist)',
	'cms_var_md_cache_filename_protect' => 'Cache Dateinamen Schutz',
	'cms_var_md_cache_filename_protect_explain' => 'Verschlüsselt Cache Datei Namen für höhere Sicherheit',
	'cms_var_md_cache_serialize' => 'Cache Automatische Anordnung',
	'cms_var_md_cache_serialize_explain' => 'Aktiviert / Deaktiviert automatische Anordnung',
//	'cms_var_' => '',

	'CMS_Config_updated' => 'Konfigurations-Update erfolgreich',
	'CMS_Click_return_config' => 'Klicke %shier%s, um zu den Einstellungen zurückzukehren.',
	'CMS_Click_return_cms' => 'Klicke %shier%s, um zur CMS-Verwaltung zurückzukehren.',
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS-Verwaltung',
	'CMS_CONFIG' => 'CMS Konfiguration',
	'CMS_ACP' => 'Bearbeite diese Seite',
	'CMS_PAGES' => 'Standardseiten',
	'CMS_ID' => 'ID',
	'CMS_ACTIONS' => 'Aktionen',
	'CMS_LAYOUT' => 'Layout',
	'CMS_BLOCKS' => 'Blöcke',
	'CMS_NAME' => 'Name',
	'CMS_DESCRIPTION' => 'Beschreibung',
	'CMS_LAYOUT_PAGE_ID' => 'Seiten ID',
	'CMS_LAYOUT_PAGE_ID_EXPLAIN' => 'Dies ist die Seiten ID, die vom  Berechtigungssystem (auth system) benutzt wird. Erlaubte Zeichen: Kleinbuchstaben (ohne ü,ä,ö,ß etc.), Nummern, Unterstriche, aber keine Leerzeichen.',
	'CMS_MUST_FILL_ALL_FIELDS' => 'Du musst alle Felder ausfüllen',
	'CMS_FILENAME' => 'Dateiname',
	'CMS_FILENAME_EXPLAIN' => '<i>(Um eine neue Datei zu erstellen, muss dein Server richtig konfiguriert sein. Sonst wird dieses Feature nicht unterstützt.)</i>',
	'CMS_Filename_Explain_OK' => '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung erlaubt. Darum sollte die Datei automatisch erstellt werden.</i>',
	'CMS_Filename_Explain_NO' => '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung <b>NICHT ERLAUBT</b>. Wenn du eine neue Datei mit einem neuen Namen erstellen möchtest, solltest du deshalb die Datei von Hand erstellen (kopiere die <b>index_empty.php</b> auf deinen Server und benenne sie, wie gewünscht, um). Alternativ kannst du die richtigen Berechtigungen für dein Stammverzeichnis (root) setzen, so dass das Verfahren automatisch ausgeführt werden kann.</i>',
	'CMS_TEMPLATE' => 'Template',
	'CMS_FileAlreadyExists' => 'Die Datei die du gerade versuchst zu erstellen existiert bereits. Bitte wähle einen anderen Dateinamen.',
	'CMS_FileCreationSuccess' => 'Die neue Seite wurde automatisch erstellt.',
	'CMS_FileCreationError' => 'Die Datei konnte nicht erstellt werden.',
	'CMS_FileCreationManual' => 'Bitte erstelle eine Kopie der index_empty.php und gib ihr den Namen den du für die neue Seite verwendet hast. Lade die Datei in dein Stammverzeichnis (root).',
	'CMS_PERMISSIONS' => 'Berechtigungen',
	'CMS_PERMISSIONS_AUTH_EDIT_SET' => 'Berechtigung Seiten zu ändern',
	'CMS_PERMISSIONS_AUTH_EDIT' => 'Berechtigungen bearbeiten',
	'CMS_PERMISSIONS_AUTH_VIEW' => 'Berechtigungen anzeigen',
	'CMS_PERMISSIONS_ROLES' => 'Berechtigungs-Regeln',
	'CMS_Global_Header' => 'Globaler Header',
	'CMS_GLOBAL_BLOCKS' => 'Globale Blöcke',
	'CMS_BREADCRUMBS' => 'Breadcrumbs',
	'CMS_EDIT' => 'Bearbeiten',
	'CMS_DELETE' => 'Löschen',
	'CMS_PREVIEW' => 'Vorschau',
	'CMS_CONFIGURE_BLOCKS' => 'Blöcke einstellen',
	'CMS_PAGES_PERMISSIONS' => 'Sonder-Berechtigungen',
	'CMS_PAGES_PERMISSIONS_EXPLAIN' => 'Auf dieser Seite kannst du den Benutzer-Level einstellen, der für die Seite erforderlich ist. Außerdem kannst du für jede Seite auswählen, ob der Block global angezeigt wird oder nicht (um dieses Feature nutzen zu können, muss &quot;Globale Blöcke&quot; in der <b>CMS Konfiguration</b>) aktiviert sein.',
	'CMS_Page' => 'Seite',
	'CMS_ADS' => 'Banner &amp; Sponsoren',
	'CMS_OWNER' => 'Eigentümer',
	'CMS_SAVE_CHANGES' => 'Änderungen sichern',
	'CMS_CHANGES_SAVED' => 'Änderungen gesichert',
	'CMS_BLOCK_SETTINGS' => 'Parent Blocks',
	'CMS_BLOCK_SETTINGS_TITLE' => 'Parent Blocks',
	'CMS_BLOCK_SETTINGS_TEXT' => 'In this page you can create parent blocks to be used in CMS pages.',
	'CMS_BLOCK_SETTINGS_INSTALL' => 'Create Parent Block',
	'CMS_BLOCK_NAME' => 'Name',
	'CMS_BLOCK_PARENT' => 'Parent block',
	// MG CMS - END

// MG CMS MENU - BEGIN
	'CMS_MENU_PAGE' => 'Dynamisches Menü',
	'CMS_MENU_PAGE_EXPLAIN' => 'Auf dieser Seite kannst du benutzerdefinierte Menüs erstellen, um sie dann auf den CMS Seiten als Block anzuzeigen. Wenn du eine Kategorie oder Link erstellst, kannst du die Sprachschlüssel verwenden oder einen eigenen Namen. Du kannst auch das Berechtigungs-Level auswählen, das zum Aufrufen eines Links benötigt wird und ob der Link im selben oder einem Neuen Fenster geöffnet werden soll.',

	'CMS_Menu_New_Menu' => 'Erstelle einen neuen Menü Block',
	'CMS_Menu_New_cat' => 'Erstelle eine neue Kategorie',
	'CMS_Menu_New_link' => 'Erstelle einen neuen Link',
	'CMS_Menu_Edit_menu_links_button' => 'Bearbeite Links in diesem Menü',
	'CMS_Menu_Edit_cat_button' => 'Bearbeite Kategorie',
	'CMS_Menu_Edit_link_button' => 'Bearbeite Link',
	'CMS_Menu_Set_auth' => 'Berechtigung',
	'CMS_Menu_New_menu_name' => 'Menü-Name',
	'CMS_Menu_New_cat_name' => 'Kategorie-Name',
	'CMS_Menu_New_link_name' => 'Link-Name',
	'CMS_Menu_Default_link' => 'Standard Link (<b>*</b> wird ignoriert)',
	'CMS_Menu_No_default_link' => 'Kein Standard Link (verwende benutzerdefinierte Einstellung)',
	'CMS_MENU_NO_DEFAULT_LINK_SELECT' => '-- Kein Standard Link (verwende benutzerdefinierte Einstellung) --',
	'CMS_Menu_New_menu_des' => 'Menü-Beschreibung',
	'CMS_Menu_New_cat_des' => 'Kategorie-Beschreibung',
	'CMS_Menu_New_link_des' => 'Link-Beschreibung',
	'CMS_Menu_Choose_cat' => 'Wähle Kategorie',
	'CMS_Menu_Choose_cat_desc' => 'Wähle die Kategorie wo der Link angezeigt werden soll.',
	'CMS_Menu_link_status' => 'Status',
	'CMS_Menu_Icon' => 'Icon',
	'CMS_Menu_No_Icon' => 'Kein Icon',
	'CMS_Menu_Standard_Icon' => 'Standard Icon',
	'CMS_Menu_link_external' => 'Externer Link',
	'CMS_Menu_New_link_name_key' => 'Sprach-Variable (in der Datei <b>lang_dyn_menu.php</b> bestimmt)',
	'CMS_Menu_No_lang_key' => 'Keine Sprach-Variable (verwende den angegebenen Namen)',
	'CMS_Menu_New_link_url' => 'URL dieses Links',
	'CMS_Menu_New_cat_link_url' => 'URL dieser Kategorie (wenn keine URL angegeben wird, kannst du die Kategorie auf- und zuklappen um die Beiträge zu sehen)',
	'CMS_Menu_Update' => 'Menü aktualisieren',

	'Click_Return_CMS_Menu' => 'Klicke %shier%s, um zur Menü-Administration zurückzukehren.',

	'Menu_created' => 'Menü wurde erfolgreich erstellt.',
	'Cat_created' => 'Kategorie wurde erfolgreich erstellt.',
	'Link_created' => 'Link wurde erfolgreich erstellt.',
	'Menu_updated' => 'Menü wurde erfolgreich aktualisiert.',
	'Cat_updated' => 'Kategorie wurde erfolgreich aktualisiert.',
	'Link_updated' => 'Link wurde erfolgreich aktualisiert.',
	'Menu_deleted' => 'Menü wurde erfolgreich gelöscht.',
	'Cat_deleted' => 'Kategorie wurde erfolgreich entfernt.',
	'Link_deleted' => 'Link wurde erfolgreich entfernt.',

	'CMS_Menu_Not_Exist' => 'Dieses Menü existiert nicht.',
	'CMS_Menu_Items_Not_Exist' => 'Dieses Menü hat keine Kategorie. Klicke auf hinzufügen, um eine zu erstellen.',
	'CMS_Menu_No_Cats_Exist' => 'Dieser Menü-Block hat keine Kategorie. Bevor du einen Link erstellen kannst, mußt du eine Kategorie anlegen.',
	'CMS_Menu_Item_Not_Exist' => 'Dieser Menü-Eintrag existiert nicht.',
	'CMS_Menu_Item_Add_Edit' => 'Menü-Eintrag hinzufügen / bearbeiten.',
// MG CMS MENU - END

// CMS - ADV - BEGIN
	'CMS_ADV' => 'CMS ADV',
	'CMS_LINKS' => 'Links',
	'CMS_SETTINGS' => 'Einstellungen',
	'CMS_USERS' => 'CMS Benutzer',
	'CMS_ADV_CUSTOM_PAGES' => 'Light Pages',
	'CMS_ADV_DEFAULT_TEMPLATE' => 'Standard',
	'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '-- Template default --',

	'BLOCK_MOVE' => 'Block verschieben',
	'TURN_ACTIVE' => 'Block aktivieren / deaktivieren',
	'TURN_BORDER' => 'Rahmen aktivieren / deaktivieren',
	'TURN_TITLEBAR' => 'Titelleiste aktivieren / deaktivieren',
	'TURN_LOCAL' => 'Location Titel aktivieren / deaktivieren',
	'TURN_BACKGROUND' => 'Hintergrund aktivieren / deaktivieren',

	'BLOCKS_POSITION_SAVE' => 'Blöcke Position sichern',
	'BLOCKS_POSITION_UPDATED' => 'Blöcke Postition erfolgreich gesichert',

	'INVALID_BLOCKS' => 'Ungültige Position der Blöcke',

	'CMS_BLOCK_PAGE' => 'Block hinzufügen / bearbeiten',
	'CMS_BLOCK_CONFIG' => 'Block Konfiguration',
	'CMS_BLOCK_CONFIG_EDIT' => 'Konfiguration ändern',
	'CMS_BLOCK_CONFIG_NO_VARS' => 'Keine Block-Variablen',
	'CMS_AJAX_ENABLE' => 'Aktiviere AJAX',
	'CMS_AJAX_DISABLE' => 'Deaktiviere AJAX',
// CMS - ADV - END

// CMS - TIPS - BEGIN
	'CMS_TIP_TITLE' => 'Haupt CMS Seite',
	'CMS_TIP_CUSTOM_PAGES' => 'Customized pages: all pages created from scratch into Icy Phoenix based on one among the available layouts templates.<br />You can customize each page by adding, editing or deleting blocks and contents.<br />You can also assign a a physical name to a page (if your server allows it, you can create for example a new page called <b>mypage.php</b>).<br />In this section you can also customize permissions and global page settings like breadcrumbs and global blocks.',
	'CMS_TIP_STANDARD_PAGES' => 'Standard pages: default pages in Icy Phoenix.<br />These pages already have a defined content, but you can customize them by adding blocks or content in one of the allowed positions.<br />You can also add new pages, but these must already exists on your server.<br />In this section you can also customize permissions and global page settings like breadcrumbs and global blocks.',
	'CMS_TIP_BLOCK_SETTINGS' => 'A block is a section or widget you can add to any page.<br />Before being able to add a block to a page, you need to create it in this section.<br />Once block content has been defined and saved, you can then add the block on any page.<br />After you have created a new block, you can also add the same block on multiple pages without having to duplicate its content again.',
	'CMS_TIP_GLOBAL_BLOCKS' => 'Global blocks are blocks that could be used on any page without the needs to add them on any page.<br />To be able to display global blocks you need to make sure that the target page has Global Blocks enabled in its settings.',
	'CMS_TIP_AUTH' => 'Berechtigungs-System für CMS und Plugins.',
	'CMS_TIP_CONFIG' => 'CMS Konfiguration: einige Grundeinstellungen für das CMS.',
	'CMS_TIP_MENU' => 'Dieser Abschnitt erlaubt dir das Erstellen und Verwalten von Navigations-Menüs.<br />You can create several navigations menu and then you will be able to add them on any page through the &quot;Dynamic Menu&quot; block (remember to add the right Menu ID).<br />You are also able to set special images and permissions on any link and links categories.',
	'CMS_TIP_ADS' => 'The advertising section is intended to manage common kind of advertising in all pages and in some common sections (like forums, topics and menu).<br />In this section you will be able to create several ads and then you can decide how to be displayed (if more than one ad is set for the same position, then ads will be displayed randomly).',
// CMS - TIPS - END

// CMS USERS
	'CMS_USERS_INDEX' => 'Index',
	'CMS_USERS_LAYOUTS' => 'Pages',
	'CMS_USERS_MENU' => 'Menü',
	'CMS_USERS_MENU_UPPERCASE' => 'MENÜ',
	'CMS_USERS_PROFILE' => 'Profil',
	'CMS_USERS_CONFIG' => 'Konfiguration',
	'CMS_USERS_CONFIG_TEXT' => 'From this page you can edit configuration settings for your CMS and blocks',
	'CMS_USERS_USERLIST' => 'Benutzerliste',
	'CMS_USERS_USERLIST_TEXT' => 'CMS Benutzerliste',
	'CMS_USERS_USERLIST_NEW' => 'Inaktive Benutzer',
	'CMS_USERS_B_GLOBAL' => 'Allen Benutzern erlauben diesen Block zu benutzen.',
	'CMS_USERS_URL' => 'URL',
	'CMS_USERS_ACCOUNT' => 'Konto Typ',
	'CMS_USERS_PAGE_NUMBERS' => 'pages number',
	'CMS_USERS_LAST_UPDATE' => 'Letztes Update',

	'CMS_USER' => 'Benutzername',
	'CMS_AUTH' => 'Berechtigungen',
	'CMS_AUTH_TEXT' => 'In this page you can view and set permissions for administrators, moderators, users and groups. Permissions are based on a simple <samp>YES</samp>/<samp>NO</samp> system. Setting an option to <samp>NEVER</samp> for a user or usergroup overrides any other value assigned to it. If you do not wish to assign a value for an option for this user or group select <samp>NO</samp>. If values are assigned for this option elsewhere they will be used in preference, else <samp>NEVER</samp> is assumed.',
	'CMS_AUTH_XP' => 'Spezial Berechtigungen',
	'CMS_ROLE' => 'Role',
	'CMS_ROLES' => 'Roles',
	'CMS_AUTH_ADD' => 'Benutzer hinzufügen',
	'CMS_SAVE' => 'Speichern',
	'CMS_NO_AUTH' => 'You didn\'t set any special permission',
	'CMS_NO_ROLE' => 'You didn\'t set any role',

	'CMS_PERMISSIONS_ADMINS' => 'Administrators Permissions',
	'CMS_PERMISSIONS_ADMINS_EXPLAIN' => 'View Administrators Permissions',
	'CMS_PERMISSIONS_MODS' => 'Moderators Permissions',
	'CMS_PERMISSIONS_MODS_EXPLAIN' => 'View Moderators Permissions',
	'CMS_PERMISSIONS_CMS_USERS' => 'Users CMS Permissions',
	'CMS_PERMISSIONS_CMS_USERS_EXPLAIN' => 'View Users CMS Permissions',
	'CMS_PERMISSIONS_CMS_GROUPS' => 'Groups CMS Permissions',
	'CMS_PERMISSIONS_CMS_GROUPS_EXPLAIN' => 'View Groups CMS Permissions',
	'CMS_PERMISSIONS_PLUGINS_USERS' => 'Users Plugins Permissions',
	'CMS_PERMISSIONS_PLUGINS_USERS_EXPLAIN' => 'View Users Plugins Permissions',
	'CMS_PERMISSIONS_PLUGINS_GROUPS' => 'Groups Plugins Permissions',
	'CMS_PERMISSIONS_PLUGINS_GROUPS_EXPLAIN' => 'View Groups Plugins Permissions',
	'CMS_PERMISSIONS_USERS' => 'Users Permissions',
	'CMS_PERMISSIONS_USERS_EXPLAIN' => 'View Users Permissions',
	'CMS_PERMISSIONS_GROUPS' => 'Groups Permissions',
	'CMS_PERMISSIONS_GROUPS_EXPLAIN' => 'View Groups Permissions',

	'CMS_AUTH_ADMINS' => 'Administratoren',
	'CMS_AUTH_ADMINS_EXPLAIN' => 'Permissions for users with administration levels',
	'CMS_AUTH_MODS' => 'Moderatoren',
	'CMS_AUTH_MODS_EXPLAIN' => 'Berechtigungen für Moderatoren',
	'CMS_AUTH_CMS_USERS' => 'CMS Benutzer',
	'CMS_AUTH_CMS_USERS_EXPLAIN' => 'Allgemeine CMS Berechtigungen für Benutzer',
	'CMS_AUTH_CMS_GROUPS' => 'CMS Benutzergruppen',
	'CMS_AUTH_CMS_GROUPS_EXPLAIN' => 'Allgemeine CMS Berechtigungen für Benutzergruppen',
	'CMS_AUTH_CMS_USERS_LOCAL' => 'CMS Users [Local]',
	'CMS_AUTH_CMS_USERS_LOCAL_EXPLAIN' => 'Specific CMS permissions for users',
	'CMS_AUTH_CMS_GROUPS_LOCAL' => 'CMS Groups [Local]',
	'CMS_AUTH_CMS_GROUPS_LOCAL_EXPLAIN' => 'Specific CMS permissions for groups',
	'CMS_AUTH_PLUGINS_USERS' => 'Plugins Users',
	'CMS_AUTH_PLUGINS_USERS_EXPLAIN' => 'Global Plugins permissions for users',
	'CMS_AUTH_PLUGINS_GROUPS' => 'Plugins Groups',
	'CMS_AUTH_PLUGINS_GROUPS_EXPLAIN' => 'Global Plugins permissions for groups',
	'CMS_AUTH_USERS' => 'Benutzer',
	'CMS_AUTH_USERS_EXPLAIN' => 'Allgemeine Berechtigungen für Benutzer',
	'CMS_AUTH_GROUPS' => 'Benutzergruppen',
	'CMS_AUTH_GROUPS_EXPLAIN' => 'Allgemeine Berechtigungen für Benutzergruppen',

	'CMS_AUTH_CMS_USERS_GROUPS' => 'CMS',
	'CMS_AUTH_CMS_USERS_GROUPS_EXPLAIN' => 'CMS Berechtigungen für Benutzer und Benutzergruppen',
	'CMS_AUTH_CMS_USERS_GROUPS_LOCAL' => 'CMS [Local]',
	'CMS_AUTH_CMS_USERS_GROUPS_LOCAL_EXPLAIN' => 'CMS specific permissions for users and groups',
	'CMS_AUTH_PLUGINS_USERS_GROUPS' => 'Plugins',
	'CMS_AUTH_PLUGINS_USERS_GROUPS_EXPLAIN' => 'Plugins permissions for users and groups',
	'CMS_AUTH_USERS_GROUPS' => 'Global',
	'CMS_AUTH_USERS_GROUPS_EXPLAIN' => 'Global permissions for users and groups',

	'CMS_USERS_CMS_NEW' => 'Create your site',
	'CMS_USERS_CMS_EDIT' => 'Einstellungen bearbeiten',

	'CMS_USERS_NO_LAYOUT' => 'Page you have selected doesn\'t exist',

	// CMS AJAX
	'COPY_LAYOUT' => 'Seite kopieren',

	'AJAX_ERROR_WRONG_BLOCKS_LOCATION' => 'At least one of blocks had incorrect position. Incorrectly placed blocks were moved to another position.',
	'AJAX_BLOCK_TITLE' => 'Block Title',
	'AJAX_OPTION_ENABLED' => 'Aktiviert',
	'AJAX_OPTION_BORDER' => 'Umrandung',
	'AJAX_OPTION_TITLE' => 'Titel-Leiste',
	'AJAX_OPTION_LOCAL' => 'Titel übersetzen',
	'AJAX_OPTION_BACKGROUND' => 'Hintergrund',
	'AJAX_OPTION_ENABLED_EXPLAIN' => 'Klicke hier, um den Block zu Aktivieren bzw. Deaktivieren.',
	'AJAX_OPTION_BORDER_EXPLAIN' => 'Klicke hier, um die Block-Umrandung zu Aktivieren bzw. Deaktivieren.',
	'AJAX_OPTION_TITLE_EXPLAIN' => 'Klicke hier, um die Titel-Leiste anzuzeigen bzw. auszublenden.',
	'AJAX_OPTION_LOCAL_EXPLAIN' => 'Klicke hier, um die Titel-Übersetzung zu Aktivieren bzw. Deaktivieren (wenn Übersetzung vorhanden).',
	'AJAX_OPTION_BACKGROUND_EXPLAIN' => 'Klicke hier, um den Block-Hintergrund zu Aktivieren bzw. Deaktivieren.',
	'AJAX_TIP_TITLE' => 'Klicke hier, um den Block-Titel zu bearbeiten.',
	'AJAX_TIP_MOVE' => 'Move this block. Press mouse button and move it up, down or to another section of this page, then release mouse button.',
	'AJAX_TIP_MOVE_ALL' => 'Verschiebe alle obigen Blöcke in einen anderen Bereich.',
	'AJAX_TIP_DELETE' => 'Klicke hier, um diesen Blcok zu löschen.',
	'AJAX_TIP_ADD' => 'Neuen Block in diesem Bereich hinzufügen.',
	'AJAX_TIP_CHANGE_TYPE' => 'Klicke hier, um den Inhalt des Blocks zu ändern.',
	'AJAX_TIP_CHANGE_VIEW' => 'Klicke hier, um die Einstellungen zu ändern.',
	'AJAX_BUTTON_CHANGE' => 'Ändern',
	'AJAX_BUTTON_CANCEL' => 'Abbrechen',
	'AJAX_BUTTON_RESTORE' => 'Änderungen rückgängig machen',
	'AJAX_BUTTON_ADD' => 'Block hinzufügen',
	'AJAX_BUTTON_MOVE_ALL' => 'Alle Blöcke verschieben',
	'AJAX_PARENT_BLOCK' => 'Parent Block:',
	'AJAX_PARENT_BLOCK_NONE' => 'k.A.',
	'AJAX_CONFIRM_DELETE' => 'Bist du dir sicher, dass du diesen Block entfernen möchtest? Es kann nicht rückgängig gemacht werden.',
	'AJAX_REMOVED_BLOCK' => 'Der Block wurde gelöscht.',
	'AJAX_SAVING_CHANGES' => 'Änderungen werden gespeichert&hellip;',
	'AJAX_SAVING_CHANGES_DONE' => 'Änderungen speichern&hellip; beendet.',
	'AJAX_STATUS_ADDING' => 'Block hinzufügen, bitte warten&hellip;',
	'AJAX_STATUS_ADDING_ERROR' => 'Fehler beim Block hinzufügen!',
	'AJAX_ERROR_CONNECTION' => 'Error: Cannot connect to server.<br />There might be a technical problem at server, please try again later.',
	'AJAX_ERROR_PARSER' => 'Fehler: Ungültige Antwort vom Server.',
	'AJAX_MANAGE_BLOCKS' => 'Edit Parent Blocks',
	'AJAX_MOVE_ALL_SELECT' => 'Blöcke verschieben nach:',
	'AJAX_SELECT_TYPE' => 'Block-Typ auswählen',
	'AJAX_BLOCK_TYPE' => 'Block-Typ:',
	'AJAX_SELECT_TYPE_FILE' => 'Datei',
	'AJAX_SELECT_TYPE_HTML' => 'HTML Code',
	'AJAX_SELECT_TYPE_BBCODE' => 'Text mit BBCode',
	'AJAX_BLOCK_CONTENT' => 'Module content:',
	'AJAX_VIEWED_BY' => 'Sichtbar für',
	'AJAX_USERGROUPS' => 'Benutzergruppen',
	'AJAX_USERGROUPS_ALL' => 'Alle',
	'AJAX_USERGROUPS_EDIT' => 'Bearbeite Benutzergruppen Liste',
	'AJAX_BLOCK_USED' => 'Dieser Block wird auf folgenden Seiten benutzt:',
	'AJAX_BLOCK_USED_NONE' => 'Dieser Block wird auf keiner Seite benutzt.',
	'AJAX_BLOCK_USED_DELETE' => 'Löschen',
	'AJAX_BLOCK_USED_LAYOUT' => 'Layout:',
	'AJAX_BLOCK_USED_LAYOUT_SPECIAL' => 'Seite:',
	'AJAX_BLOCK_USED_LAYOUT_GLOBAL' => 'Global:',
	'AJAX_BLOCK_USED_CLICK' => 'Klicke hier, um das Layout zu ändern.',
	'AJAX_EDIT_BLOCK_SETTINGS' => 'Block bearbeiten',
	'AJAX_EDIT_BLOCK_SETTINGS_TIP' => 'Klicke den &quot;Block bearbeiten&quot; Button, um die Einstellungen zu bearbeiten.',
	'AJAX_EDIT_BLOCK_SETTINGS_ALT' => 'Edit Parent Block',
	'AJAX_BLOCK_NOT_FOUND' => 'Block wurde nicht gefunden.',

	'AUTH' => array(
		'cms_view' => 'CMS Zugang',
		'cms_edit' => 'CMS Einstellungen',
		'cms_l_add' => 'Seiten hinzufügen',
		'cms_l_edit' => 'Seiten ändern',
		'cms_l_delete' => 'Seiten löschen',
		'cms_b_add' => 'Blöcke hinzufügen',
		'cms_b_edit' => 'Blöcke ändern',
		'cms_b_delete' => 'Blöcke löschen',
	),

	)
);

?>