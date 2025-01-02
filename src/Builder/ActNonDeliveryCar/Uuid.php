<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ActNonDeliveryCar;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ActNonDeliveryCar\Uuid\Cancel;

/**
 * url: /api/v2/act-non-delivery-car/{uuid}
 */
final class Uuid extends AbstractBuilder
{
    protected const URL = '/api/v2/act-non-delivery-car/{uuid}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function get(): UuidGet
    {
        return new UuidGet($this->client, $this->getUrl());
    }
}
