<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-draft-ftl-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к черновику FTL заказа
 * source: order/objects/order-draft-ftl-access.json
 *
 * @property bool $update
 * @property bool $delete
 * @property bool $view
 * @property bool $publish
 */
final class OrderDraftFtlAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool'], 'view' => ['bool'], 'publish' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false, 'view' => false, 'publish' => false];
}
