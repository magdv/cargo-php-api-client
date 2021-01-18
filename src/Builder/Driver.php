<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Driver\Id;

/**
 * url: /api/v2/driver
 */
final class Driver extends AbstractBuilder
{
    protected const URL = '/api/v2/driver';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): DriverGet
    {
        return new DriverGet($this->client, $this->getUrl());
    }

    public function post(): DriverPost
    {
        return new DriverPost($this->client, $this->getUrl());
    }
}
