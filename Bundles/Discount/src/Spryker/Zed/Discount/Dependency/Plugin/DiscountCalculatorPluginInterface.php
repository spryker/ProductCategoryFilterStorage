<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Discount\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountTransfer;

interface DiscountCalculatorPluginInterface
{

    /**
     * @param \Spryker\Zed\Discount\Business\Model\DiscountableInterface[] $discountableObjects
     * @param mixed $number
     *
     * @return int
     */
    public function calculate(array $discountableObjects, $number);

    /**
     * @param \Generated\Shared\Transfer\DiscountTransfer $discountTransfer
     *
     * @return string
     */
    public function getFormattedAmount(DiscountTransfer $discountTransfer);

}
