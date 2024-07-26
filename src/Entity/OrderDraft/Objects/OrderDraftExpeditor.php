<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект экспедиторского черновика
 * source: order-draft/objects/order-draft-expeditor.json
 *
 * @property string $kind
 * @property string $priceStrategyType
 * @property int[] $loading
 * @property string[] $device
 * @property string $id
 * @property string $createDate
 * @property OrderDraftAccess $access
 */
final class OrderDraftExpeditor extends AbstractEntity
{
    protected static $types = [
        'kind' => ['string'],
        'priceStrategyType' => ['string'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraftAccess'],
    ];

    protected static $nullables = [
        'kind' => false,
        'priceStrategyType' => false,
        'loading' => false,
        'device' => false,
        'id' => false,
        'createDate' => false,
        'access' => false,
    ];
}
