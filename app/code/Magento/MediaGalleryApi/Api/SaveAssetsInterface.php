<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\MediaGalleryApi\Api;

use Magento\MediaGalleryApi\Api\Data\AssetInterface;

/**
 * A command which executes the media gallery asset save operation.
 * @api
 */
interface SaveAssetsInterface
{
    /**
     * Save media asset and return the media asset id
     *
     * @param \Magento\MediaGalleryApi\Api\Data\AssetInterface[] $assets
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function execute(array $assets): void;
}
