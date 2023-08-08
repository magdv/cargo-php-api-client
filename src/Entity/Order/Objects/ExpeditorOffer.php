<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeSeparate;
use Cargomart\ApiClient\Entity\Base\PayValue;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Данные по предложению цены
 * source: order/objects/expeditor-offer.json
 *
 * @property string $orderId
 * @property UserContactShort $creatorContact
 * @property CompanyShort $carrierCompany
 * @property PayValue $price
 * @property int $countPriceOffers
 * @property DateTimeSeparate $loadDateTime
 * @property string $updateDate
 */
final class ExpeditorOffer extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['string'],
        'creatorContact' => ['Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'carrierCompany' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'price' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'countPriceOffers' => ['int'],
        'loadDateTime' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparate'],
        'updateDate' => ['string'],
    ];

    protected static $nullables = [
        'orderId' => false,
        'creatorContact' => false,
        'carrierCompany' => false,
        'price' => false,
        'countPriceOffers' => false,
        'loadDateTime' => false,
        'updateDate' => false,
    ];
}
