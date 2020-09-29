<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ImportCategoriesRequest class
 * TODO should be regenerated https://github.com/magento/catalog-storefront/issues/41
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class ImportProductDataRequest implements ImportProductDataRequestInterface
{
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ProductInterface
     */
    private $product;

    /**
     * @var string[]
     */
    private $attributes;

    /**
     * @inheritdoc
     */
    public function getProduct(): \Magento\CatalogStorefrontApi\Api\Data\ProductInterface
    {
        return $this->product;
    }

    /**
     * @inheritdoc
     */
    public function setProduct(\Magento\CatalogStorefrontApi\Api\Data\ProductInterface $product): void
    {
        $this->product = $product;
    }

    /**
     * @inheritdoc
     */
    public function getAttributes(): array
    {
        return (array)$this->attributes;
    }

    /**
     * @inheritdoc
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }
}
