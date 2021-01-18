<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\PreOrderGroup\Id;

/**
 * url: /api/v2/pre-order-group
 */
final class PreOrderGroup extends AbstractBuilder
{
    protected const URL = '/api/v2/pre-order-group';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): PreOrderGroupGet
    {
        return new PreOrderGroupGet($this->client, $this->getUrl());
    }
}
