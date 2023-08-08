<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Recovery\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/recovery/{id}/resend-code
 */
final class ResendCode extends AbstractBuilder
{
    protected const URL = '/api/v2/user/recovery/{id}/resend-code';

    public function post(): ResendCodePost
    {
        return new ResendCodePost($this->client, $this->getUrl());
    }
}
