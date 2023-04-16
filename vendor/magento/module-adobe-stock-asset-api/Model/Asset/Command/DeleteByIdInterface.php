<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockAssetApi\Model\Asset\Command;

use Magento\Framework\Exception\CouldNotDeleteException;

/**
 * Used to delete an Adobe Stock asset data filtered by id from data storage.
 */
interface DeleteByIdInterface
{
    /**
     * Delete an Adobe Stock asset filtered by id
     *
     * @param int $adobeStockAssetId
     *
     * @return void
     * @throws CouldNotDeleteException
     */
    public function execute(int $adobeStockAssetId): void;
}