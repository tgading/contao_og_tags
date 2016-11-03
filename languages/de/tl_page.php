<?php
/**
 * og_tags
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2016 Thorsten Gading
 *
 * @copyright 	Thorsten Gading 2016 <http://www.tossn.de/>
 * @author 		Thorsten Gading <http://www.tossn.de/>
 * @link 		http://www.tossn.de
 * @package 	OgTags
 * @license 	LGPL
 */


if (!defined('TL_ROOT')) die('You can not access this file directly!');

$GLOBALS['TL_LANG']['tl_page']['og_tags_legend'] = 'Open Graph Protocol';

$GLOBALS['TL_LANG']['tl_page']['ogTagsEnable'] = array('Open Graph Protocol Metatags', 'Open Graph Protocol Metatags hinzufügen.');
$GLOBALS['TL_LANG']['tl_page']['ogTitle'] = array('Seitentitel', 'Bitte geben Sie den Titel der Seite ein.');
$GLOBALS['TL_LANG']['tl_page']['ogType'] = array('Typ', 'Bitte wählen Sie den Typ der Seite aus.');
$GLOBALS['TL_LANG']['tl_page']['ogImage'] = array('Bild', 'Bitte wählen Sie ein Bild aus.');
$GLOBALS['TL_LANG']['tl_page']['ogDescription'] = array('Beschreibung der Seite', 'Hier können Sie eine kurze Beschreibung der Seite eingeben.');
$GLOBALS['TL_LANG']['tl_page']['ogAudio'] = array('Audio-Datei', 'Hier können Sie eine Audio-Datei auswählen.');
$GLOBALS['TL_LANG']['tl_page']['ogVideo'] = array('Video-Datei', 'Hier können Sie eine Video-Datei auswählen.');
$GLOBALS['TL_LANG']['tl_page']['ogDeterminer'] = array('Determinator', 'Bitte wählen Sie einen Determinator aus.');
$GLOBALS['TL_LANG']['tl_page']['ogLocale'] = array('Sprache', 'Bitte geben Sie die Sprache gemäß des ISO-639-1 Standards ein z.B. &quot;de_DE&quot; für Deutsch oder &quot;en_US&quot; für englisch.');
$GLOBALS['TL_LANG']['tl_page']['ogLocaleAlternate'] = array('Alternativsprache', 'Bitte geben Sie die Alternativsprache gemäß des ISO-639-1 Standards ein z.B. &quot;de_DE&quot; für Deutsch oder &quot;en_US&quot; für englisch.');

$GLOBALS['TL_LANG']['tl_page']['musicDuration'] = array('Die Länge des Songs in Sekunden', 'Bitte geben Sie die Länge des Songs in Sekunden ein.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbum'] = array('Das Album, auf dem dieser Song ist', 'Bitte geben Sie das Album ein, auf dem dieser Song ist.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumDisc'] = array('Auf welcher Scheibe des Albums ist der Song', 'Bitte geben Sie ein, auf welcher Scheibe des Albums sich der Song befindet.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumTrack'] = array('Das wie vielte Lied ist der Song', 'Bitte geben Sie ein, an wievielter Stelle sich der Song auf dem Album befindet.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumMusician'] = array('Von welchem Musiker ist der Song', 'Bitte geben Sie den Musiker ein, von dem der Song ist.');
$GLOBALS['TL_LANG']['tl_page']['musicReleaseDate'] = array('Das Datum, an dem das Album erschienen ist', 'Bitte tragen Sie das Datum ein, an dem das Album erschienen ist.');
$GLOBALS['TL_LANG']['tl_page']['musicCreator'] = array('Wer hat die Playlist erstellt', 'Bitte tragen Sie ein, wer die Playlist erstellt hat.');

$GLOBALS['TL_LANG']['tl_page']['videoActor'] = array('Schauspieler des Films', 'Bitte tragen Sie Schauspieler ein, die in dem Film mitspielen.');
$GLOBALS['TL_LANG']['tl_page']['videoActorRole'] = array('Die Rollen, die die Schauspieler spielen', 'Bitte tragen Sie die Rollen ein, die die Schauspieler spielen.');
$GLOBALS['TL_LANG']['tl_page']['videoDirector'] = array('Regisseur', 'Bitte tragen Sie den Regisseur ein.');
$GLOBALS['TL_LANG']['tl_page']['videoWriter'] = array('Schreiber des Drehbuchs', 'Bitte tragen Sie den Schreiber des Drehbuchs ein.');
$GLOBALS['TL_LANG']['tl_page']['videoDuration'] = array('Länge des Films in Sekunden', 'Bitte tragen Sie die Länge des Films in Sekunden ein.');
$GLOBALS['TL_LANG']['tl_page']['videoReleaseDate'] = array('Erscheinungsjahr des Films', 'Bitte tragen Sie das Erscheinungsjahr des Films ein.');
$GLOBALS['TL_LANG']['tl_page']['videoTag'] = array('Tags', 'Bitte tragen Sie Schlüsselwörter ein.');
$GLOBALS['TL_LANG']['tl_page']['videoSeries'] = array('Zu welcher Serie gehört diese Episode', 'Bitte Tragen Sie ein, zu welcher Serie diese Episode gehört.');

$GLOBALS['TL_LANG']['tl_page']['articlePublishedTime'] = array('Erscheinungszeitpunkt des Artikels', 'Bitte tragen Sie den Erscheinungszeitpunkt des Artikels ein.');
$GLOBALS['TL_LANG']['tl_page']['articleModifiedTime'] = array('Letzte Änderung am Artikel', 'Bitte tragen Sie den Zeitpunkt der letzten Änderung am Artikel ein.');
$GLOBALS['TL_LANG']['tl_page']['articleExpirationTime'] = array('Bis wann ist der Artikel gültig', 'Bitte tragen Sie den Zeitpunkt ein, bis zu dem der Artikel gültig ist.');
$GLOBALS['TL_LANG']['tl_page']['articleAuthor'] = array('Autor des Artikels', 'Bitte tragen Sie den Autor des Artikels ein.');
$GLOBALS['TL_LANG']['tl_page']['articleSection'] = array('Kategorie Begriff', 'Bitte tragen Sie einen Begriff ein, in den der Artikel kategoriesiert werden kann.');
$GLOBALS['TL_LANG']['tl_page']['articleTag'] = array('Tags', 'Bitte Tragen Sie Schlüsselwörter ein.');

$GLOBALS['TL_LANG']['tl_page']['bookAuthor'] = array('Autor des Buchs', 'Bitte tragen Sie den Autor des Buchs ein.');
$GLOBALS['TL_LANG']['tl_page']['bookIsbn'] = array('ISBN', 'Bitte tragen Sie die ISBN des Buchs ein.');
$GLOBALS['TL_LANG']['tl_page']['bookReleaseDate'] = array('Erscheinungsdatum des Buchs', 'Bitte tragen Sie das Erscheinungsdatum des Buchs ein.');
$GLOBALS['TL_LANG']['tl_page']['bookTag'] = array('Tags', 'Bitte Tragen Sie Schlüsselwörter ein.');

$GLOBALS['TL_LANG']['tl_page']['profileFirstName'] = array('Vorname', 'Bitte tragen Sie den Vornamen ein.');
$GLOBALS['TL_LANG']['tl_page']['profileLastName'] = array('Nachname', 'Bitte tragen Sie den Nachnamen ein.');
$GLOBALS['TL_LANG']['tl_page']['profileUsername'] = array('Benutzername', 'Bitte tragen Sie den Benutzernamen ein.');
$GLOBALS['TL_LANG']['tl_page']['profileGender'] = array('Geschlecht', 'Bitte wählen Sie das Geschlecht aus.');

$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['website'] = 'Webseite';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['article'] = 'Artikel';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['book'] = 'Buch';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['profile'] = 'Profil';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music'] = 'Musik';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.song'] = 'Musik: Song';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.album'] = 'Musik: Album';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.playlist'] = 'Musik: Playlist';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.radio_station'] = 'Musik: Radiostation';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video'] = 'Video';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.movie'] = 'Video: Film';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.episode'] = 'Video: Episode';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.tv_show'] = 'Video: TV Show';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.other'] = 'Video: Sonstiges';

$GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['female'] = 'weiblich';
$GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['male'] = 'männlich';
