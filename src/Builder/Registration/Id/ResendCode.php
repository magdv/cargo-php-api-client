<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/registration/{id}/resend-code
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/registration/{id}/resend-code
 */
final class ResendCode extends AbstractBuilder
{
    protected const URL = '/api/v2/registration/{id}/resend-code';

    public function post(): ResendCodePost
    {
        return new ResendCodePost($this->client, $this->getUrl());
    }
}
