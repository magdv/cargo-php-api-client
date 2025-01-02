<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderExpeditorOffer\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeSeparate;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Данные по своему предложению цены
 * source: order/OrderExpeditorOffer/objects/expeditor-offer-carrier-current.json
 *
 * @property string $id
 * @property int $clientId
 * @property int $creatorId
 * @property PayValue $price
 * @property bool $isCarrierWithVat
 * @property DateTimeSeparate $loadDateTime
 * @property string $updateDate
 */
final class ExpeditorOfferCarrierCurrent extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'clientId' => ['int'],
        'creatorId' => ['int'],
        'price' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'isCarrierWithVat' => ['bool'],
        'loadDateTime' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparate'],
        'updateDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'clientId' => false,
        'creatorId' => false,
        'price' => false,
        'isCarrierWithVat' => false,
        'loadDateTime' => false,
        'updateDate' => false,
    ];
}
