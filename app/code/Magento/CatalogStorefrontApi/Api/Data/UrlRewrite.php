<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for UrlRewrite class
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
final class UrlRewrite implements UrlRewriteInterface
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $parameters;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUrl(): string
    {
        return (string) $this->url;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUrl(string $value): void
    {
        $this->url = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteParameterInterface[]
     */
    public function getParameters(): array
    {
        return (array) $this->parameters;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteParameterInterface[] $value
     * @return void
     */
    public function setParameters(array $value): void
    {
        $this->parameters = $value;
    }
}
