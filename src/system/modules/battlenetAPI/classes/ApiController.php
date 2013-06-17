<?php

namespace Solid\battlenetAPI;


class ApiController extends \System
{
	/**
	 * Current object instance
	 * @var object
	 */
	protected static $objInstance;
	
	protected $strApiUrl;
	
	protected $arrData;
	
	/**
	 * Load the database object
	 */
	protected function __construct() {
		parent::__construct();
		$this->import('Database');
	}
	
	final public function __clone() {}
	
	public static function getInstance() {
		if (static::$objInstance === null)
		{ 
			static::$objInstance = new static();
			//test
		}
		
		return static::$objInstance;
	}
	
	public function getCharacterData()
	{
		$data =  new \battlenetAPI\WoW\WoWCharacter();
		
		return $data->getCharData();
	}
	
}

?>