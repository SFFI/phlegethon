<?php


namespace sffi\phlegethon\service\Lock;


class UpdateInstallInfo extends \sffi\phlegethon\service\Base
{
    protected $router = 'node/update_install_info';

    protected $args = [
        'lock_no',
        'house_id',
        'house_code',
        'room_id',
        'room_code',
    ];
    protected $rule = [
        'lock_no'       =>  'require',
    ];
}
