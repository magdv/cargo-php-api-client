<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalDirection;
use Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool;

/**
 * Данные списка направлений элемента справочника цен
 * source: price-local/responses/price-local-direction-list-response.json#/properties/data
 *
 * @property PriceLocalDirection[] $priceLocalDirection
 * @property PriceLocalPool[] $priceLocalPool
 * @property Locality[] $locality
 * @property Pagination $pagination
 */
final class PriceLocalDirectionListResponseData extends AbstractEntity
{
    protected static $types = [
        'priceLocalDirection' => ['array', 'Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalDirection'],
        'priceLocalPool' => ['array', 'Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalPool'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'priceLocalDirection' => false,
        'priceLocalPool' => false,
        'locality' => false,
        'pagination' => false,
    ];
}
