<?php


namespace sffi\phlegethon\service\Pwd;


class BluetoothOpen extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/bt_key';

    protected $args = [
        'lock_no',
        'pwd_user_mobile',
        'pwd_user_name'
    ];

    protected $rule = [
        'lock_no'               =>  'require',
        'pwd_user_mobile'       =>  'require'
    ];
}


