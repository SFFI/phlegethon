<?php


namespace sffi\phlegethon\service\Lock;


use sffi\phlegethon\service\Base;

class View extends Base
{
    protected $router = 'lock/view';

    protected $args = [
        'lock_no'
    ];

    protected $rule = [
        'lock_no' => 'require'
    ];
}