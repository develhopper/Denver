<?php
namespace Denver;

class Env{

    private function __construct(){}

    public static function setup($path){
        if(!file_exists($path)){
            throw new \Exception('Env: file not Found');
        }

        $hash = md5_file($path);

        if(getenv("ENV_HASH", true) == $hash){
            return;
        }
        
		static::put("ENV_HASH",$hash);

        $handle = fopen($path,'r');

        while(($line = fgets($handle)) !== false){
				$var = explode("=",trim($line)); 
				static::put($var[0],$var[1]);
        }
        fclose($handle);
    }

	public static function put($key, $value){
		putenv("$key=$value");
		$_ENV[$key] = $value;
	}

	public static function get($key,$default){
		return getenv($key)?:$default;
	}

	public static function fromArray(array $config){
		foreach($config as $key => $value){
			if(is_string($key)){
					static::put($key,$value);
			}
		}
	}
}
