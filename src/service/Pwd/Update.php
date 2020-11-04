<?php


namespace sffi\phlegethon\service\Pwd;


class Update extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/update';

    protected $args = [
        'lock_no',
        'pwd_no',
        'pwd_text',
        'similarity_check',
        'valid_time_start',
        'valid_time_end',
        'extra',
    ];

    protected $rule= [
        'lock_no'       => 'require',
        'pwd_no'        => 'require',
        'pwd_text'      => 'require'
    ];
}

