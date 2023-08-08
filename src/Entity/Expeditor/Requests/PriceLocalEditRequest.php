<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для обновления справочника цен
 * source: expeditor/requests/price-local-edit-request.json
 *
 * @property int $priceLocalPoolId
 * @property int $truckTypeId
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property string $carrierPriceTomorrow
 * @property bool $isActive
 */
final class PriceLocalEditRequest extends AbstractEntity
{
    protected static $types = [
        'priceLocalPoolId' => ['int'],
        'truckTypeId' => ['int'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'carrierPriceTomorrow' => ['string'],
        'isActive' => ['bool'],
    ];

    protected static $nullables = [
        'priceLocalPoolId' => false,
        'truckTypeId' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'carrierPriceTomorrow' => false,
        'isActive' => false,
    ];
}
