<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderEcn\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-ecn/{id}/cancel
 */
final class Cancel extends AbstractBuilder
{
    protected const URL = '/api/v2/order-ecn/{id}/cancel';

    public function post(): CancelPost
    {
        return new CancelPost($this->client, $this->getUrl());
    }
}
