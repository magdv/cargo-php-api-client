<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/usedesk-token
 */
final class UsedeskToken extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/usedesk-token';

    public function put(): UsedeskTokenPut
    {
        return new UsedeskTokenPut($this->client, $this->getUrl());
    }
}
