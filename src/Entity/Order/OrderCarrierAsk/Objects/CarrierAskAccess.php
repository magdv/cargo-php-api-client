<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к ставке перевозчика по заявке
 * source: order/OrderCarrierAsk/objects/carrier-ask-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $createAccept
 * @property bool $delete
 */
final class CarrierAskAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'update' => ['bool'], 'createAccept' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['view' => false, 'update' => false, 'createAccept' => false, 'delete' => false];
}
