<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for GroupedItem class
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
final class GroupedItem implements GroupedItemInterface
{

    /**
     * @var float
     */
    private $qty;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $product;
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getQty(): float
    {
        return (float) $this->qty;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setQty(float $value): void
    {
        $this->qty = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getPosition(): int
    {
        return (int) $this->position;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setPosition(int $value): void
    {
        $this->position = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getProduct(): string
    {
        return (string) $this->product;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setProduct(string $value): void
    {
        $this->product = $value;
    }
}
