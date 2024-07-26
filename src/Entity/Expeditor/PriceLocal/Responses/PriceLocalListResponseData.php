<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocal;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка цен
 * source: expeditor/PriceLocal/responses/price-local-list-response.json#/properties/data
 *
 * @property PriceLocal[] $priceLocal
 * @property PriceLocalPool[] $priceLocalPool
 * @property Pagination $pagination
 */
final class PriceLocalListResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocal' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocal'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPool'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['priceLocal' => false, 'priceLocalPool' => false, 'pagination' => false];
}
