<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaUi\Model;

class UiConfigResolver implements UiConfigResolverInterface
{

    /**
     *
     */
    public function get(string $key): array
    {
        return [];
    }
}