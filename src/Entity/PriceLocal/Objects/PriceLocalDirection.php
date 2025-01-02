<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект направления отдельного элемента справочника цен
 * source: price-local/objects/price-local-direction.json
 *
 * @property int $id
 * @property int $poolId
 * @property string $departureCode
 * @property string $destinationCode
 * @property PriceLocalDirectionAccess $access
 */
final class PriceLocalDirection extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'poolId' => ['int'],
        'departureCode' => ['string'],
        'destinationCode' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\PriceLocal\Objects\PriceLocalDirectionAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'poolId' => false,
        'departureCode' => false,
        'destinationCode' => false,
        'access' => false,
    ];
}
