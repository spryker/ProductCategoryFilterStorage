<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ItemGrouperCheckoutConnector\Business;

use Generated\Shared\Transfer\GroupableContainerTransfer;

interface ItemGrouperCheckoutConnectorFacadeInterface
{

    /**
     * @param \Generated\Shared\Transfer\GroupableContainerTransfer $orderItems
     *
     * @return \Generated\Shared\Transfer\GroupableContainerTransfer
     */
    public function groupOrderItems(GroupableContainerTransfer $orderItems);

}
