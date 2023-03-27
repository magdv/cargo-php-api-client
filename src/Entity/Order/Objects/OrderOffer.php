<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-offer.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Предложение для запроса цен
 * source: order/objects/order-offer.json
 *
 * @property int $id
 * @property string $value
 * @property int $carCount
 * @property string $carCountUnit
 * @property string $companyId
 * @property int $creatorId
 * @property string $createDate
 */
final class OrderOffer extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'value' => ['string'],
        'carCount' => ['int'],
        'carCountUnit' => ['string'],
        'companyId' => ['string'],
        'creatorId' => ['int'],
        'createDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'value' => false,
        'carCount' => false,
        'carCountUnit' => false,
        'companyId' => false,
        'creatorId' => false,
        'createDate' => false,
    ];
}
