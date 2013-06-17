<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package BattlenetAPI
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Solid',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Solid\battlenetAPI\ApiCache'         => 'system/modules/battlenetAPI/classes/ApiCache.php',
	'Solid\battlenetAPI\ApiCall'          => 'system/modules/battlenetAPI/classes/ApiCall.php',
	'Solid\battlenetAPI\ApiController'    => 'system/modules/battlenetAPI/classes/ApiController.php',
	'Solid\battlenetAPI\WoW\WoWCharacter' => 'system/modules/battlenetAPI/classes/wow/WoWCharacter.php',
	'Solid\battlenetAPI\WoW\WoWItem'      => 'system/modules/battlenetAPI/classes/wow/WoWItem.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_test' => 'system/modules/battlenetAPI/templates',
));
