<?php namespace Goodspb\Ucenter;

	if(!defined('UC_API')){
		$config = \Illuminate\Support\Facades\Config::get('ucenter::config');
		define('UC_CONNECT', $config['connect']);
		define('UC_DBHOST', $config['dbhost']);
		define('UC_DBUSER', $config['dbuser']);
		define('UC_DBPW',$config['dbpw']);
		define('UC_DBNAME', $config['dbname']);
		define('UC_DBCONNECT',0);
		define('UC_DBCHARSET', $config['dbcharset']);
		define('UC_DBTABLEPRE',$config['dbtablepre']);
		define('UC_KEY', $config['key']);
		define('UC_API',$config['api']);
		define('UC_CHARSET',$config['charset']);
		define('UC_IP', $config['ip']);
		define('UC_APPID',$config['appid']);
		define('UC_PPP', $config['ppp']);
		include __DIR__.'/uc_client/client.php';
	}

	class Ucenter{

		public static function execute($api, $params = array())
		{
			return call_user_func_array($api, $params);
		}
	}
?>
