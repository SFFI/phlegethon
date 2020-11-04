<?php


namespace sffi\phlegethon\service\Pwd;


use sffi\phlegethon\service\Base;

class DynamicPwd extends Base
{
    protected $router = 'pwd/dynamic_pwd';

    protected $args = [
        'lock_no'
    ];

    protected $rule = [
        'lock_no'   => 'require'
    ];
}