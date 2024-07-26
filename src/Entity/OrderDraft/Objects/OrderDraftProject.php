<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;

/**
 * Объект проектного заказа
 * source: order-draft/objects/order-draft-project.json
 *
 * @property string $kind
 * @property string $priceType
 * @property DateRange $transportationPeriod
 * @property string $biddingStartDate
 * @property int $biddingDuration
 * @property string $id
 * @property string $createDate
 * @property OrderDraftAccess $access
 */
final class OrderDraftProject extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'priceType' => ['string'],
        'transportationPeriod' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'biddingStartDate' => ['string'],
        'biddingDuration' => ['int'],
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraftAccess'],
    ];

    protected static $nullables = [
        'kind' => false,
        'priceType' => false,
        'transportationPeriod' => false,
        'biddingStartDate' => false,
        'biddingDuration' => false,
        'id' => false,
        'createDate' => false,
        'access' => false,
    ];
}
