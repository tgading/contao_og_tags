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

$GLOBALS['TL_DCA']['tl_page']['config']['onsubmit_callback'][] = array('OgTags\Callback\OgTagsDcaCallback', 'saveOgTags');
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'ogTagsEnable';
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'ogType';
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{og_tags_legend},ogTagsEnable';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogTagsEnable'] = 'ogTitle,ogType,ogImage,ogDescription,ogAudio,ogVideo,ogDeterminer,ogLocale,ogLocaleAlternate';

$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_music.song'] = 'musicDuration,musicAlbum,musicAlbumDisc,musicAlbumTrack,musicAlbumMusician';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_music.album'] = 'musicAlbumMusician,musicReleaseDate';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_music.playlist'] = 'musicCreator';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_music.radio_station'] = 'musicCreator';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_video.movie'] = 'videoActor,videoActorRole,videoDirector,videoWriter,videoDuration,videoReleaseDate,videoTag';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_video.episode'] = 'videoActor,videoActorRole,videoDirector,videoWriter,videoDuration,videoReleaseDate,videoTag,videoSeries';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_video.tv_show'] = 'videoActor,videoActorRole,videoDirector,videoWriter,videoDuration,videoReleaseDate,videoTag';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_video.other'] = 'videoActor,videoActorRole,videoDirector,videoWriter,videoDuration,videoReleaseDate,videoTag';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_article'] = 'articlePublishedTime,articleModifiedTime,articleExpirationTime,articleAuthor,articleSection,articleTag';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_book'] = 'bookAuthor,bookIsbn,bookReleaseDate,bookTag';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ogType_profile'] = 'profileFirstName,profileLastName,profileUsername,profileGender';

$GLOBALS['TL_DCA']['tl_page']['fields']['ogTagsEnable'] = array(
		'label' => &$GLOBALS['TL_LANG']['tl_page']['ogTagsEnable'],
		'inputType' => 'checkbox',
		'eval' => array(
			'tl_class' => 'w50 m12',
			'submitOnChange' => true,
		),
		'sql' => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogTags'] = array(
	'sql' => "longtext NULL",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogTitle'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogTitle'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadTitle'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogType'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogType'],
	'exclude' => true,
	'inputType' => 'select',
	'default' => 'website',
	'options' => array(
		'website' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['website'],
		'article' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['article'],
		'book' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['book'],
		'profile' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['profile'],
		'music' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music'],
		'music.song' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.song'],
		'music.album' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.album'],
		'music.playlist' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.playlist'],
		'music.radio_station' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['music.radio_station'],
		'video' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video'],
		'video.movie' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.movie'],
		'video.episode' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.episode'],
		'video.tv_show' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.tv_show'],
		'video.other' => $GLOBALS['TL_LANG']['tl_page']['og_tags_type_options']['video.other'],
	),
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'submitOnChange' => true,
	),
	'sql' => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogImage'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogImage'],
	'exclude' => true,
	'inputType' => 'fileTree',
	'eval' => array(
		'fieldType' => 'radio',
		'maxlength' => 255,
		'filesOnly' => true,
		'tl_class' => 'clr  wizard',
	),
	'sql' => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogDescription'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogDescription'],
	'exclude' => true,
	'inputType' => 'textarea',
	'search' => true,
	'eval' => array(
		'style' => 'height:60px',
		'tl_class' => 'clr',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadDescription'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogAudio'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogAudio'],
	'exclude' => true,
	'inputType' => 'fileTree',
	'eval' => array(
		'fieldType' => 'radio',
		'maxlength' => 255,
		'filesOnly' => true,
		'tl_class' => 'clr  wizard',
	),
	'sql' => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogVideo'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogVideo'],
	'exclude' => true,
	'inputType' => 'fileTree',
	'eval' => array(
		'fieldType' => 'radio',
		'maxlength' => 255,
		'filesOnly' => true,
		'tl_class' => 'clr  wizard',
	),
	'sql' => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogDeterminer'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogDeterminer'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'',
		'a',
		'an',
		'the',
		'auto',
	),
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadDeterminer'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogLocale'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogLocale'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadLocale'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ogLocaleAlternate'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['ogLocaleAlternate'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadLocaleAlternate'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicDuration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicDuration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicDuration'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicAlbum'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicAlbum'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicAlbum'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicAlbumDisc'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicAlbumDisc'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicAlbumDisc'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicAlbumTrack'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicAlbumTrack'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicAlbumTrack'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicAlbumMusician'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicAlbumMusician'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicAlbumMusician'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicReleaseDate'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicReleaseDate'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'date',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicReleaseDate'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['musicCreator'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['musicCreator'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadMusicCreator'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoActor'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoActor'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoActor'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoActorRole'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoActorRole'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoActorRole'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoDirector'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoDirector'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoDirector'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoWriter'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoWriter'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoWriter'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoDuration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoDuration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoDuration'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoReleaseDate'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoReleaseDate'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'date',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoReleaseDate'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoTag'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoTag'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoTag'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['videoSeries'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['videoSeries'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadVideoSeries'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articlePublishedTime'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articlePublishedTime'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'datim',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticlePublishedTime'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articleModifiedTime'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articleModifiedTime'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'datim',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticleModifiedTime'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articleExpirationTime'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articleExpirationTime'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'datim',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticleExpirationTime'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articleAuthor'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articleAuthor'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticleAuthor'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articleSection'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articleSection'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticleSection'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['articleTag'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['articleTag'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadArticleTag'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['bookAuthor'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['bookAuthor'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadBookAuthor'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['bookIsbn'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['bookIsbn'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadBookIsbn'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['bookReleaseDate'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['bookReleaseDate'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
		'rgxp'=>'datim',
		'datepicker' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadBookReleaseDate'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['bookTag'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['bookTag'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadBookTag'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['profileFirstName'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['profileFirstName'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadProfileFirstName'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['profileLastName'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['profileLastName'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadProfileLastName'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['profileUsername'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['profileUsername'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'maxlength' => 255,
		'tl_class' => 'clr w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadProfileUsername'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['profileGender'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_page']['profileGender'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'' => '',
		'female' => $GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['female'],
		'male' => $GLOBALS['TL_LANG']['tl_page']['og_tags_gender']['male'],
	),
	'eval' => array(
		'tl_class' => 'w50',
		'doNotSaveEmpty' => true,
	),
	'load_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'loadProfileGender'),
	),
	'save_callback' => array(
		array('OgTags\Callback\OgTagsDcaCallback', 'pretendSavingField')
	),
);
