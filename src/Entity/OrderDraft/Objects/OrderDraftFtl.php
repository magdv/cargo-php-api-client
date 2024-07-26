<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект ftl черновика
 * source: order-draft/objects/order-draft-ftl.json
 *
 * @property string $kind
 * @property int[] $loading
 * @property string[] $device
 * @property bool $isMultiCurrency
 * @property string $biddingStartDate
 * @property int $biddingDuration
 * @property string $id
 * @property string $createDate
 * @property OrderDraftAccess $access
 */
final class OrderDraftFtl extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'isMultiCurrency' => ['bool'],
        'biddingStartDate' => ['string'],
        'biddingDuration' => ['int'],
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraftAccess'],
    ];

    protected static $nullables = [
        'kind' => false,
        'loading' => false,
        'device' => false,
        'isMultiCurrency' => false,
        'biddingStartDate' => false,
        'biddingDuration' => false,
        'id' => false,
        'createDate' => false,
        'access' => false,
    ];
}
