<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrderGroup\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/pre-order-group/{id}/accept
 */
final class Accept extends AbstractBuilder
{
    protected const URL = '/api/v2/pre-order-group/{id}/accept';

    public function post(): AcceptPost
    {
        return new AcceptPost($this->client, $this->getUrl());
    }
}
