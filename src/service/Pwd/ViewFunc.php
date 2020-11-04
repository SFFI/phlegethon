<?php


namespace sffi\phlegethon\service\Pwd;


class ViewFunc extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/view_func';

    protected $args = [
        'lock_no',
    ];

    protected $rule = [
        'lock_no' => 'require'
    ];
}