<?php


namespace sffi\phlegethon\Factory;

use sffi\phlegethon\service\Card\Add;
use sffi\phlegethon\service\Card\Update;

/**
 * Class Card
 * @method Add add($lock_no,$card_type,$pwd_user_mobile,$valid_time_start,$valid_time_end,$card_no='',$card_dn_no='',$pwd_user_name='',$description='',$extra='')
 * @method Update update($lock_no, $pwd_no, $card_type, $card_no='', $card_dn_no='', $valid_time_start='', $valid_time_end='', $extra='')
 * @package sffi\phlegethon\Factory
 */
class Card extends Base
{

}