<?php

namespace BattleNetApi;

class BattleNetApi extends \System
{
	
	protected static $objInstance;	
	
	protected static $arrCache = array();
	
	public static function get($strKey)
	{
		if(isset(static::$arrCache[$strKey]))
		{
			return static::$arrCache[$strKey];
		}
		if (in_array($strKey, get_class_methods('BattleNetApi'))) {
			static::$arrCache[$strKey] = static::$strKey;
		}
		
		return static::$arrCache[$strKey];
	}
	
}

?>