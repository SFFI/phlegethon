<?php


namespace sffi\phlegethon;


use sffi\phlegethon\util\ConfigUtil;

class PushValid
{
    public function valid(\Closure $callback)
    {
        $str = file_get_contents('php://input');
        $data = json_decode($str, true);
        $config = ConfigUtil::getConfigFile('phlegethon.php');
        $sign = md5($config['key'].$data['factor'].$config['account_private']);
        if (strtoupper($sign) == $data['validate_code']){
            return $callback($data);
        }
        throw new \Exception('无效访问', 1000088);
    }
}