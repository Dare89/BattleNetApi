<?php

namespace Solid\battlenetAPI;


class ApiCall extends \System
{
	public $errno = CURLE_OK;
	
	public $error = '';
	
	public $header;
	
	protected $strApiUrl;
	
	public function getData($url, $lastModified)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_VERBOSE, false);
		curl_setopt($ch, CURLOPT_TIMECONDITION, CURL_TIMECOND_IFMODSINCE );
		//curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_TIMEVALUE, $lastModified );
		
		$response = curl_exec($ch);
		$this->header  = curl_getinfo($ch);
		
		$this->errno = curl_errno($ch);
		$this->error = curl_error($ch);
		
		curl_close($ch);
		//print_r($headers['http_code']);
		return $response;
	}
}
?>