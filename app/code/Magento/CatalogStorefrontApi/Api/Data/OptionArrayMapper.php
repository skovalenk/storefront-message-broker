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
 * Autogenerated description for Option class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class OptionArrayMapper
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
    * @param Option $dto
    * @return array
    */
    public function convertToArray(Option $dto)
    {
        $result = [];
        $result["option_id"] = $dto->getOptionId();
        $result["product_id"] = $dto->getProductId();
        $result["type"] = $dto->getType();
        $result["is_require"] = $dto->getIsRequire();
        $result["sku"] = $dto->getSku();
        $result["max_characters"] = $dto->getMaxCharacters();
        $result["file_extension"] = $dto->getFileExtension();
        $result["image_size_x"] = $dto->getImageSizeX();
        $result["image_size_y"] = $dto->getImageSizeY();
        $result["sort_order"] = $dto->getSortOrder();
        $result["default_title"] = $dto->getDefaultTitle();
        $result["store_title"] = $dto->getStoreTitle();
        $result["title"] = $dto->getTitle();
        $result["default_price"] = $dto->getDefaultPrice();
        $result["default_price_type"] = $dto->getDefaultPriceType();
        $result["store_price"] = $dto->getStorePrice();
        $result["store_price_type"] = $dto->getStorePriceType();
        $result["price"] = $dto->getPrice();
        $result["price_type"] = $dto->getPriceType();
        $result["required"] = $dto->getRequired();
        $result["product_sku"] = $dto->getProductSku();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getValue() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\OptionValueArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["value"] = $fieldArray;
        return $result;
    }
}
