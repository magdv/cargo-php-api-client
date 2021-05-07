<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\TruckOrderSearch\TruckId;

/**
 * url: /api/v2/truck-order-search
 */
final class TruckOrderSearch extends AbstractBuilder
{
    protected const URL = '/api/v2/truck-order-search';

    public function truckId(int $truckId): TruckId
    {
        $params = $this->params;
        $params['truckId'] = $truckId;
        return new TruckId($params, $this->client);
    }
}
