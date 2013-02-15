<?php 

namespace BattleNet\Api\Wow;


class WowApi extends \AbstractApi {
	
	protected $game = 'wow';
	
	protected $_regionWhitelist = array(
		'us'	=> array('en_US', 'es_MX'),
		'eu'	=> array('en_GB', 'es_ES', 'fr_FR', 'ru_RU', 'de_DE'),
		'kr'	=> array('ko_KR'),
		'tw'	=> array('zh_TW'),
		'cn'	=> array('zh_CN'),
	);
	
	public function getCharacter($realm, $name, $fields = array(), $resultAsArray = false) {
		return $this->request(new \CharacterCall($realm, $name, $fields))->getData($resultAsArray);
	}
	
}

?>