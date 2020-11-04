<?php


namespace sffi\phlegethon\service\Lock;


class CancelAuth extends \sffi\phlegethon\service\Base
{
    protected $router = 'lock/cancel_auth';

    protected $args = [
        'lock_no',
        'mobile'
    ];

    protected $rule = [
        'lock_no'   =>'require',
        'mobile'    =>'require'
    ];
}