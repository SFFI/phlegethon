<?php


namespace sffi\phlegethon\service\Card;


class Update extends \sffi\phlegethon\service\Base
{
    protected $router = 'pwd/card/update';

    protected $args = [
        'lock_no',
        'pwd_no',
        'card_type',
        'card_no',
        'card_dn_no',
        'valid_time_start',
        'valid_time_end',
        'extra',
    ];

    protected $rule = [
        'lock_no'       =>  'require',
        'pwd_no'        =>  'require',
        'card_type'     =>  'require',
    ];
}
