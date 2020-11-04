<?php


namespace sffi\phlegethon\service\Pwd;


use sffi\phlegethon\service\Base;

class TemporaryPwd extends Base
{
    protected $router = 'pwd/temporary_pwd';

    protected $args = [
        'lock_no',
        'pwd_user_name',
        'pwd_user_mobile',
        'pwd_user_idcard',
        'description',
    ];
}