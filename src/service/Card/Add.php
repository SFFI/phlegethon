<?php


namespace sffi\phlegethon\service\Card;


class Add extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/card/add';

    protected $args = [
        'lock_no',
        'card_type',
        'pwd_user_mobile',
        'valid_time_start',
        'valid_time_end',
        'card_no',
        'card_dn_no',
        'pwd_user_name',
        'description',
        'extra',
    ];

    protected $rule = [
        'lock_no'           =>  'require',
        'card_type'         =>  'require',
        'pwd_user_mobile'   =>  'require',
        'valid_time_start'  =>  'require',
        'valid_time_end'    =>  'require',
    ];
}
