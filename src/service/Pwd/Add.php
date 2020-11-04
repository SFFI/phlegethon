<?php


namespace sffi\phlegethon\service\Pwd;


class Add extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/add';

    protected $head=[
        'version' => '1.1'
    ];

    protected $args = [
        'lock_no',
        'pwd_text',
        'valid_time_start',
        'valid_time_end',
        'pwd_user_mobile',
        'similarity_check',
        'pwd_user_name',
        'pwd_user_idcard',
        'description',
        'extra'
    ];

    protected $rule = [
        'lock_no'               => 'require',
        'pwd_text'              => 'require',
        'valid_time_start'      => 'require',
        'valid_time_end'        => 'require',
        'pwd_user_mobile'       => 'require',
    ];

    protected $needEncryption = [
        'pwd_text'
    ];
}


