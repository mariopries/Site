<?php if (!defined('PAGSEGURO_LIBRARY')) {
	die('No direct script access allowed');
}
/*
 ************************************************************************
 Copyright [2011] [PagSeguro Internet Ltda.]

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 ************************************************************************
 */

class PagSeguroResources
{

	private static $resources;
	private static $data;
	const varName = 'PagSeguroResources';

	private function __construct()
	{
		define('ALLOW_PAGSEGURO_RESOURCES', TRUE);
		require_once PagSeguroLibrary::getPath() . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . "PagSeguroResources.php";
		$varName = self::varName;
		if (isset($$varName)) {
			self::$data = $$varName;
			unset($$varName);
		} else {
			throw new Exception("Resources is undefined.");
		}
	}

	public static function init()
	{
		if (self::$resources == null) {
			self::$resources = new PagSeguroResources();
		}
		return self::$resources;
	}

	public static function getData($key1, $key2 = null)
	{
		if ($key2 != null) {
			if (isset(self::$data[$key1][$key2])) {
				return self::$data[$key1][$key2];
			} else {
				throw new Exception("Resources keys {$key1}, {$key2} not found.");
			}
		} else {
			if (isset(self::$data[$key1])) {
				return self::$data[$key1];
			} else {
				throw new Exception("Resources key {$key1} not found.");
			}
		}
	}

	public static function setData($key1, $key2, $value)
	{
		if (isset(self::$data[$key1][$key2])) {
			self::$data[$key1][$key2] = $value;
		} else {
			throw new Exception("Resources keys {$key1}, {$key2} not found.");
		}
	}

	public static function getWebserviceUrl($environment)
	{
		
		if (isset(self::$data['environment']) && isset(self::$data['environment'][$environment]) && isset(self::$data['environment'][$environment]['webserviceUrl'])) {
			return self::$data['environment'][$environment]['webserviceUrl'];
		} else {
			throw new Exception("WebService URL not set for $environment environment.");
		}
	}

}
?>