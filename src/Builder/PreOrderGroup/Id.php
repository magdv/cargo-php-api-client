<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\PreOrderGroup;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\PreOrderGroup\Id\Accept;

/**
 * url: /api/v2/pre-order-group/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/pre-order-group/{id}';

    public function accept(): Accept
    {
        return new Accept($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
