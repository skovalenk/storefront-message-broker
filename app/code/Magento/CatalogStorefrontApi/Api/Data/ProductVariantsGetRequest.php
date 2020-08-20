<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductVariantsGetRequest class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
final class ProductVariantsGetRequest implements ProductVariantsGetRequestInterface
{

    /**
     * @var array
     */
    private $ids;

    /**
     * @var string
     */
    private $storeId;

    /**
     * @var array
     */
    private $attributeCodes;
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getIds(): array
    {
        return (array) $this->ids;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setIds(array $value): void
    {
        $this->ids = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStoreId(): string
    {
        return (string) $this->storeId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStoreId(string $value): void
    {
        $this->storeId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getAttributeCodes(): array
    {
        return (array) $this->attributeCodes;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setAttributeCodes(array $value): void
    {
        $this->attributeCodes = $value;
    }
}
