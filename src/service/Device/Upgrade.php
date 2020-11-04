<?php


namespace sffi\phlegethon\service\Device;


use sffi\phlegethon\service\Base;

class Upgrade extends Base
{
    protected $router = 'device/upgrade';

    protected $args = [
        'device_no',
        'device_kind'
    ];

    protected $rule = [
        'device_no'=>'require',
        'device_kind'=>'require'
    ];
}