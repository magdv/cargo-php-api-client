<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/ds-phone-verification-code
 */
final class DsPhoneVerificationCode extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/ds-phone-verification-code';

    public function post(): DsPhoneVerificationCodePost
    {
        return new DsPhoneVerificationCodePost($this->client, $this->getUrl());
    }
}
