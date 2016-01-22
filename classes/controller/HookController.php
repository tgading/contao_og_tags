<?php

namespace OgTags\Controller;

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
class HookController extends \Controller {

	/**
	 * @param \Contao\PageModel $objPage
	 * @param \Contao\LayoutModel $objLayout
	 * @param \Contao\PageRegular $objPageRegular
	 * @return void
	 */
	public function addHeadDataAction(\Contao\PageModel $objPage, \Contao\LayoutModel $objLayout, \Contao\PageRegular $objPageRegular) {
		if (isset($objPage->ogTagsEnable) && $objPage->ogTagsEnable) {
			$ogTags = array();
			$ogTags['og:url'] = \Idna::decode(\Environment::get('base')).\Environment::get('indexFreeRequest');
			$ogTags['og:site_name'] = $GLOBALS['TL_CONFIG']['websiteTitle'];
			$ogTags['og:type'] = isset($objPage->ogType) && $objPage->ogType != '' ? $objPage->ogType : '';

			$ogTagData = isset($objPage->ogTags) && $objPage->ogTags != '' ? unserialize($objPage->ogTags) : array();
			if (count($ogTagData) > 0) {
				$tagMapping = include __DIR__.'/../../config/tag_mapping.php';
				foreach ($ogTagData as $index => $ogTagDate) {
					if (isset($tagMapping[$index])) {
						$index = $tagMapping[$index];
					}
					$ogTags[$index] = $ogTagDate;
				}
			}

			if (isset($objPage->ogImage) && $objPage->ogImage != '') {
				$objFile = \FilesModel::findByPk($objPage->ogImage);
				$ogImage = $objFile ? (string)$objFile->path : '';
				if (is_file(TL_ROOT.TL_FILES_URL.'/'.$ogImage)) {
					$ogTags['og:image'] = \Idna::decode(\Environment::get('base')).$ogImage;
					$image = TL_ROOT.TL_FILES_URL.'/'.$ogImage;
					$imagesize = @getimagesize($image);
					if ($imagesize) {
						$ogTags['og:image:width'] = $imagesize[0];
						$ogTags['og:image:height'] = $imagesize[1];
					}
					$mimeType = @mime_content_type($image);
					if ($mimeType) {
						$ogTags['og:image:type'] = $mimeType;
					}
				}
			}

			if (isset($objPage->ogAudio) && $objPage->ogAudio != '') {
				$objFile = \FilesModel::findByPk($objPage->ogAudio);
				$ogAudio = $objFile ? (string)$objFile->path : '';
				if (is_file(TL_ROOT.TL_FILES_URL.'/'.$ogAudio)) {
					$ogTags['og:audio'] = \Idna::decode(\Environment::get('base')).$ogAudio;
					$audio = TL_ROOT.TL_FILES_URL.'/'.$ogAudio;
					$mimeType = @mime_content_type($audio);
					if ($mimeType) {
						$ogTags['og:audio:type'] = $mimeType;
					}
				}
			}

			if (isset($objPage->ogVideo) && $objPage->ogVideo != '') {
				$objFile = \FilesModel::findByPk($objPage->ogVideo);
				$ogVideo = $objFile ? (string)$objFile->path : '';
				if (is_file(TL_ROOT.TL_FILES_URL.'/'.$ogVideo)) {
					$ogTags['og:video'] = \Idna::decode(\Environment::get('base')).$ogVideo;
					$video = TL_ROOT.TL_FILES_URL.'/'.$ogVideo;
					$ogVideo = \Idna::decode(\Environment::get('base')).$ogVideo;
					$mimeType = @mime_content_type($video);
					if ($mimeType) {
						$ogTags['og:video:type'] = $mimeType;
					}
				}
			}

			foreach ($ogTags as $property => $content) {
				if ($content != '') {
					$GLOBALS['TL_HEAD'][] = '<meta property="'.$property.'" content="'.str_replace("\n", ' ', $content).'" />';
				}
			}
		}
	}

}
