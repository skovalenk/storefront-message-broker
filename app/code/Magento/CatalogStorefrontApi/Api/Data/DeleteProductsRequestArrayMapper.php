<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for DeleteProductsRequest class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class DeleteProductsRequestArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param DeleteProductsRequest $dto
    * @return array
    */
    public function convertToArray(DeleteProductsRequest $dto)
    {
        $result = [];
        $result["productIds"] = $dto->getProductIds();
        $result["store"] = $dto->getStore();
        return $result;
    }
}
