<?php


namespace sffi\phlegethon\service\Pwd;


class AddNb extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/add_nb';

    protected $args = [
        'lock_no',
        'active_code_time',
        'valid_time_start',
        'valid_time_end',
        'similarity_check',
        'pwd_user_mobile',
        'pwd_text',
        'pwd_user_name',
        'description',
        'extra'
    ];

    protected $rule = [
        'lock_no'           => 'require',
        'active_code_time'  => 'require',
        'valid_time_start'  => 'require',
        'valid_time_end'    => 'require',
        'similarity_check'  => 'require',
        'pwd_user_mobile'   => 'require',
    ];
}

