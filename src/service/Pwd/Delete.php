<?php


namespace sffi\phlegethon\service\Pwd;


class Delete extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/delete';

    protected $args = [
        'lock_no',
        'pwd_no',
        'extra',
    ];

    protected $rule = [
        'lock_no'   => 'require',
        'pwd_no'    => 'require',
    ];
}