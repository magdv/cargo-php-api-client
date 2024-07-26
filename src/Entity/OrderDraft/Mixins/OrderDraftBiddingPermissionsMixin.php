<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Поля для ограничений доступа к торгам
 * source: order-draft/mixins/order-draft-bidding-permissions-mixin.json
 *
 * @property string $accessTypeId
 * @property string[] $accessClient
 * @property int $contractTypeId
 */
final class OrderDraftBiddingPermissionsMixin extends AbstractEntity
{
    protected static $types = [
        'accessTypeId' => ['string'],
        'accessClient' => ['array', 'string'],
        'contractTypeId' => ['int'],
    ];

    protected static $nullables = ['accessTypeId' => false, 'accessClient' => false, 'contractTypeId' => false];
}
