<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaValidation\Model;

use Magento\Framework\Validation\ValidationResult;
use Magento\Framework\Validation\ValidationResultFactory;
use Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface;
use Magento\ReCaptchaValidationApi\Api\ValidatorInterface;
use Magento\ReCaptchaValidationApi\Model\ErrorMessagesProvider;
use ReCaptcha\ReCaptcha;
use Magento\ReCaptchaValidation\Model\ReCaptchaFactory;

/**
 * @inheritdoc
 */
class Validator implements ValidatorInterface
{
    /**
     * @inheritdoc
     */
    public function isValid(
        string $reCaptchaResponse,
        ValidationConfigInterface $validationConfig
    ): ValidationResult {
        return true;
    }
}