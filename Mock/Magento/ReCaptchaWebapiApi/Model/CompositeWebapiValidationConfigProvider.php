<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaWebapiApi\Model;

use Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface;
use Magento\ReCaptchaWebapiApi\Api\Data\EndpointInterface;
use Magento\ReCaptchaWebapiApi\Api\WebapiValidationConfigProviderInterface;

/**
 * Composite provider.
 *
 * Provide your own provider to add configuration for endpoints.
 *
 * @api
 */
class CompositeWebapiValidationConfigProvider implements WebapiValidationConfigProviderInterface
{
    /**
     * @var WebapiValidationConfigProviderInterface[]
     */
    private $providers;

    /**
     * @param WebapiValidationConfigProviderInterface[] $providers
     */
    public function __construct(array $providers = [])
    {
        $this->providers = $providers;
    }

    /**
     * @inheritDoc
     */
    public function getConfigFor(EndpointInterface $endpoint): ?ValidationConfigInterface
    {
        return null;
    }
}