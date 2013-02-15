<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Core
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Load class tl_page
 */
//$this->loadDataContainer('tl_page');


/**
 * Table tl_article
 */
$GLOBALS['TL_DCA']['tl_battlenetapi_wow_character'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => '',
		'ctable'                      => array('tl_battlenetapi_wow_character_feed'),
		'switchToEdit'                => true,
		'enableVersioning'            => false,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index',
				'name' => 'index',
				'realm' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array(
			'mode'			=> 1,
			'fields'		=> array('name DESC'),	
			'flag'			=> 1,
			'panelLayout'	=> 'filter;search,limit'
		),	
		'label'	=> array(
			'fields'		=> array('name', 'realm', 'pid:tl_user.name'),
			'format'		=> '%s - %s (%s)'
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title,alias,author;{layout_legend},inColumn,keywords;{teaser_legend:hide},teaserCssID,showTeaser,teaser;{expert_legend:hide},printable,cssID,space;{publish_legend},published,start,stop'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'label'                   => array('ID'),
			'search'                  => true,
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'foreignKey'              => 'tl_page.member',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'name' => array
		(
			'label'					  => "Name",
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
	)
);


/**
 * Class tl_article
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://contao.org>
 * @package    Core
 */
class tl_battlenetapi_wow_character extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	
}
