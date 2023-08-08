<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания элемента справочника цен
 * source: expeditor/requests/price-local-create-request.json
 *
 * @property int $poolId
 * @property int $truckTypeId
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property string $carrierPriceTomorrow
 * @property bool $isActive
 */
final class PriceLocalCreateRequest extends AbstractEntity
{
    protected static $types = [
        'poolId' => ['int'],
        'truckTypeId' => ['int'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'carrierPriceTomorrow' => ['string'],
        'isActive' => ['bool'],
    ];

    protected static $nullables = [
        'poolId' => false,
        'truckTypeId' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'carrierPriceTomorrow' => false,
        'isActive' => false,
    ];
}
