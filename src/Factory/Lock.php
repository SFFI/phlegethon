<?php


namespace sffi\phlegethon\Factory;

use sffi\phlegethon\service\Lock\Auth;
use sffi\phlegethon\service\Lock\CancelAuth;
use sffi\phlegethon\service\Lock\Lists;
use sffi\phlegethon\service\Lock\NbLockStatus;
use sffi\phlegethon\service\Lock\OpenLockHistory;
use sffi\phlegethon\service\Lock\RemoteOpen;
use sffi\phlegethon\service\Lock\UpdateInstallInfo;
use sffi\phlegethon\service\Lock\ValidateOwner;
use sffi\phlegethon\service\Lock\View;

/**
 * Class Lock
 * @method Lists lists($page_size=10,$current_page=1,$node_no='',$lock_no='',$house_code='',$room_code='')
 * @method ValidateOwner validate_owner($lock_no)
 * @method View view($node_no)
 * @method OpenLockHistory open_lock_history($lock_no,$page_size=10,$current_page=1,$search_time_start='',$search_time_end='')
 * @method NbLockStatus nb_lock_status($lock_no)
 * @method RemoteOpen remote_open($lock_no,$pwd_user_mobile, $pwd_user_name='')
 * @method Auth auth($lock_no,$mobile,$auth_time_start,$auth_time_end,$name='',$allow_auth='',$operate_pwd_auth='',$set_custom_pwd='')
 * @method CancelAuth cancel_auth($lock_no,$mobile)
 * @method UpdateInstallInfo update_install_info($lock_no,$house_id='',$house_code='',$room_id='',$room_code='')
 * @package sffi\phlegethon\service\Factory
 */
class Lock extends Base
{

}
