<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Device\Id;

/**
 * url: /api/v2/device
 */
final class Device extends AbstractBuilder
{
    protected const URL = '/api/v2/device';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function post(): DevicePost
    {
        return new DevicePost($this->client, $this->getUrl());
    }
}
