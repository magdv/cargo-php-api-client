<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Данные по своей ставке перевозчика
 * source: order/OrderCarrierAsk/objects/carrier-ask-current.json
 *
 * @property string $id
 * @property string $companyId
 * @property string $status
 * @property PayValue $price
 * @property bool $isCarrierWithVat
 * @property string $expirationDateTime
 * @property int $updaterId
 * @property string $updateDate
 * @property CarrierAskAccess $access
 */
final class CarrierAskCurrent extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'companyId' => ['string'],
        'status' => ['string'],
        'price' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'isCarrierWithVat' => ['bool'],
        'expirationDateTime' => ['string'],
        'updaterId' => ['int'],
        'updateDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects\CarrierAskAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'status' => false,
        'price' => false,
        'isCarrierWithVat' => false,
        'expirationDateTime' => false,
        'updaterId' => false,
        'updateDate' => false,
        'access' => false,
    ];
}
