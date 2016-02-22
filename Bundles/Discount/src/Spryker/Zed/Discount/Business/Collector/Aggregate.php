<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Discount\Business\Collector;

use Generated\Shared\Transfer\DiscountCollectorTransfer;
use Spryker\Zed\Calculation\Business\Model\CalculableInterface;

class Aggregate implements CollectorInterface
{

    /**
     * @var \Spryker\Zed\Discount\Business\Collector\CollectorInterface[]
     */
    protected $collectors = [];

    /**
     * @param \Spryker\Zed\Discount\Business\Collector\CollectorInterface[] $collectors
     */
    public function __construct(array $collectors)
    {
        $this->collectors = $collectors;
    }

    /**
     * @param \Spryker\Zed\Calculation\Business\Model\CalculableInterface $container
     *
     * @return \Generated\Shared\Transfer\OrderTransfer[]
     */
    public function collect(CalculableInterface $container, DiscountCollectorTransfer $discountCollectorTransfer)
    {
        $collected = [];
        foreach ($this->collectors as $collector) {
            $collected = array_merge($collected, $collector->collect($container, $discountCollectorTransfer));
        }

        return $collected;
    }

}
