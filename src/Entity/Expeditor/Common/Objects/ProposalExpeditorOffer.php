<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeSeparate;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Данные по предложению цены
 * source: expeditor/Common/objects/proposal-expeditor-offer.json
 *
 * @property string $id
 * @property string $carrierId
 * @property int $creatorId
 * @property PayValue $consignorPrice
 * @property PayValue $carrierPrice
 * @property DateTimeSeparate $loadDateTime
 * @property string $updateDate
 */
final class ProposalExpeditorOffer extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'carrierId' => ['string'],
        'creatorId' => ['int'],
        'consignorPrice' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'loadDateTime' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparate'],
        'updateDate' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'carrierId' => false,
        'creatorId' => false,
        'consignorPrice' => false,
        'carrierPrice' => false,
        'loadDateTime' => false,
        'updateDate' => false,
    ];
}
