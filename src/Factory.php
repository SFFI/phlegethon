<?php

namespace sffi\phlegethon;

use sffi\phlegethon\Factory\Lock;
use sffi\phlegethon\Factory\Node;
use sffi\phlegethon\Factory\Login;
use sffi\phlegethon\Factory\Pwd;

/**
 * Class Factory
 * @method static Node Node()   网关管理
 * @method static Login Login()   登录
 * @method static Lock Lock()   门锁
 * @method static Pwd Pwd()   密码
 * @package sffi
 */
class Factory
{
    public static function make($name)
    {
        $application = "sffi\\phlegethon\\Factory\\{$name}";

        return new $application();
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name);
    }
}