<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ActNonDeliveryCar\Uuid;

/**
 * url: /api/v2/act-non-delivery-car
 */
final class ActNonDeliveryCar extends AbstractBuilder
{
    protected const URL = '/api/v2/act-non-delivery-car';

    public function uuid(string $uuid): Uuid
    {
        $params = $this->params;
        $params['uuid'] = $uuid;
        return new Uuid($params, $this->client);
    }
}
