<?php
namespace Denver;

class Env{

    private function __construct(){}

    public static function setup($path){
        if(!file_exists($path)){
            throw new Exception('Env: file not Found');
        }

        $hash = md5_file($path);

        if(getenv("ENV_HASH", true) == $hash){
            return;
        }
        
        putenv("ENV_HASH=$hash");

        $handle = fopen($path,'r');

        while(($line = fgets($handle)) !== false){
            putenv($line);
        }
        fclose($handle);
    }

}