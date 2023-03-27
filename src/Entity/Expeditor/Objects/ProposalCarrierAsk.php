<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/proposal-carrier-ask.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PayValue;
use Cargomart\ApiClient\Entity\Order\Objects\CarrierAskAccess;

/**
 * Данные по ставке перевозчика
 * source: expeditor/objects/proposal-carrier-ask.json
 *
 * @property string $id
 * @property string $companyId
 * @property string $status
 * @property PayValue $price
 * @property PayValue $consignorPrice
 * @property PayValue $carrierPrice
 * @property bool $isCarrierWithVat
 * @property string $expirationDateTime
 * @property int $updaterId
 * @property string $updateDate
 * @property CarrierAskAccess $access
 */
final class ProposalCarrierAsk extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'companyId' => ['string'],
        'status' => ['string'],
        'price' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'consignorPrice' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'isCarrierWithVat' => ['bool'],
        'expirationDateTime' => ['string'],
        'updaterId' => ['int'],
        'updateDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\CarrierAskAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'status' => false,
        'price' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'isCarrierWithVat' => false,
        'expirationDateTime' => false,
        'updaterId' => false,
        'updateDate' => false,
        'access' => false,
    ];
}
