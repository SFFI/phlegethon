<?php


namespace sffi\phlegethon\service\Lock;


class RemoteOpen extends \sffi\phlegethon\service\Base
{
    protected $router = 'lock/remote_open';

    protected $args = [
        'lock_no',
        'pwd_user_mobile',
        'pwd_user_name'
    ];

    protected $rule = [
        'lock_no'               => 'require',
        'pwd_user_mobile'       => 'require',
    ];
}