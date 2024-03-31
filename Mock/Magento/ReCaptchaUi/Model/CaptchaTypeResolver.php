<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaUi\Model;

/**
 * Composite type resolver for multiple areas.
 */
class CaptchaTypeResolver implements CaptchaTypeResolverInterface
{
    /**
     *
     */
    public function __construct(array $resolvers = [])
    {
    }

    /**
     * @inheritDoc
     */
    public function getCaptchaTypeFor(string $key): ?string
    {
        return null;
    }
}
