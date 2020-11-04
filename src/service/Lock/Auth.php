<?php


namespace sffi\phlegethon\service\Lock;


use sffi\phlegethon\service\Base;

class Auth extends Base
{
    protected $router = 'lock/auth';

    protected $args = [
        'lock_no',
        'mobile',
        'auth_time_start',
        'auth_time_end',
        'name',
        'allow_auth',
        'operate_pwd_auth',
        'set_custom_pwd',
    ];

    protected $rule = [
        'lock_no'                   => 'require',
        'mobile'                    => 'require',
        'auth_time_start'           => 'require',
        'auth_time_end'             => 'require'
    ];
}
