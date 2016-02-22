<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Functional\Spryker\Zed\CustomerCheckoutConnector\Dependency;

use Spryker\Zed\Customer\Business\CustomerFacade as SprykerCustomerFacade;
use Spryker\Zed\CustomerCheckoutConnector\Dependency\Facade\CustomerCheckoutConnectorToCustomerInterface;

class CustomerFacade extends SprykerCustomerFacade implements CustomerCheckoutConnectorToCustomerInterface
{
}
