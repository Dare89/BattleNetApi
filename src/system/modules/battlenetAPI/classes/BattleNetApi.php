<?php

namespace BattleNetApi;

class BattleNetApi extends \System
{
	
	protected $strApiUrl;
	
	protected $arrData;
	
	public function __construct() {
		$this->import('Database');
	}
	
}

?>