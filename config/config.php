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

$GLOBALS['TL_HOOKS']['generatePage'][] = array('OgTags\Controller\HookController', 'addHeadDataAction');