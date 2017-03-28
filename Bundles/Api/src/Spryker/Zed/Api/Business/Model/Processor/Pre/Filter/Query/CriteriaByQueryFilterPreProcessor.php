<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Query;

use Generated\Shared\Transfer\ApiRequestTransfer;
use Spryker\Zed\Api\Business\Model\Processor\Pre\PreProcessorInterface;

class CriteriaByQueryFilterPreProcessor implements PreProcessorInterface
{

    const FILTER = 'filter';

    /**
     * @param \Generated\Shared\Transfer\ApiRequestTransfer $apiRequestTransfer
     *
     * @return void
     */
    public function process(ApiRequestTransfer $apiRequestTransfer)
    {
        $queryStrings = $apiRequestTransfer->getQueryData();
        if (empty($queryStrings[self::FILTER])) {
            $apiRequestTransfer->getFilter()->setFilter('{}');
            return;
        }

        $filter = $queryStrings[self::FILTER];

        $apiRequestTransfer->getFilter()->setFilter($filter);
    }

}
