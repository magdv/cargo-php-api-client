<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Текущее предложение для запроса цен
 * source: order/objects/order-offer-current.json
 *
 * @property string $value
 * @property int $carCount
 * @property string $carCountUnit
 * @property string $createDate
 */
final class OrderOfferCurrent extends AbstractEntity
{
    protected static $types = [
        'value' => ['string'],
        'carCount' => ['int'],
        'carCountUnit' => ['string'],
        'createDate' => ['string'],
    ];

    protected static $nullables = ['value' => false, 'carCount' => false, 'carCountUnit' => false, 'createDate' => false];
}
