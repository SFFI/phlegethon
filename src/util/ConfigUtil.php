<?php


namespace sffi\phlegethon\util;


class ConfigUtil
{
    public static function getConfigFile($fileName, $path = '')
    {
        if (is_file( __DIR__.'\..\..\config\phlegethon.php')){
            $config = require __DIR__.'\..\..\config\phlegethon.php';
            if (isset($config['config_path']) && $config['config_path']) {
                $path =  __DIR__.'\..\..\config\\';
            }
        }
        if(!$path){
            $path = __DIR__.'/../../../../../config';
        }
        if (!file_exists($path . '/'. $fileName)) {
            throw new \Exception('缺少系统配置，请在'.$path.'路径中添加redis.php文件', 8000011);
        }
        return require $path . '/'. $fileName;
    }
}