<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контекстные права доступа к управлению отслеживанием
 * source: order/Common/objects/tracking.json#/properties/access
 *
 * @property bool $view
 * @property bool $update
 * @property bool $delete
 */
final class TrackingAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['view' => false, 'update' => false, 'delete' => false];
}
