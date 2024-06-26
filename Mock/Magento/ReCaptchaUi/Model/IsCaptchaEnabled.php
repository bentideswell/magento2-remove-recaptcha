<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaUi\Model;

class IsCaptchaEnabled implements IsCaptchaEnabledInterface
{
    /**
     * @inheritdoc
     */
    public function isCaptchaEnabledFor(string $key): bool
    {
        return false;
    }
}
