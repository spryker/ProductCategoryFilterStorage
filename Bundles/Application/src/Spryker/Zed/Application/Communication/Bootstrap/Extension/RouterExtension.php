<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Application\Communication\Bootstrap\Extension;

use Spryker\Shared\Application\Communication\Bootstrap\Extension\RouterExtensionInterface;
use Spryker\Shared\Application\Communication\Application;
use Spryker\Shared\Application\Business\Routing\SilexRouter;
use Spryker\Zed\Application\Business\Model\Router\MvcRouter;

class RouterExtension implements RouterExtensionInterface
{

    /**
     * @param \Spryker\Shared\Application\Communication\Application $app
     *
     * @return \Symfony\Component\Routing\RouterInterface[]
     */
    public function getRouter(Application $app)
    {
        return [
            new MvcRouter($app),
            new SilexRouter($app),
        ];
    }

}
