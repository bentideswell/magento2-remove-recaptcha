<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaUi\Model;

use Magento\Framework\Exception\InputException;
use Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface;

class ValidationConfigResolver implements ValidationConfigResolverInterface
{
    /**
     *
     */
    public function __construct(
        array $validationConfigProviders = []
    ) {
    }

    /**
     * @inheritdoc
     */
    public function get(string $key): ValidationConfigInterface
    {
        throw new InputException(
            __('Validation config provider for "%type" is not configured.', ['type' => $key])
        );
    }
}
