<?php


namespace sffi\phlegethon\util;


use sffi\phlegethon\Factory;
use sffi\phlegethon\service\Factory\Login;

class TokenUtil
{
    public static function getSession($account)
    {
        $key = 'phlegethon_'.$account;
        if (function_exists('cache')){
            $session = cache($key);
            if (!$session) {
                $session = Factory::Login()->Login();
                cache($key, $session['access_token'], $session['expires_second']);
            }
            return is_array($session)? $session['access_token'] : $session;
        } else {
            if (class_exists("\Redis")){
                $config = ConfigUtil::getConfigFile('redis.php');
                $redis = new \Redis();
                if (!$redis->connect($config['host'], $config['port'], $config['timeout'])){
                    throw new \Exception('redis配置错误，请检查配置文件');
                }
                if ($redis->exists($key) <= 0){
                    $session = Factory::Login()->Login();
                    $redis->set($key, $session['access_token'], $session['expires_second']);
                }else{
                    $session = $redis->get($key);
                }
                return is_array($session)? $session['access_token'] : $session;
            }
        }
    }
}