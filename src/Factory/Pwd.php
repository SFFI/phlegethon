<?php


namespace sffi\phlegethon\Factory;

use sffi\phlegethon\service\Pwd\Add;
use sffi\phlegethon\service\Pwd\AddNb;
use sffi\phlegethon\service\Pwd\BluetoothOpen;
use sffi\phlegethon\service\Pwd\Delete;
use sffi\phlegethon\service\Pwd\Disable;
use sffi\phlegethon\service\Pwd\DynamicPwd;
use sffi\phlegethon\service\Pwd\Lists;
use sffi\phlegethon\service\Pwd\OfflineAdd;
use sffi\phlegethon\service\Pwd\TemporaryPwd;
use sffi\phlegethon\service\Pwd\TempPwd;
use sffi\phlegethon\service\Pwd\Update;
use sffi\phlegethon\service\Pwd\UpdateFunc;
use sffi\phlegethon\service\Pwd\ViewFunc;

/**
 * Class Pwd
 * @method DynamicPwd dynamic_pwd($lock_no)
 * @method Lists lists($lock_no='',$pwd_no=0,$status=0)
 * @method TempPwd temp_pwd($lock_no, $pwd_user_name='',$pwd_user_mobile='',$pwd_user_idcard='',$description='')
 * @method TemporaryPwd temporary_pwd($lock_no, $pwd_user_name='',$pwd_user_mobile='',$pwd_user_idcard='',$description='')
 * @method ViewFunc view_func($lock_no)
 * @method Add add($lock_no,$pwd_text,$valid_time_start,$valid_time_end,$pwd_user_mobile,$similarity_check='',$pwd_user_name='',$pwd_user_idcard='',$description='',$extra='')
 * @method Update update($lock_no,$pwd_no,$pwd_text,$similarity_check='',$valid_time_start='',$valid_time_end='',$extra='')
 * @method OfflineAdd offline_add($lock_no,$pwd_no,$pwd_text,$similarity_check='',$valid_time_start='',$valid_time_end='',$extra='')
 * @method Delete delete($lock_no,$pwd_no,$extra='')
 * @method Disable disable($lock_no,$pwd_no,$extra='')
 * @method UpdateFunc update_func($lock_no, $pwd_text='', $similarity_check='', $valid_time_start='', $valid_time_end='', $extra='')
 * @method BluetoothOpen bluetooth_open($lock_no,$pwd_user_mobile,$pwd_user_name='')
 * @method AddNb add_nb($lock_no,$active_code_time,$valid_time_start,$valid_time_end,$similarity_check,$pwd_user_mobile,$pwd_text='',$pwd_user_name='',$description='',$extra='')
 * @package sffi\phlegethon\service\Factory
 */
class Pwd extends Base
{
}