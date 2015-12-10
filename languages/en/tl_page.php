<?php
/**
 * og_tags
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2015 Thorsten Gading
 *
 * @copyright 	Thorsten Gading 2015 <http://www.tossn.de/>
 * @author 		Thorsten Gading <http://www.tossn.de/>
 * @link 		http://www.tossn.de
 * @package 	OgTags
 * @license 	LGPL
 */


if (!defined('TL_ROOT')) die('You can not access this file directly!');

$GLOBALS['TL_LANG']['tl_page']['og_tags_legend'] = 'Open Graph Protocol';

$GLOBALS['TL_LANG']['tl_page']['ogTagsEnable'] = array('Open graph protocol meta tags', 'Add open graph protocol meta tags.');
$GLOBALS['TL_LANG']['tl_page']['ogTitle'] = array('Page title', 'Please enter a page title.');
$GLOBALS['TL_LANG']['tl_page']['ogType'] = array('Type', 'Please enter a page type.');
$GLOBALS['TL_LANG']['tl_page']['ogImage'] = array('Image', 'Please choose a image.');
$GLOBALS['TL_LANG']['tl_page']['ogDescription'] = array('Page description', 'Please enter a page description.');
$GLOBALS['TL_LANG']['tl_page']['ogAudio'] = array('Audio file', 'Here you can choose a audio image.');
$GLOBALS['TL_LANG']['tl_page']['ogVideo'] = array('Video file', 'Here you can choose a video image.');
$GLOBALS['TL_LANG']['tl_page']['ogDeterminer'] = array('Determiner', 'The word that appears before this object\'s title in a sentence. An enum of (a, an, the, "" (blank), auto). If auto is chosen, the consumer of your data should chose between "a" or "an".');
$GLOBALS['TL_LANG']['tl_page']['ogLocale'] = array('Locale', 'Please enter the locale of the format language_TERRITORY according to the ISO-639-1 standard (e.g. "de_DE" for German or "en_US" for American English).');
$GLOBALS['TL_LANG']['tl_page']['ogLocaleAlternate'] = array('Alternate locale', 'Please enter the alternate locale of the format language_TERRITORY according to the ISO-639-1 standard (e.g. "de_DE" for German or "en_US" for American English).');

$GLOBALS['TL_LANG']['tl_page']['musicDuration'] = array('The song\'s length in seconds', 'Please enter the song\'s length in seconds.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbum'] = array('The album this song is from', 'Please enter the album this song is from.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumDisc'] = array('Which disc of the album this song is on', 'Please enter which disc of the album this song is on.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumTrack'] = array('Which track this song is', 'Please enter which track this song is.');
$GLOBALS['TL_LANG']['tl_page']['musicAlbumMusician'] = array('The musician that made this song', 'Please enter the musician that made this song.');
$GLOBALS['TL_LANG']['tl_page']['musicReleaseDate'] = array('The date the album was released', 'Please enter the date the album was released.');
$GLOBALS['TL_LANG']['tl_page']['musicCreator'] = array('The creator of this playlist', 'Please enter the creator of this playlist.');

$GLOBALS['TL_LANG']['tl_page']['videoActor'] = array('Actors in the movie', 'Please enter the actors in the movie.');
$GLOBALS['TL_LANG']['tl_page']['videoActorRole'] = array('The role they played', 'Please enter the role they played.');
$GLOBALS['TL_LANG']['tl_page']['videoDirector'] = array('Directors of the movie', 'Please enter the directors of the movie.');
$GLOBALS['TL_LANG']['tl_page']['videoWriter'] = array('Writers of the movie', 'Please enter the writers of the movie.');
$GLOBALS['TL_LANG']['tl_page']['videoDuration'] = array('The movie\'s length in seconds', 'Please enter the the movie\'s length in seconds.');
$GLOBALS['TL_LANG']['tl_page']['videoReleaseDate'] = array('The date the movie was released', 'Please enter the date the movie was released.');
$GLOBALS['TL_LANG']['tl_page']['videoTag'] = array('Tag words associated with this movie', 'Please enter tag words associated with this movie.');
$GLOBALS['TL_LANG']['tl_page']['videoSeries'] = array('Which series this episode belongs to', 'Please enter to which series this episode belongs to.');

$GLOBALS['TL_LANG']['tl_page']['articlePublishedTime'] = array('When the article was first published', 'Please enter when the article was first published.');
$GLOBALS['TL_LANG']['tl_page']['articleModifiedTime'] = array('When the article was last changed', 'Please enter when the article was last changed.');
$GLOBALS['TL_LANG']['tl_page']['articleExpirationTime'] = array('When the article is out of date after', 'Please enter when the article is out of date after.');
$GLOBALS['TL_LANG']['tl_page']['articleAuthor'] = array('Writers of the article', 'Please enter the writers of the article.');
$GLOBALS['TL_LANG']['tl_page']['articleSection'] = array('A high-level section name. E.g. Technology', 'Please enter a high-level section name. E.g. Technology.');
$GLOBALS['TL_LANG']['tl_page']['articleTag'] = array('Tag words associated with this article', 'Please enter tag words associated with this article.');

$GLOBALS['TL_LANG']['tl_page']['bookAuthor'] = array('Author of the book', 'Please enter the author of the book.');
$GLOBALS['TL_LANG']['tl_page']['bookIsbn'] = array('ISBN', 'Please enter the ISBN of the book.');
$GLOBALS['TL_LANG']['tl_page']['bookReleaseDate'] = array('Release date of the book', 'Please enter the release date of the book.');
$GLOBALS['TL_LANG']['tl_page']['bookTag'] = array('Tags', 'Please enter tag words associated with this book.');

$GLOBALS['TL_LANG']['tl_page']['profileFirstName'] = array('First name', 'Please enter the first name.');
$GLOBALS['TL_LANG']['tl_page']['profileLastName'] = array('Last name', 'Please enter the last name.');
$GLOBALS['TL_LANG']['tl_page']['profileUsername'] = array('Username', 'Please enter the username.');
$GLOBALS['TL_LANG']['tl_page']['profileGender'] = array('Gender', 'Please choose the gender.');

$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['website'] = 'Website';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['article'] = 'Article';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['book'] = 'Book';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['profile'] = 'Profile';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music'] = 'Music';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.song'] = 'Music: song';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.album'] = 'Music: album';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.playlist'] = 'Music: playlist';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.radio_station'] = 'Music: radio station';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video'] = 'Video';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.movie'] = 'Video: movie';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.episode'] = 'Video: episode';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.tv_show'] = 'Video: TV show';
$GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.other'] = 'Video: other';

$GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['female'] = 'female';
$GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['male'] = 'male';