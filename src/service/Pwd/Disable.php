<?php


namespace sffi\phlegethon\service\Pwd;


class Disable extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/disable';

    protected $args = [
        'lock_no',
        'op_type',
        'pwd_no',
        'extra'
    ];

    protected $rule = [
        'lock_no'   =>  'require',
        'op_type'   =>  'require',
        'pwd_no'    =>  'require'
    ];
}