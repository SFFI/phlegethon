<?php


namespace sffi\phlegethon\service\Pwd;


use sffi\phlegethon\service\Base;

class OfflineAdd extends Base
{
    protected $router = 'pwd/offline_add';

    protected $args = [
        'lock_no',
        'valid_time_start',
        'valid_time_end',
        'pwd_user_mobile',
        'pwd_user_name',
        'pwd_user_idcard',
        'description'
    ];

    protected $rule = [
        'lock_no'               => 'require',
        'valid_time_start'      => 'require',
        'valid_time_end'        => 'require',
        'pwd_user_mobile'       => 'require',
    ];
}


