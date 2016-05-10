<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 16/4/12
 * Time: 12:14
 */

namespace Zan\Framework\Network\Http\ServerStart;

use Zan\Framework\Network\Http\Routing\RouteInitiator;
use Zan\Framework\Foundation\Core\Config;

class InitializeRouter
{
    /**
     * @param $server
     */
    public function bootstrap($server)
    {
        RouteInitiator::getInstance()->init(Config::get('route'));
    }
}