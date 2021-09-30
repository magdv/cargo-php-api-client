<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Id;

/**
 * url: /api/v2/expeditor/price-local
 */
final class PriceLocal extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): PriceLocalGet
    {
        return new PriceLocalGet($this->client, $this->getUrl());
    }

    public function post(): PriceLocalPost
    {
        return new PriceLocalPost($this->client, $this->getUrl());
    }
}
