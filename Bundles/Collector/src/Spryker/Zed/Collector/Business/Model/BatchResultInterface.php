<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Collector\Business\Model;

use Generated\Shared\Transfer\LocaleTransfer;

interface BatchResultInterface
{

    /**
     * @return int
     */
    public function getProcessedCount();

    /**
     * @param int $processedCount
     */
    public function setProcessedCount($processedCount);

    /**
     * @param int $amount
     */
    public function increaseProcessedCount($amount);

    /**
     * @param int $fetchedCount
     */
    public function setFetchedCount($fetchedCount);

    /**
     * @return int
     */
    public function getFetchedCount();

    /**
     * @return int
     */
    public function getTotalCount();

    /**
     * @param int $totalCount
     */
    public function setTotalCount($totalCount);

    /**
     * @param \Spryker\Zed\Collector\Business\Model\FailedResultInterface $failed
     */
    public function addFailedResult(FailedResultInterface $failed);

    /**
     * @return int
     */
    public function getFailedCount();

    /**
     * @return int
     */
    public function getSuccessCount();

    /**
     * @param int $increment
     */
    public function increaseProcessed($increment = 1);

    /**
     * @return bool
     */
    public function isFailed();

    /**
     * @param bool $failed
     */
    public function setIsFailed($failed = true);

    /**
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getProcessedLocale();

    /**
     * @param \Generated\Shared\Transfer\LocaleTransfer $processedLocale
     */
    public function setProcessedLocale(LocaleTransfer $processedLocale);

    /**
     * @return int
     */
    public function getDeletedCount();

    /**
     * @param int $deletedCount
     */
    public function setDeletedCount($deletedCount);

    /**
     * @param int $amount
     */
    public function increaseDeletedCount($amount);

}
