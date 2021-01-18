<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа
 * source: order/objects/bid-item.json
 *
 * @property int $id
 * @property string $value
 * @property string $vatLessValue
 * @property string $displayValue
 * @property string $companyId
 * @property int $creatorId
 * @property bool $isWinBid
 * @property string $createDate
 * @property float $vatRate
 * @property string $currencyCode
 * @property string $priceType
 */
final class BidItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'value' => ['string'],
        'vatLessValue' => ['string'],
        'displayValue' => ['string'],
        'companyId' => ['string'],
        'creatorId' => ['int'],
        'isWinBid' => ['bool'],
        'createDate' => ['string'],
        'vatRate' => ['float'],
        'currencyCode' => ['string'],
        'priceType' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'value' => false,
        'vatLessValue' => false,
        'displayValue' => false,
        'companyId' => false,
        'creatorId' => false,
        'isWinBid' => false,
        'createDate' => false,
        'vatRate' => false,
        'currencyCode' => false,
        'priceType' => false,
    ];
}
