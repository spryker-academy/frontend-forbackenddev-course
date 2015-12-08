<?php

namespace Pyz\Yves\System\Communication\Plugin\Provider;

use Pyz\Yves\Application\Communication\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class SystemControllerProvider extends AbstractYvesControllerProvider
{

    const ROUTE_HEARTBEAT = 'system/heartbeat';

    /**
     * @param Application $app
     */
    protected function defineControllers(Application $app)
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();

        $this->createController('/{system}/heartbeat', self::ROUTE_HEARTBEAT, 'System', 'Heartbeat', 'index')
            ->assert('system', $allowedLocalesPattern . 'system|system');
    }

}
