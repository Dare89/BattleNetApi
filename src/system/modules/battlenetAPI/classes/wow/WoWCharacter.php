<?php

namespace Solid\battlenetAPI\WoW;

	
class WoWCharacter extends \battlenetAPI\ApiCall 
{
	
	public function __construct() 
	{
		
	}
	
	public function getCharData()
	{
		
		//$response = json_decode($this->getData('http://eu.battle.net/auction-data/35b7b1a6196b97b3707431719ed11413/auctions.json',1370445692),true);
		$response = json_decode($this->getData('http://eu.battle.net/api/wow/character/dun-morogh/dar%C3%A9?locale=deDE&fields=guild,stats,talents,items,reputation,titles,professions,appearance,companions,mounts,pets,achievements,progression,pvp,quests,statistics',1370530061),true);
		return $response;
	}
	
}

?>