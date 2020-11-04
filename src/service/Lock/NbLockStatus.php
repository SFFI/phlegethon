<?php


namespace sffi\phlegethon\service\Lock;


class NbLockStatus extends \sffi\phlegethon\service\Base
{
    protected $router = 'lock/nb_lock_status';

    protected $args = [
        'lock_no'
    ];

    protected $rule = [
        'lock_no' => 'require'
    ];
}