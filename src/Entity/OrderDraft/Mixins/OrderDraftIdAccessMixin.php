<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraftAccess;

/**
 * Идентификатор и доступы для черновика
 * source: order-draft/mixins/order-draft-id-access-mixin.json
 *
 * @property string $id
 * @property string $createDate
 * @property OrderDraftAccess $access
 */
final class OrderDraftIdAccessMixin extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraftAccess'],
    ];

    protected static $nullables = ['id' => false, 'createDate' => false, 'access' => false];
}
