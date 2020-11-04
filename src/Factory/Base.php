<?php


namespace sffi\phlegethon\Factory;



class Base
{
    public function __call($name, $arguments)
    {
        $selfName = substr(static::class, strlen(__NAMESPACE__) + 1);
        if (strpos($name, '_')) {
            $name = implode('', explode(' ',ucwords(str_replace('_',' ', $name))));
        }
        $className = 'sffi\\phlegethon\\service\\'.$selfName.'\\' . ucfirst($name);
        if (class_exists($className)){
            return call_user_func_array([new $className(),'run'], $arguments);
        }
        throw new \Exception($className.'不存在');
    }
}