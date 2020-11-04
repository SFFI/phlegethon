<?php


namespace sffi\phlegethon\Factory;

use sffi\phlegethon\service\Node\Lists;
use sffi\phlegethon\service\Node\UpdateInstallInfo;
use sffi\phlegethon\service\Node\View;

/**
 * Class Node
 * @method Lists lists(int $page_size=10,int $current_page=1,string $node_no='', string $house_code='')
 * @method View view($node_no)
 * @method UpdateInstallInfo update_install_info($node_no,$house_code)
 * @package sffi\phlegethon\service
 */
class Node extends Base
{
}