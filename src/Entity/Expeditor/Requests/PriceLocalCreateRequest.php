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
 * @property string $departureCode
 * @property string $destinationCode
 * @property string $truckTypeId
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property string $carrierPriceTomorrow
 */
final class PriceLocalCreateRequest extends AbstractEntity
{
    protected static $types = [
        'departureCode' => ['string'],
        'destinationCode' => ['string'],
        'truckTypeId' => ['string'],
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'carrierPriceTomorrow' => ['string'],
    ];

    protected static $nullables = [
        'departureCode' => false,
        'destinationCode' => false,
        'truckTypeId' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'carrierPriceTomorrow' => false,
    ];
}
