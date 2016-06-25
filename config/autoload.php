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

/**
 * Register the classes
 */
\ClassLoader::addClasses(array(
	'OgTags\Callback\OgTagsDcaCallback' 	=> 'system/modules/og_tags/classes/callback/OgTagsDcaCallback.php',
	'OgTags\Controller\HookController' 		=> 'system/modules/og_tags/classes/controller/HookController.php',
));