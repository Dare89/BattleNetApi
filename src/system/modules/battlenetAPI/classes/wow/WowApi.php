<?php 

namespace BattleNetApi\WoWApi;


class WowApi{
	
	
	
	public function getCharacter($region, $realm, $name) {
		
		return new \WoWCharacter($region, $realm, $name);
	}
	
}

?>