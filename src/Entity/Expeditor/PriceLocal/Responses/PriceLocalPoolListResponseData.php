<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка пула направлений и цен
 * source: expeditor/PriceLocal/responses/price-local-pool-list-response.json#/properties/data
 *
 * @property PriceLocalPool[] $priceLocalPool
 * @property Pagination $pagination
 */
final class PriceLocalPoolListResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['priceLocalPool' => false, 'pagination' => false];
}
