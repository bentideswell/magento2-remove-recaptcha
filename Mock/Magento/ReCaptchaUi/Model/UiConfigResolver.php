<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaUi\Model;

use Magento\Framework\Exception\InputException;

class UiConfigResolver implements UiConfigResolverInterface
{
    /**
     *
     */
    public function __construct(
        array $uiConfigProviders = []
    ) {
    }

    /**
     * @inheritdoc
     */
    public function get(string $key): array
    {
        throw new InputException(
            __('UI config provider for "%type" is not configured.', ['type' => $key])
        );
    }
}
