<?php


namespace sffi\phlegethon\service\Pwd;


use sffi\phlegethon\service\Base;

class TempPwd extends Base
{
    protected $router = 'pwd/temp_pwd';
    protected $args = [
        'lock_no',
        'pwd_user_name',
        'pwd_user_mobile',
        'pwd_user_idcard',
        'description',
    ];

    protected $rule = [
        'lock_no' => 'require',
        'pwd_user_mobile' => 'require'
    ];
}